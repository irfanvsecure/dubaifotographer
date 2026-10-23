<?php

namespace App\Http\Middleware;

use App\Models\McpToken;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

/**
 * /api/mcp: "Authorization: Bearer <token>", or /api/mcp/<token> for claude.ai connectors that
 * cannot send headers. Only SHA-256 hashes of tokens are stored
 * (mcp_tokens, filled from MCP_TOKEN by `php artisan mcp:token`). Wrong tokens are limited
 * to 10 tries a minute per IP, valid ones to 120 calls a minute per token.
 */
class AuthenticateMcpToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $ipKey = 'mcp-fail:'.$request->ip();
        if (RateLimiter::tooManyAttempts($ipKey, 10)) {
            return $this->deny('Too many failed attempts. Try again in a minute.', 429);
        }

        // Claude Code sends a header; claude.ai web connectors can only use a URL (/api/mcp/<token>)
        $token = (string) ($request->bearerToken() ?: $request->route('key'));
        $record = $token === '' ? null : McpToken::query()->where('token_hash', McpToken::hash($token))->first();
        if (! $record) {
            RateLimiter::hit($ipKey, 60);

            return $this->deny('Missing or invalid bearer token.', 401);
        }

        $tokenKey = 'mcp:'.$record->id;
        if (RateLimiter::tooManyAttempts($tokenKey, 120)) {
            return $this->deny('Rate limit reached (120 requests a minute).', 429);
        }
        RateLimiter::hit($tokenKey, 60);

        if (! $record->last_used_at || $record->last_used_at->lt(now()->subMinute())) {
            $record->forceFill(['last_used_at' => now()])->saveQuietly();
        }

        return $next($request);
    }

    private function deny(string $message, int $status): Response
    {
        return response()->json(['error' => $message], $status, $status === 401 ? ['WWW-Authenticate' => 'Bearer'] : []);
    }
}
