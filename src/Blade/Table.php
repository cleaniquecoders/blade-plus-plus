<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Table
{
    public static function register()
    {
        Blade::aliasComponent('blade-plus-plus::components.tables.base', 'table');
    }
}
