<?php

namespace CleaniqueCoders\BladePlusPlus\Tests;

class BladePlusPlusTest extends TestCase
{
    /** @test */
    public function it_has_action_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Action'));
    }

    /** @test */
    public function it_has_card_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Card'));
    }

    /** @test */
    public function it_has_form_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Form'));
    }

    /** @test */
    public function it_has_layout_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Layout'));
    }

    /** @test */
    public function it_has_misc_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Misc'));
    }

    /** @test */
    public function it_has_modal_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Modal'));
    }

    /** @test */
    public function it_has_table_registrar()
    {
        $this->assertTrue(class_exists('\CleaniqueCoders\BladePlusPlus\Blade\Table'));
    }
}
