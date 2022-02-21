<?php

namespace Teamprodev\Laravel_Payment_Clickuz\Providers;

use Illuminate\Support\ServiceProvider;

class ClickuzServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/clickuz.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'clickuz');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/clickuz'),
        ]);

        $this->publishes([
            __DIR__.'/../config/clickuz.php' => config_path('clickuz.php'),
        ]);

    }
}
