<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Modal
{
    public static function register()
    {
        Blade::aliasComponent('blade-plus-plus::components.modals.base', 'modal');
        Blade::include('blade-plus-plus::components.modals.button', 'modalTrigger');
        Blade::include('blade-plus-plus::components.modals.close-button', 'modalClose');
    }
}
