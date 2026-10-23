<?php

namespace App\Http\Controllers;

use App\Models\Redirect;
use App\Support\SiteRenderer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    /** Every public page and blog post: looked up by URL path in the pages / blogs tables. */
    public function show(Request $request, string $path = ''): Response
    {
        $base = rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), '/');
        $entity = SiteRenderer::find($path);

        if (! $entity) {
            $redirect = Redirect::query()
                ->where('from_path', Redirect::normalize($path))
                ->where('is_active', true)
                ->first();
            if (! $redirect) {
                abort(404);
            }
            $redirect->increment('hits');
            $to = str_starts_with($redirect->to_url, '/') ? $base.$redirect->to_url : $redirect->to_url;

            return redirect()->away($to, $redirect->status_code);
        }

        return response(SiteRenderer::html($entity, $base), 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
        ]);
    }
}
