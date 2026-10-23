<?php

namespace App\Console\Commands;

use App\Models\Page;
use App\Support\Sections\SectionStore;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Loads database/content/sections/<page>.php files into page_sections, for pages that have
 * no sections yet. After that the database is the source and MCP edits it.
 *   php artisan content:sections            every definition file
 *   php artisan content:sections home       one page ("home" = the homepage)
 */
class ImportSections extends Command
{
    protected $signature = 'content:sections
        {page? : Definition name, e.g. home or services}
        {--dry-run : Validate and report without saving}
        {--force : Replace sections that already exist (their edits are lost)}';

    protected $description = 'Move the body content of designed pages into page_sections';

    public function handle(): int
    {
        $names = $this->argument('page')
            ? [$this->argument('page')]
            : array_map(fn ($f) => basename($f, '.php'), glob(database_path('content/sections/*.php')));

        DB::beginTransaction();
        try {
            foreach ($names as $name) {
                $slug = $name === 'home' ? '' : str_replace('--', '/', $name);
                $page = Page::query()->where('slug', $slug)->first();
                if (! $page) {
                    $this->warn("$name: no page with slug \"$slug\" (run content:import first)");

                    continue;
                }
                $count = SectionStore::import($page, (bool) $this->option('force'));
                $this->line($count ? "$name: $count sections" : "$name: already has sections, skipped (use --force to replace)");
            }
        } catch (\Throwable $e) {
            DB::rollBack();
            $this->error($e->getMessage());

            return self::FAILURE;
        }
        $this->option('dry-run') ? DB::rollBack() : DB::commit();
        $this->info($this->option('dry-run') ? 'Dry run: nothing was saved.' : 'Done.');

        return self::SUCCESS;
    }
}
