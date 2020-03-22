<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Misc
{
    public static function register()
    {
        Blade::include('blade-plus-plus::components.misc.app-name', 'appName');
        Blade::include('blade-plus-plus::components.misc.logo');
        Blade::directive('icon', function($icon) {
            $icon = str_replace('\'', '"', $icon);

            return "<i class={$icon}></i>";
        });
    }
}
