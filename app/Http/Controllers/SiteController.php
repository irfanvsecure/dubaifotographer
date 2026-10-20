<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function show(Request $request): Response
    {
        $view = (string) $request->route('view', '');

        if ($view === '' || ! view()->exists($view)) {
            abort(404);
        }

        $html = view($view)->render();
        $base = rtrim($request->getSchemeAndHttpHost().$request->getBaseUrl(), '/');
        $html = str_replace('%%BASE%%', $base, $html);

        // internal page links get the trailing slash the canonical URLs use,
        // so clicking around the site never goes through a redirect
        $html = preg_replace_callback(
            '#href="'.preg_quote($base, '#').'(/[^"\#?]*?[^"\#?/])([?\#][^"]*)?"#',
            fn ($m) => preg_match('/\.[A-Za-z0-9]{1,5}$/', $m[1])
                ? $m[0]
                : 'href="'.$base.$m[1].'/'.($m[2] ?? '').'"',
            $html
        );

        return response($html, 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
        ]);
    }
}
