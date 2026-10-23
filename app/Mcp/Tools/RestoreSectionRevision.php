<?php

namespace App\Mcp\Tools;

use App\Models\SectionRevision;
use App\Support\Sections\SectionStore;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Put a section back to the content of a revision from list_section_revisions (re-creates it if it was deleted). The content it replaces is itself kept as a new revision, so this can be undone too.')]
class RestoreSectionRevision extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate(['revision_id' => 'required|integer']);
        $revision = SectionRevision::query()->find($request->get('revision_id'));
        if (! $revision) {
            return Response::error('Revision not found.');
        }

        $section = SectionStore::restore($revision);
        $this->log('page_section', $section->id, ['page' => $revision->page->path(), 'key' => $section->key], ['restored_revision' => $revision->id]);

        return $this->json(['restored' => $this->sectionArray($section), 'url' => $this->url($revision->page)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return ['revision_id' => $schema->integer()->required()];
    }
}
