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
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../Http/Controllers/ClickuzController.php' => app_path('Http/Controllers/ClickuzController.php'),
        ]);

    }
}
