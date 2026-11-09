<?php

namespace Tests\Feature;

use App\Console\Commands\StripPreview;
use App\Models\User;
use App\Support\Menu;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class TemplateTest extends TestCase
{
    use RefreshDatabase;

    public function test_strip_preview_removes_only_the_gallery_files(): void
    {
        $original = $this->app->basePath();
        $tmp = sys_get_temp_dir() . '/tpl-' . uniqid();

        try {
            foreach (StripPreview::PATHS as $path) {
                str_contains(basename($path), '.') ? File::ensureDirectoryExists(dirname("{$tmp}/{$path}")) : File::ensureDirectoryExists("{$tmp}/{$path}");
                str_contains(basename($path), '.') ? File::put("{$tmp}/{$path}", 'x') : File::put("{$tmp}/{$path}/page.blade.php", 'x');
            }
            File::ensureDirectoryExists("{$tmp}/resources/views/admin");
            File::put("{$tmp}/resources/views/admin/dashboard.blade.php", 'keep me');
            File::put("{$tmp}/routes/web.php", 'keep me too');

            $this->app->setBasePath($tmp);

            $this->artisan('template:strip-preview', ['--force' => true])->assertSuccessful();

            foreach (StripPreview::PATHS as $path) {
                $this->assertFileDoesNotExist("{$tmp}/{$path}");
                $this->assertDirectoryDoesNotExist("{$tmp}/{$path}");
            }
            $this->assertFileExists("{$tmp}/resources/views/admin/dashboard.blade.php");
            $this->assertFileExists("{$tmp}/routes/web.php");

            // running it again is harmless
            $this->artisan('template:strip-preview', ['--force' => true])->assertSuccessful();
        } finally {
            $this->app->setBasePath($original);
            File::deleteDirectory($tmp);
        }
    }

    public function test_strip_preview_asks_before_deleting(): void
    {
        $this->artisan('template:strip-preview')->expectsConfirmation('Delete these files? (they stay in git history)', 'no')->assertFailed();

        $this->assertDirectoryExists(resource_path('views/components/preview'));
    }

    public function test_menu_hides_items_whose_route_does_not_exist(): void
    {
        config(['menu' => [
            ['label' => 'Dashboard', 'route' => 'admin.dashboard'],
            ['label' => 'Gone', 'route' => 'preview.removed'],
            ['label' => 'Group', 'icon' => 'ti-code', 'children' => [['label' => 'Also gone', 'route' => 'nope']]],
        ]]);
        $this->actingAs(User::factory()->create());

        $labels = array_column(Menu::items(), 'label');

        $this->assertContains(__('Dashboard'), $labels);
        $this->assertNotContains('Gone', $labels);
        $this->assertNotContains('Group', $labels); // a dropdown with no visible children disappears
    }

    public function test_preview_can_be_switched_off_in_config(): void
    {
        $this->assertTrue(config('ui.preview'));
        $this->assertFileExists(base_path('routes/preview.php'));
    }

    public function test_env_example_documents_the_options_a_clone_needs(): void
    {
        $env = file_get_contents(base_path('.env.example'));

        foreach (['APP_NAME', 'APP_URL', 'APP_DEBUG', 'DB_CONNECTION', 'MAIL_MAILER', 'UI_LAYOUT', 'UI_PRIMARY', 'UI_PREVIEW'] as $key) {
            $this->assertStringContainsString($key, $env, $key);
        }
        $this->assertStringNotContainsString('SUPER_ADMIN', $env, 'no default passwords in .env.example');
    }
}
