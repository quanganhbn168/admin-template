<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class CardPatternsTest extends TestCase
{
    public function test_cards_catalog_renders_every_pattern(): void
    {
        $this->get('/admin/components/cards')->assertNotFound();

        $this->app->detectEnvironment(fn () => 'local');

        $html = $this->get('/admin/components/cards')->assertOk()->getContent();

        foreach (['card-gradient-danger', 'card-gradient-success', 'card-gradient-love', 'card-gradient-rainbow', 'card-gradient-gold', 'card-gradient-ocean', 'list-icon', 'ribbon', 'btn-list-center'] as $marker) {
            $this->assertStringContainsString($marker, $html, $marker);
        }
    }

    public function test_pricing_marks_excluded_features_and_ribbon_has_no_position_class(): void
    {
        $html = Blade::render('<x-widget.pricing plan="Pro" price="$9" ribbon="Hot" :features="[[\'text\' => \'A\'], [\'text\' => \'B\', \'included\' => false]]" button="Buy" />');

        $this->assertStringContainsString('ti-check', $html);
        $this->assertStringContainsString('ti-x', $html);
        $this->assertStringContainsString('class="ribbon bg-pink"', $html);
    }

    public function test_delta_is_green_when_up_and_red_when_down(): void
    {
        $up = Blade::render('<x-widget.delta amount="1" caption="c" :delta="4" />');
        $down = Blade::render('<x-widget.delta amount="1" caption="c" :delta="-2" />');

        $this->assertStringContainsString('card-gradient-green', $up);
        $this->assertStringContainsString('ti-arrow-up', $up);
        $this->assertStringContainsString('card-gradient-red', $down);
        $this->assertStringContainsString('ti-arrow-down', $down);
    }

    public function test_kpi_shows_progress_only_when_given_a_percentage(): void
    {
        $this->assertStringContainsString('progress-bar', Blade::render('<x-widget.kpi label="L" value="1" icon="ti-clock" :percent="40" />'));
        $this->assertStringNotContainsString('progress-bar', Blade::render('<x-widget.kpi label="L" value="1" icon="ti-clock" />'));
    }

    public function test_notice_only_renders_the_button_row_when_it_has_buttons(): void
    {
        $this->assertStringNotContainsString('btn-list', Blade::render('<x-widget.notice title="T" />'));
        $this->assertStringContainsString('btn-list', Blade::render('<x-widget.notice title="T"><x-button>OK</x-button></x-widget.notice>'));
    }
}
