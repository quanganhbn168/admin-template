<?php

namespace Tests\Feature;

use App\Models\User;
use DOMDocument;
use DOMXPath;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_renders_widgets_and_valid_chart_configs(): void
    {
        $this->actingAs(User::factory()->create());

        $html = $this->get('/admin')->assertOk()->assertSee('timeline-event', false)->getContent();

        $doc = new DOMDocument;
        @$doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        $charts = (new DOMXPath($doc))->query('//*[@data-chart]');

        $this->assertGreaterThanOrEqual(6, $charts->length);

        foreach ($charts as $node) {
            $config = json_decode($node->getAttribute('data-chart'), true);

            $this->assertIsArray($config, 'chart config must be valid JSON');
            $this->assertNotEmpty($config['series']);
            $this->assertContains($config['chart']['type'], ['line', 'area', 'bar', 'donut', 'radialBar']);
        }
    }

    public function test_every_layout_renders_the_menu(): void
    {
        $this->actingAs(User::factory()->create());

        foreach (['vertical' => 'navbar-vertical', 'horizontal' => 'navbar-menu', 'condensed' => 'navbar-menu'] as $layout => $marker) {
            config(['ui.layout' => $layout]);

            $this->get('/admin')->assertOk()->assertSee($marker, false)->assertSee(__('Settings'));
        }
    }

    public function test_menu_hides_admin_only_items_from_normal_users(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get('/admin')->assertDontSee(route('admin.users.index'), false);
    }

    public function test_timeline_shows_icons(): void
    {
        $html = view('components.timeline', ['items' => [['title' => 'A', 'icon' => 'ti-check', 'color' => 'x']]])->render();

        $this->assertStringContainsString('ti-check', $html);
        $this->assertStringContainsString('bg-x text-x-fg', $html);
    }
}
