<?php

namespace prokawsar\PasswordValidator;

use Illuminate\Support\ServiceProvider;

class PasswordValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    //    $this->loadRulesFrom(__DIR__.'/Rules');

        $this->publishes([
            __DIR__.'/Rules' => app_path('/Rules'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
