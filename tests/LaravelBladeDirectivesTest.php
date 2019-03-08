<?php

namespace CleaniqueCoders\LaravelBladeDirectives\Tests;

class LaravelBladeDirectivesTest extends TestCase
{
    /** @test */
    public function it_has_action_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\LaravelBladeDirectives\Blade\Action'));
    }

    /** @test */
    public function it_has_card_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\LaravelBladeDirectives\Blade\Card'));
    }

    /** @test */
    public function it_has_form_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\LaravelBladeDirectives\Blade\Form'));
    }

    /** @test */
    public function it_has_misc_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\LaravelBladeDirectives\Blade\Misc'));
    }

    /** @test */
    public function it_has_modal_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\LaravelBladeDirectives\Blade\Modal'));
    }

    /** @test */
    public function it_has_table_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\LaravelBladeDirectives\Blade\Table'));
    }
}
