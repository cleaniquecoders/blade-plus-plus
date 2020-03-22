<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Form
{
    public static function register()
    {
        Blade::include('blade-plus-plus::components.forms.form', 'form');
        Blade::include('blade-plus-plus::components.forms.form-hidden', 'formHidden');
        Blade::include('blade-plus-plus::components.forms.form-file', 'formFile');
        Blade::include('blade-plus-plus::components.forms.error', 'inputError');
        Blade::include('blade-plus-plus::components.forms.help', 'inputHelp');
        Blade::include('blade-plus-plus::components.forms.hidden');
        Blade::include('blade-plus-plus::components.forms.input');
        Blade::include('blade-plus-plus::components.forms.select');
        Blade::include('blade-plus-plus::components.forms.submit');
        Blade::include('blade-plus-plus::components.forms.textarea');
    }
}
