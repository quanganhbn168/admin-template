<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\AppServiceProvider;
use App\Settings\GeneralSettings;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class AccountTest extends TestCase
{
    use RefreshDatabase;

    private function superAdmin(): User
    {
        $user = User::factory()->create();
        $user->is_super_admin = true;
        $user->save();

        return $user;
    }

    // --- forgot / reset password -------------------------------------------------

    public function test_forgot_password_page_and_login_link(): void
    {
        $this->get('/forgot-password')->assertOk()->assertSee(__('Send reset link'));
        $this->get('/login')->assertOk()->assertSee(route('password.request'), false);
    }

    public function test_reset_link_is_sent_for_a_known_email(): void
    {
        Notification::fake();
        $user = User::factory()->create();

        $this->post('/forgot-password', ['email' => $user->email])->assertSessionHas('success');

        Notification::assertSentTo($user, ResetPassword::class);
    }

    public function test_unknown_email_gets_the_same_answer_and_no_mail(): void
    {
        Notification::fake();

        $this->post('/forgot-password', ['email' => 'nobody@example.com'])
            ->assertSessionHas('success')
            ->assertSessionHasNoErrors();

        Notification::assertNothingSent();
    }

    public function test_password_can_be_reset_with_a_valid_token(): void
    {
        $user = User::factory()->create();
        $token = Password::createToken($user);

        $this->get("/reset-password/{$token}?email={$user->email}")->assertOk()->assertSee($user->email);

        $this->post('/reset-password', [
            'token' => $token, 'email' => $user->email,
            'password' => 'brand-new-pass-1', 'password_confirmation' => 'brand-new-pass-1',
        ])->assertRedirect('/login');

        $this->assertTrue(Hash::check('brand-new-pass-1', $user->fresh()->password));
    }

    public function test_reset_fails_with_a_wrong_token(): void
    {
        $user = User::factory()->create();

        $this->post('/reset-password', [
            'token' => 'wrong', 'email' => $user->email,
            'password' => 'brand-new-pass-1', 'password_confirmation' => 'brand-new-pass-1',
        ])->assertSessionHasErrors('email');

        $this->assertFalse(Hash::check('brand-new-pass-1', $user->fresh()->password));
    }

    // --- profile -----------------------------------------------------------------

    public function test_profile_can_be_updated(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/admin/profile')->assertOk()->assertSee($user->email);

        $this->put('/admin/profile', ['name' => 'New Name', 'email' => 'new@example.com'])->assertSessionHas('success');

        $this->assertSame('New Name', $user->fresh()->name);
        $this->assertSame('new@example.com', $user->fresh()->email);
    }

    public function test_profile_email_must_be_unique(): void
    {
        $other = User::factory()->create();
        $user = User::factory()->create();

        $this->actingAs($user)->put('/admin/profile', ['name' => 'X', 'email' => $other->email])->assertSessionHasErrors('email');
    }

    public function test_password_change_requires_the_current_password(): void
    {
        $user = User::factory()->create(['password' => 'old-password-1']);
        $this->actingAs($user);

        $this->put('/admin/profile/password', [
            'current_password' => 'wrong', 'password' => 'new-password-1', 'password_confirmation' => 'new-password-1',
        ])->assertSessionHasErrors('current_password');
        $this->assertTrue(Hash::check('old-password-1', $user->fresh()->password));

        $this->put('/admin/profile/password', [
            'current_password' => 'old-password-1', 'password' => 'new-password-1', 'password_confirmation' => 'new-password-1',
        ])->assertSessionHas('success');
        $this->assertTrue(Hash::check('new-password-1', $user->fresh()->password));
    }

    // --- settings ----------------------------------------------------------------

    /** A fresh copy read from the database (the container may still hold an instance loaded earlier). */
    private function settings(): GeneralSettings
    {
        app()->forgetInstance(GeneralSettings::class);

        return app(GeneralSettings::class);
    }

    public function test_settings_are_for_super_admins_only(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get('/admin/settings')->assertForbidden();
        $this->put('/admin/settings', ['app_name' => 'X', 'timezone' => 'UTC'])->assertForbidden();
        $this->assertNull($this->settings()->app_name);
    }

    public function test_super_admin_saves_settings(): void
    {
        $this->actingAs($this->superAdmin());

        $this->get('/admin/settings')->assertOk();

        $this->put('/admin/settings', [
            'app_name' => 'Cửa hàng An Phát', 'contact_email' => 'hello@example.com', 'timezone' => 'Asia/Ho_Chi_Minh',
        ])->assertSessionHas('success');

        $this->assertSame('Cửa hàng An Phát', $this->settings()->app_name);
        $this->assertSame('hello@example.com', $this->settings()->contact_email);
    }

    public function test_settings_are_validated(): void
    {
        $this->actingAs($this->superAdmin());

        $this->put('/admin/settings', ['app_name' => '', 'contact_email' => 'not-an-email', 'timezone' => 'Mars/Base'])
            ->assertSessionHasErrors(['app_name', 'contact_email', 'timezone']);
    }

    public function test_saved_app_name_is_used_on_the_next_request(): void
    {
        $this->actingAs($this->superAdmin());
        $general = $this->settings();
        $general->app_name = 'Tên mới';
        $general->timezone = 'Asia/Tokyo';
        $general->save();

        // the provider applies saved settings every time the application boots
        $this->app->getProvider(AppServiceProvider::class)->boot();

        $this->assertSame('Tên mới', config('app.name'));
        $this->assertSame('Asia/Tokyo', config('app.timezone'));
        $this->get('/admin')->assertOk()->assertSee('Tên mới');
    }

    // --- error pages -------------------------------------------------------------

    public function test_404_uses_the_custom_page(): void
    {
        $this->get('/no-such-page')->assertNotFound()->assertSee(__('Page not found'))->assertSee(__('Take me home'));
    }

    public function test_403_uses_the_custom_page(): void
    {
        $this->actingAs(User::factory()->create());

        $this->get('/admin/users')->assertForbidden()->assertSee(__('Access denied'));
    }
}
