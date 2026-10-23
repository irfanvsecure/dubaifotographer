<?php

namespace App\Mcp\Tools;

use App\Models\Category;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Rename a blog category or change its slug / description. Only the fields you send change.')]
class UpdateCategory extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'name' => 'sometimes|string|max:100',
            'slug' => ['sometimes', 'string', 'max:100', $this->slugRule()],
            'description' => 'sometimes|nullable|string|max:1000',
        ]);
        $category = Category::query()->find($data['id']);
        if (! $category) {
            return Response::error('Category not found.');
        }
        if (isset($data['slug']) && Category::query()->where('slug', $data['slug'])->whereKeyNot($category->id)->exists()) {
            return Response::error("A category with the slug \"{$data['slug']}\" already exists.");
        }
        $changes = collect($data)->except('id')->all();
        $old = $category->only(array_keys($changes));
        $category->update($changes);
        $this->log('category', $category->id, $old, $changes);

        return $this->json(['updated' => $category->toArray()]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'name' => $schema->string(),
            'slug' => $schema->string(),
            'description' => $schema->string(),
        ];
    }
}
