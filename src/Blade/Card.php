<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Card
{
    public static function register()
    {
        Blade::component('laravel-blade-directives::components.card.base', 'card');
    }
}
