<?php

use CleaniqueCoders\LaravelBladeDirectives;
use Illuminate\Support\ServiceProvider;

class LaravelBladeDirectives extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom('../resources/views', 'laravel-blade-directives');
        $this->publishes([
            '../resources/views' => resource_path('views/vendor/laravel-blade-directives'),
        ]);

        Blade\Action::register();
        Blade\Form::register();
        Blade\Misc::register();
        Blade\Modal::register();
        Blade\Panel::register();
        Blade\Table::register();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
