<?php

namespace CleaniqueCoders\LaravelBladeDirectives\Blade;

use Illuminate\Support\Facades\Blade;

class Modal
{
    public static function register()
    {
        Blade::component('laravel-blade-directives::components.modals.base', 'modal');
        Blade::include('laravel-blade-directives::components.modals.button', 'modalTrigger');
        Blade::include('laravel-blade-directives::components.modals.close-button', 'modalClose');
    }
}
