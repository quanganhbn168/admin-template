<?php

namespace Tests\Feature;

use App\Models\User;
use App\Settings\GeneralSettings;
use App\Support\Html;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class HtmlTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_keeps_normal_formatting(): void
    {
        $html = Html::clean('<h2 class="text-center">Tiêu đề</h2><p>Xin <strong>chào</strong> <em>bạn</em></p><ul><li>Một</li></ul>'
            . '<a href="https://example.com/a">link</a><img src="/storage/uploads/a.png" alt="ảnh">'
            . '<table class="table table-bordered"><tr><td>x</td></tr></table>');

        $this->assertStringContainsString('<h2 class="text-center">Tiêu đề</h2>', $html);
        $this->assertStringContainsString('<strong>chào</strong>', $html);
        $this->assertStringContainsString('<img src="/storage/uploads/a.png" alt="ảnh" />', $html);
        $this->assertStringContainsString('class="table table-bordered"', $html);
        $this->assertStringContainsString('rel="noopener noreferrer"', $html);
    }

    #[DataProvider('attacks')]
    public function test_it_removes_dangerous_content(string $payload, string $forbidden): void
    {
        $this->assertStringNotContainsStringIgnoringCase($forbidden, Html::clean($payload));
    }

    public static function attacks(): array
    {
        return [
            'script tag' => ['<p>hi</p><script>alert(1)</script>', 'script'],
            'event handler' => ['<img src="/a.png" onerror="alert(1)">', 'onerror'],
            'javascript url' => ['<a href="javascript:alert(1)">x</a>', 'javascript:'],
            'data url image' => ['<img src="data:text/html;base64,PHNjcmlwdD4=">', 'data:'],
            'iframe' => ['<iframe src="https://evil.test"></iframe>', 'iframe'],
            'style attribute' => ['<p style="position:fixed;top:0;left:0;width:100%;height:100%">x</p>', 'style='],
            'overlay class' => ['<div class="position-fixed top-0 start-0 w-100 h-100">x</div>', 'position-fixed'],
            'svg onload' => ['<svg onload="alert(1)"></svg>', 'onload'],
            'form' => ['<form action="https://evil.test"><input></form>', '<form'],
            'object' => ['<object data="x.swf"></object>', 'object'],
        ];
    }

    public function test_empty_values_are_handled(): void
    {
        $this->assertSame('', Html::clean(null));
        $this->assertSame('', Html::clean('   '));
    }

    public function test_settings_footer_note_is_cleaned_when_saved_and_shown(): void
    {
        $admin = User::factory()->create();
        $admin->is_super_admin = true;
        $admin->save();
        $this->actingAs($admin);

        $this->put('/admin/settings', [
            'app_name' => 'Demo', 'timezone' => 'UTC',
            'footer_note' => '<p>Liên hệ <strong>ngay</strong></p><script>alert(1)</script><img src="/x.png" onerror="alert(2)">',
        ])->assertSessionHas('success');

        app()->forgetInstance(GeneralSettings::class);
        $stored = app(GeneralSettings::class)->footer_note;
        $this->assertStringContainsString('<strong>ngay</strong>', $stored);
        $this->assertStringNotContainsString('script', $stored);
        $this->assertStringNotContainsString('onerror', $stored);

        $this->get('/admin')->assertOk()->assertSee('<strong>ngay</strong>', false)->assertDontSee('alert(1)', false);
    }

    public function test_even_a_tampered_stored_value_is_cleaned_when_rendered(): void
    {
        $settings = app(GeneralSettings::class);
        $settings->footer_note = '<p>ok</p><script>alert("stored")</script>'; // bypasses the controller on purpose
        $settings->save();
        $this->actingAs(User::factory()->create());

        $this->get('/admin')->assertOk()->assertSee('<p>ok</p>', false)->assertDontSee('alert("stored")', false);
    }

    public function test_editor_component_is_wired_for_language_and_uploads(): void
    {
        $this->app->detectEnvironment(fn () => 'local');
        $this->app->setLocale('vi');

        $this->get('/admin/components/advanced')->assertOk()
            ->assertSee('data-language="vi"', false)
            ->assertSee('data-upload-url="' . route('admin.uploads.store') . '"', false);

        $this->assertFileExists(resource_path('vendor/hugerte-langs/vi.js'));
    }

    public function test_upload_returns_a_site_relative_url_for_the_editor(): void
    {
        Storage::fake('public');
        $this->actingAs(User::factory()->create());

        $url = $this->postJson('/admin/uploads', ['file' => UploadedFile::fake()->image('p.png')])->assertCreated()->json('url');

        $this->assertStringStartsWith('/storage/uploads/', $url);
    }
}
