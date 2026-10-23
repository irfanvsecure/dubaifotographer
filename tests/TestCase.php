<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use RuntimeException;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        // A cached config ignores phpunit.xml, so the tests would run (and wipe) the real database.
        if (is_file(dirname(__DIR__).'/bootstrap/cache/config.php')) {
            throw new RuntimeException('Config is cached. Run "php artisan config:clear" before the tests, otherwise they use the real database.');
        }

        parent::setUp();
    }
}
