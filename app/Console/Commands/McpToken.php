<?php

namespace App\Console\Commands;

use App\Models\McpToken as Token;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

/**
 * The MCP bearer token lives in .env (MCP_TOKEN); the database keeps only its hash.
 *   php artisan mcp:token --generate   print a new random token to put in .env
 *   php artisan mcp:token              store the hash of MCP_TOKEN (replaces the previous one)
 */
class McpToken extends Command
{
    protected $signature = 'mcp:token {--generate : Print a new random token to put in .env as MCP_TOKEN}';

    protected $description = 'Store the hash of MCP_TOKEN so the /api/mcp endpoint accepts it';

    public function handle(): int
    {
        if ($this->option('generate')) {
            $this->line('Add this to .env, then run php artisan mcp:token (and config:cache on the server):');
            $this->line('MCP_TOKEN='.Str::random(64));

            return self::SUCCESS;
        }

        $token = (string) config('services.mcp.token');
        if (strlen($token) < 32) {
            $this->error('MCP_TOKEN in .env is missing or shorter than 32 characters. Run php artisan mcp:token --generate.');

            return self::FAILURE;
        }

        // one active token: the one in .env. Changing MCP_TOKEN and re-running revokes the old one.
        Token::query()->where('name', 'env')->delete();
        Token::query()->create(['name' => 'env', 'token_hash' => Token::hash($token)]);
        $this->info('MCP token stored (hash only). Old tokens from .env no longer work.');

        return self::SUCCESS;
    }
}
