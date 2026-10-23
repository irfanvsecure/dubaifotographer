<?php

namespace App\Mcp\Tools;

use App\Models\Category;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Str;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Create a blog category. It is shown as the topic label on the blog listing.')]
class CreateCategory extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'slug' => ['nullable', 'string', 'max:100', $this->slugRule()],
            'description' => 'nullable|string|max:1000',
        ]);
        $data['slug'] ??= Str::slug($data['name']);
        if (Category::query()->where('slug', $data['slug'])->exists()) {
            return Response::error("A category with the slug \"{$data['slug']}\" already exists.");
        }
        $category = Category::query()->create($data);
        $this->log('category', $category->id, null, $data);

        return $this->json(['created' => $category->toArray()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'name' => $schema->string()->required(),
            'slug' => $schema->string()->description('Default: made from the name'),
            'description' => $schema->string(),
        ];
    }
}
