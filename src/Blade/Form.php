<?php

namespace CleaniqueCoders\BladePlusPlus\Blade;

use Illuminate\Support\Facades\Blade;

class Form
{
    public static function register()
    {
        Blade::include('laravel-blade-directives::components.forms.form', 'form');
        Blade::include('laravel-blade-directives::components.forms.form-hidden', 'formHidden');
        Blade::include('laravel-blade-directives::components.forms.form-file', 'formFile');
        Blade::include('laravel-blade-directives::components.forms.error', 'inputError');
        Blade::include('laravel-blade-directives::components.forms.help', 'inputHelp');
        Blade::include('laravel-blade-directives::components.forms.hidden');
        Blade::include('laravel-blade-directives::components.forms.input');
        Blade::include('laravel-blade-directives::components.forms.select');
        Blade::include('laravel-blade-directives::components.forms.submit');
        Blade::include('laravel-blade-directives::components.forms.textarea');
    }
}
