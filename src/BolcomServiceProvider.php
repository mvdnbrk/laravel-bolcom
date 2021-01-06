<?php

namespace Mvdnbrk\Laravel;

use Illuminate\Support\ServiceProvider;

class BolcomServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/bol.php' => config_path('bol.php'),
            ], 'bolcom-config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bol.php', 'bol');
    }
}
