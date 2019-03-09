<?php

namespace CleaniqueCoders\BladePlusPlus;

use Illuminate\Support\ServiceProvider;

class BladePlusPlusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Blade\Action::register();
        Blade\Card::register();
        Blade\Form::register();
        Blade\Layout::register();
        Blade\Misc::register();
        Blade\Modal::register();
        Blade\Table::register();

        $this->loadViewsFrom(dirname(__FILE__) . '/../resources/views', 'laravel-blade-directives');
        $this->publishes([
            dirname(__FILE__) . '/../resources/views' => resource_path('views/vendor/laravel-blade-directives'),
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
