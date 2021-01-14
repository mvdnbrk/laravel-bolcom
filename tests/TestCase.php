<?php

namespace Mvdnbrk\Laravel\Bolcom\Tests;

use Mvdnbrk\Laravel\Bolcom\BolcomServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelRay\RayServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BolcomServiceProvider::class,
            RayServiceProvider::class,
        ];
    }
}
