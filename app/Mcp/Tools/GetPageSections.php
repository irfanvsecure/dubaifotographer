<?php

namespace App\Mcp\Tools;

use App\Support\Sections\SectionTypes;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Read the body content of a designed page as sections (hero, text, tabs, FAQ, gallery…): each with its key, type, position, fields and `version`. Call this before update_page_section / delete_page_section and pass the version back. include_types: true also lists every section type and its fields (for add_page_section).')]
class GetPageSections extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'slug' => 'nullable|string',
            'include_types' => 'nullable|boolean',
        ]);
        $page = $this->page($request);
        $sections = $page->sections()->get();

        return $this->json([
            'page' => $this->pageRef($page) + ['h1' => $page->h1],
            'sections' => $sections->map(fn ($s) => $this->sectionArray($s))->all(),
            'note' => $sections->isEmpty()
                ? 'This page has no editable sections yet: its body is still in its Blade template.'
                : 'The H1 is not a section field: change it with update_page (h1). html fields allow p, a, strong, em, ul, li, br, h2, h3. Images are paths under assets/images (upload_image returns featured_image). Links: "/path/", "#quote", full URLs, tel:, mailto:.',
            'types' => ($request->get('include_types') ?? false) ? SectionTypes::describe() : 'pass include_types: true to list the section types and their fields',
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'page_id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the page slug ("" = home page)'),
            'include_types' => $schema->boolean()->description('Also list all section types and their fields'),
        ];
    }
}
