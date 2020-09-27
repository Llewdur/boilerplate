<?php

namespace Llewdur\Boilerplate\Tests;

use Orchestra\Testbench\TestCase;
use Llewdur\Boilerplate\BoilerplateServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BoilerplateServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
