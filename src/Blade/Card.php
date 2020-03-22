<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Card
{
    public static function register()
    {
        Blade::aliasComponent('blade-plus-plus::components.card.base', 'card');
        Blade::aliasComponent('blade-plus-plus::components.card.body', 'cardbody');
        Blade::aliasComponent('blade-plus-plus::components.card.footer', 'cardfooter');
        Blade::include('blade-plus-plus::components.card.header', 'cardheader');
    }
}
