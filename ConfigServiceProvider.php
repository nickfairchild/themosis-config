<?php

namespace NickFairchild\Config;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('config', function($app) {
            return new Repository($app['config.finder']);
        });
    }
}