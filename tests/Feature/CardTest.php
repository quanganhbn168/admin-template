<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class CardTest extends TestCase
{
    public function test_plain_card_has_no_gradient(): void
    {
        $html = Blade::render('<x-card>x</x-card>');

        $this->assertStringContainsString('class="card"', $html);
        $this->assertStringNotContainsString('card-gradient', $html);
    }

    public function test_gradient_options_map_to_tabler_classes(): void
    {
        $html = Blade::render('<x-card gradient="sun" direction="end" animated>x</x-card>');

        foreach (['card-gradient', 'card-gradient-sun', 'card-gradient-end', 'card-gradient-animated'] as $class) {
            $this->assertStringContainsString($class, $html);
        }

        $this->assertStringContainsString('card-gradient', Blade::render('<x-card gradient>x</x-card>'));
    }

    public function test_unknown_gradient_names_and_directions_are_ignored(): void
    {
        $html = Blade::render('<x-card gradient="evil-name" direction="up" animated>x</x-card>');

        $this->assertStringNotContainsString('evil-name', $html);
        $this->assertStringNotContainsString('card-gradient-up', $html);
        $this->assertStringContainsString('card-gradient', $html);
    }

    public function test_every_gradient_name_exists_in_tabler_css(): void
    {
        $css = file_get_contents(base_path('node_modules/@tabler/core/dist/css/tabler.css'));

        foreach (['azure', 'ocean', 'love', 'rainbow', 'sun', 'snow', 'psychedelic', 'gray-dark', 'start', 'end', 'bottom', 'animated'] as $name) {
            $this->assertStringContainsString(".card-gradient-{$name}", $css, $name);
        }
    }
}
