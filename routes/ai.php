<?php

use App\Http\Middleware\AuthenticateMcpToken;
use App\Mcp\Servers\SiteServer;
use Laravel\Mcp\Facades\Mcp;

// MCP server for Claude (README: "MCP server"). Token from MCP_TOKEN, see `php artisan mcp:token`.
// Claude Code: bearer header on /api/mcp. claude.ai web connector: the token in the URL.
Mcp::web('/api/mcp', SiteServer::class)->middleware(AuthenticateMcpToken::class);
Mcp::web('/api/mcp/{key}', SiteServer::class)->middleware(AuthenticateMcpToken::class)->where('key', '[A-Za-z0-9]{32,128}');
