<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class StripPreview extends Command
{
    protected $signature = 'template:strip-preview {--force : Do not ask for confirmation}';

    protected $description = 'Delete the Tabler preview gallery (about 11 MB of demo pages) from this project';

    /** Everything that exists only for the /preview gallery, relative to the project root. */
    public const PATHS = [
        'resources/views/preview',
        'resources/views/components/preview',
        'resources/css/preview.css',
        'resources/css/preview-demo.css',
        'routes/preview.php',
        'scripts/preview-static.txt',
        'public/tabler/static',
    ];

    public function handle(): int
    {
        $existing = array_values(array_filter(self::PATHS, fn (string $path) => File::exists(base_path($path))));

        if ($existing === []) {
            $this->info('The preview gallery is already removed.');

            return self::SUCCESS;
        }

        $this->line('This will delete:');
        foreach ($existing as $path) {
            $this->line("  - {$path}");
        }

        if (! $this->option('force') && ! $this->confirm('Delete these files? (they stay in git history)', false)) {
            $this->warn('Nothing deleted.');

            return self::FAILURE;
        }

        foreach ($existing as $path) {
            File::isDirectory(base_path($path)) ? File::deleteDirectory(base_path($path)) : File::delete(base_path($path));
        }

        $this->info('Preview gallery removed. Run `pnpm build` to rebuild the assets.');

        return self::SUCCESS;
    }
}
