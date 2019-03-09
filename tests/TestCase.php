<?php

namespace CleaniqueCoders\BladePlusPlus\Tests;

use Illuminate\Support\Facades\View;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            \CleaniqueCoders\BladePlusPlus\BladePlusPlusServiceProvider::class,
        ];
    }

    /**
     * Compile blade markup into PHP code.
     *
     * @see https://github.com/appstract/laravel-blade-directives/blob/master/tests/DirectivesTest.php
     *
     * @param string $viewContent blade markup
     * @param array  $viewData
     *
     * @return string
     */
    protected function compileBlade($viewContent, $viewData = [])
    {
        // Pass the data to the view
        $phpBlock = '';
        if ($viewData) {
            $phpBlock = '@php ';
            foreach ($viewData as $key => $value) {
                $phpBlock .= '$' . $key . ' = ' . $this->stringify($value) . '; ';
            }
            $phpBlock .= '@endphp';
        }

        return app('blade.compiler')->compileString($phpBlock . $viewContent);
    }

    /**
     * Assert Blade Response.
     *
     * @param string $expected
     * @param string $blade
     * @param array  $arguments
     */
    protected function assertBlade($expected, $blade, $arguments = [])
    {
        $this->assertEquals($expected, $this->compileBlade($blade, $arguments));
    }
}
