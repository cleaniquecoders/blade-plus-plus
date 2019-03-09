<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Misc
{
    public static function register()
    {
        Blade::include('laravel-blade-directives::components.misc.app-name', 'appName');
        Blade::include('laravel-blade-directives::components.misc.logo');
        Blade::directive('icon', function($icon) {
            $icon = str_replace('\'', '"', $icon);

            return "<i class={$icon}></i>";
        });
    }
}
