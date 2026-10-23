<?php

use App\Http\Middleware\AuthenticateMcpToken;
use App\Mcp\Servers\SiteServer;
use Laravel\Mcp\Facades\Mcp;

// MCP server for Claude (README: "MCP server"). Bearer token from MCP_TOKEN, see `php artisan mcp:token`.
Mcp::web('/api/mcp', SiteServer::class)->middleware(AuthenticateMcpToken::class);
