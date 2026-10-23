<?php

namespace App\Mcp\Tools;

use App\Support\Sections\SectionStore;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change the text, images or links of one page section. Requires the section `version` from get_page_sections. `data` holds only the fields to change; a list field (items, tabs, cards…) is replaced as a whole, so send the full list. HTML is limited to p, a, strong, em, ul, li, br, h2, h3. The old content is kept as a revision (restore_section_revision), a FAQ change also updates the FAQPage schema, and the change shows on the live page at once.')]
class UpdatePageSection extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'slug' => 'nullable|string',
            'key' => 'required|string',
            'version' => 'required|string',
            'data' => 'required|array',
        ]);
        $page = $this->page($request);
        $section = $this->section($page, $request->get('key'));
        $this->checkVersion($section, $request, 'get_page_sections');

        $old = $section->data;
        SectionStore::update($section, $request->get('data'));
        $section->refresh();
        $this->log('page_section', $section->id, ['page' => $page->path(), 'key' => $section->key, 'data' => array_intersect_key($old, $request->get('data'))], array_intersect_key($section->data, $request->get('data')));

        return $this->json(['updated' => $this->sectionArray($section), 'url' => $this->url($page)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'page_id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the page slug ("" = home page)'),
            'key' => $schema->string()->required()->description('Section key from get_page_sections, e.g. "hero" or "faq"'),
            'version' => $schema->string()->required()->description('The section version from get_page_sections'),
            'data' => $schema->object()->required()->description('Fields to change, e.g. {"eyebrow": "…", "items": [{"question": "…", "answer": "<p>…</p>"}]}'),
        ];
    }
}
