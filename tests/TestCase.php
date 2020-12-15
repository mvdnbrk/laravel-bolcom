<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\Laravel\BolcomServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BolcomServiceProvider::class,
        ];
    }
}
