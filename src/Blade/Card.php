<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Card
{
    public static function register()
    {
        Blade::aliasComponent('blade-plus-plus::components.cards.base', 'card');
        Blade::aliasComponent('blade-plus-plus::components.cards.body', 'cardbody');
        Blade::aliasComponent('blade-plus-plus::components.cards.footer', 'cardfooter');
        Blade::include('blade-plus-plus::components.cards.header', 'cardheader');
    }
}
