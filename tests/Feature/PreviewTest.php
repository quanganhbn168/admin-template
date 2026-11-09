<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class PreviewTest extends TestCase
{
    public function test_preview_is_hidden_outside_local(): void
    {
        $this->get('/preview')->assertNotFound();
    }

    public function test_every_preview_page_renders(): void
    {
        $this->skipIfPreviewRemoved();
        $this->app->detectEnvironment(fn () => 'local');

        $base = resource_path('views/preview/pages');
        $pages = collect(File::allFiles($base))
            ->map(fn ($f) => str_replace(['\\', '.blade.php'], ['/', ''], $f->getRelativePathname()))
            ->reject(fn ($name) => $name === 'index')
            ->prepend('');

        $this->assertGreaterThan(100, $pages->count());

        foreach ($pages as $name) {
            $this->get('/preview/' . $name)->assertOk();
        }
    }

    public function test_unknown_preview_page_is_404(): void
    {
        $this->skipIfPreviewRemoved();
        $this->app->detectEnvironment(fn () => 'local');

        $this->get('/preview/does-not-exist')->assertNotFound();
    }

    private function skipIfPreviewRemoved(): void
    {
        if (! is_dir(resource_path('views/preview'))) {
            $this->markTestSkipped('The preview gallery was removed (template:strip-preview).');
        }
    }
}
