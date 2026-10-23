<?php

namespace App\Mcp\Tools;

use App\Models\Redirect;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;

#[IsDestructive]
#[Description('Remove a redirect (the old URL will then return 404). To pause one instead, use save_redirect with is_active: false. Ask the site owner first, then call with confirm: true. The removed values stay in the activity log.')]
class DeleteRedirect extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['id' => 'required|integer', 'confirm' => 'nullable|boolean']);
        $redirect = Redirect::query()->find($data['id']);
        if (! $redirect) {
            return Response::error('Redirect not found.');
        }
        $this->requireConfirm($request, "remove the redirect {$redirect->from_path} → {$redirect->to_url}");

        $redirect->delete();
        $this->log('redirect', $redirect->id, $redirect->only(['from_path', 'to_url', 'status_code', 'is_active']), ['deleted' => true]);

        return $this->json(['deleted' => $redirect->only(['id', 'from_path', 'to_url'])]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'confirm' => $schema->boolean()->description('true, after the site owner agreed'),
        ];
    }
}
