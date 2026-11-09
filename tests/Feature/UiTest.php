<?php

namespace Tests\Feature;

use App\Models\User;
use App\Support\Ui;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ViewErrorBag;
use Tests\TestCase;

class UiTest extends TestCase
{
    use RefreshDatabase;

    public function test_defaults_produce_no_attributes_except_the_vertical_position(): void
    {
        $this->assertSame(['navbar-position' => 'vertical'], array_filter(Ui::attributes()));
    }

    public function test_config_maps_to_tabler_attributes(): void
    {
        config([
            'ui.layout' => 'vertical', 'ui.width' => 'boxed', 'ui.sidebar' => 'folded', 'ui.navbar_sticky' => true,
            'ui.navbar_style' => 'floating', 'ui.navbar_theme' => 'dark',
            'ui.theme' => ['primary' => 'green', 'base' => 'slate', 'font' => 'serif', 'radius' => '2'],
        ]);

        $this->assertSame([
            'navbar-position' => 'vertical', 'layout' => 'boxed', 'sidebar' => 'folded', 'navbar' => 'sticky',
            'navbar-style' => 'floating', 'navbar-theme' => 'dark',
            'theme-primary' => 'green', 'theme-base' => 'slate', 'theme-font' => 'serif', 'theme-radius' => '2',
        ], Ui::attributes());
    }

    public function test_invalid_values_fall_back_to_defaults(): void
    {
        config(['ui.layout' => 'nonsense', 'ui.width' => 'huge', 'ui.theme.primary' => '"><script>']);

        $this->assertSame('vertical', Ui::layout());
        $this->assertNull(Ui::attributes()['layout']);
        $this->assertNull(Ui::attributes()['theme-primary']);
    }

    public function test_sidebar_only_options_are_ignored_in_horizontal_layouts(): void
    {
        config(['ui.layout' => 'horizontal', 'ui.sidebar' => 'folded']);

        $this->assertNull(Ui::attributes()['navbar-position']);
        $this->assertNull(Ui::attributes()['sidebar']);
    }

    public function test_layout_attributes_reach_the_page(): void
    {
        config(['ui.width' => 'boxed', 'ui.sidebar_style' => 'end']);
        $this->actingAs(User::factory()->create());

        $this->get('/admin')->assertOk()
            ->assertSee('data-bs-layout="boxed"', false)
            ->assertSee('navbar-end', false)
            ->assertDontSee('data-bs-layout="condensed"', false);
    }

    public function test_form_catalog_loads_the_libraries_it_needs_once(): void
    {
        $this->get('/admin/components/forms')->assertNotFound();

        $this->app->detectEnvironment(fn () => 'local');

        $html = $this->get('/admin/components/forms')->assertOk()
            ->assertSee('data-bs-toggle="datepicker"', false)
            ->assertSee('data-tom-select', false)
            ->assertSee('data-slider', false)
            ->assertSee('data-bs-toggle="number-input"', false)
            ->getContent();

        foreach (['vanilla-calendar-pro', 'imask', 'tom-select', 'nouislider'] as $lib) {
            $this->assertStringContainsString("/tabler/libs/{$lib}/", $html, "{$lib} must be loaded");
        }

        // two date fields on the page, but the library is requested only once
        $this->assertSame(1, substr_count($html, 'vanilla-calendar-pro/index.js'));
    }

    public function test_select_marks_the_given_value_as_selected(): void
    {
        view()->share('errors', new ViewErrorBag);

        $html = Blade::render('<x-form.select name="r" label="R" :options="[\'a\' => \'A\', \'b\' => \'B\']" value="b" />');

        $this->assertStringContainsString('<option value="b" selected', $html);
        $this->assertStringNotContainsString('<option value="a" selected', $html);
    }
}
