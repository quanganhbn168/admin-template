<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    private function superAdmin(): User
    {
        $user = User::factory()->create();
        $user->is_super_admin = true;
        $user->save();

        return $user;
    }

    public function test_guest_is_redirected_to_login(): void
    {
        $this->get('/admin')->assertRedirect('/login');
    }

    public function test_public_registration_does_not_exist(): void
    {
        $this->get('/register')->assertNotFound();
        $this->post('/register', [])->assertNotFound();
    }

    public function test_user_can_login_and_logout(): void
    {
        $user = User::factory()->create(['password' => 'secret-123']);

        $this->post('/login', ['email' => $user->email, 'password' => 'secret-123'])
            ->assertRedirect('/admin');
        $this->assertAuthenticatedAs($user);

        $this->get('/admin')->assertOk();

        $this->post('/logout')->assertRedirect('/login');
        $this->assertGuest();
    }

    public function test_login_fails_with_wrong_password(): void
    {
        $user = User::factory()->create();

        $this->from('/login')
            ->post('/login', ['email' => $user->email, 'password' => 'wrong'])
            ->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_normal_user_cannot_manage_users(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get('/admin/users')->assertForbidden();
        $this->post('/admin/users', [
            'name' => 'X', 'email' => 'x@example.com',
            'password' => 'password-123', 'password_confirmation' => 'password-123',
        ])->assertForbidden();
        $this->assertDatabaseMissing('users', ['email' => 'x@example.com']);
    }

    public function test_super_admin_can_create_edit_and_delete_users(): void
    {
        $this->actingAs($this->superAdmin());

        $this->get('/admin/users')->assertOk();

        $this->post('/admin/users', [
            'name' => 'Jane', 'email' => 'jane@example.com',
            'password' => 'password-123', 'password_confirmation' => 'password-123',
        ])->assertRedirect('/admin/users');

        $jane = User::where('email', 'jane@example.com')->firstOrFail();
        $this->assertFalse($jane->is_super_admin);

        $this->put("/admin/users/{$jane->id}", ['name' => 'Jane D', 'email' => 'jane@example.com'])
            ->assertRedirect('/admin/users');
        $this->assertSame('Jane D', $jane->fresh()->name);

        $this->delete("/admin/users/{$jane->id}")->assertRedirect('/admin/users');
        $this->assertModelMissing($jane);
    }

    public function test_super_admin_cannot_be_deleted(): void
    {
        $admin = $this->superAdmin();
        $this->actingAs($admin);

        $this->delete("/admin/users/{$admin->id}");
        $this->assertModelExists($admin);
    }

    public function test_component_catalog_renders_only_in_local(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get('/admin/components')->assertNotFound();

        $this->app->detectEnvironment(fn () => 'local');
        $this->get('/admin/components')->assertOk()->assertSee('x-delete-button', false);
    }

    public function test_artisan_command_creates_super_admin(): void
    {
        $this->artisan('admin:create', [
            '--name' => 'Boss', '--email' => 'boss@example.com', '--password' => 'password-123',
        ])->assertSuccessful();

        $this->assertTrue(User::where('email', 'boss@example.com')->firstOrFail()->is_super_admin);
    }

    public function test_artisan_command_rejects_duplicate_email(): void
    {
        $user = User::factory()->create();

        $this->artisan('admin:create', [
            '--name' => 'Boss', '--email' => $user->email, '--password' => 'password-123',
        ])->assertFailed();
    }
}
