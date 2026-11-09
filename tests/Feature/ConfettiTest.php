<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class ConfettiTest extends TestCase
{
    use RefreshDatabase;

    public function test_component_renders_tabler_attributes(): void
    {
        $html = Blade::render('<x-confetti :count="300" :duration="3000" colors="#f00, #0f0">Hooray</x-confetti>');

        $this->assertStringContainsString('data-bs-toggle="confetti"', $html);
        $this->assertStringContainsString('data-bs-count="300"', $html);
        $this->assertStringContainsString('data-bs-duration="3000"', $html);
        $this->assertStringContainsString('data-bs-colors="#f00, #0f0"', $html);
        $this->assertStringContainsString('Hooray', $html);
    }

    public function test_component_has_a_default_label(): void
    {
        $this->assertStringContainsString(__('Celebrate'), Blade::render('<x-confetti />'));
    }

    public function test_creating_a_user_celebrates_once(): void
    {
        $admin = User::factory()->create();
        $admin->is_super_admin = true;
        $admin->save();
        $this->actingAs($admin);

        $this->post('/admin/users', [
            'name' => 'Jane', 'email' => 'jane@example.com', 'password' => 'password-123', 'password_confirmation' => 'password-123',
        ])->assertRedirect('/admin/users');

        $this->get('/admin/users')->assertOk()->assertSee('data-confetti-auto', false);
        // the flag is flashed, so the next page does not celebrate again
        $this->get('/admin/users')->assertOk()->assertDontSee('data-confetti-auto', false);
    }
}
