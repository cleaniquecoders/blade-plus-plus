<?php

namespace CleaniqueCoders\LaravelBladeDirectives\Blade;

use Illuminate\Support\Facades\Blade;

class Layout
{
    public static function register()
    {
        Blade::directive('container', function ($expression) {
        	if(! empty($expression)) {
        		return '<div class="container-fluid">';
        	}
        	return '<div class="container">';
    	});
    	Blade::directive('endcontainer', function ($expression) {
        	return '</div>';
    	});

    	Blade::directive('row', function ($expression) {
        	if(! empty($expression)) {
        		return '<div class="row <?php echo $expression; ?>">';
        	}
        	return '<div class="row">';
    	});
    	Blade::directive('endrow', function ($expression) {
        	return '</div>';
    	});

    	Blade::directive('col', function ($expression) {
        	if(! empty($expression)) {
        		return '<div class="col <?php echo $expression; ?>">';
        	}
        	return '<div class="col">';
    	});
    	Blade::directive('endcol', function ($expression) {
        	return '</div>';
    	});
    }
}
