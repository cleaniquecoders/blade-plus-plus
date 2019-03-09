<?php

namespace CleaniqueCoders\BladePlusPlus\Tests;

class DirectivesTest extends TestCase
{
    /** @test */
    public function is_container()
    {
        $this->assertBlade('<div class="container"> </div>', '@container @endcontainer');
    }

    /** @test */
    public function is_fluid_container()
    {
        $this->assertBlade('<div class="container-fluid"> </div>', '@container(true) @endcontainer');
    }
}
