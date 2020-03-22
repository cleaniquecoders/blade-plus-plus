<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Action
{
    public static function register()
    {
        Blade::include('blade-plus-plus::components.actions.base', 'baseAction');
        Blade::include('blade-plus-plus::components.actions.create', 'createAction');
        Blade::include('blade-plus-plus::components.actions.destroy', 'destroyAction');
        Blade::include('blade-plus-plus::components.actions.edit', 'editAction');
        Blade::include('blade-plus-plus::components.actions.show', 'showAction');
    }
}
