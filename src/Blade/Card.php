<?php

namespace CleaniqueCoders\LaravelBladeDirectives\Blade;

use Illuminate\Support\Facades\Blade;

class Card
{
    public static function register()
    {
        Blade::component('laravel-blade-directives::components.card.base', 'card');
    }
}
