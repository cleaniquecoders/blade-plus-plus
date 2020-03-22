<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Modal
{
    public static function register()
    {
        Blade::aliasComponent('laravel-blade-directives::components.modals.base', 'modal');
        Blade::include('laravel-blade-directives::components.modals.button', 'modalTrigger');
        Blade::include('laravel-blade-directives::components.modals.close-button', 'modalClose');
    }
}
