<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Action
{
    public static function register()
    {
        Blade::include('laravel-blade-directives::components.actions.base', 'baseAction');
        Blade::include('laravel-blade-directives::components.actions.create', 'createAction');
        Blade::include('laravel-blade-directives::components.actions.destroy', 'destroyAction');
        Blade::include('laravel-blade-directives::components.actions.edit', 'editAction');
        Blade::include('laravel-blade-directives::components.actions.show', 'showAction');
    }
}
