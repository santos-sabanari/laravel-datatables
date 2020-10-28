<?php

namespace SantosSabanari\LaravelDatatables\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use SantosSabanari\LaravelDatatables\LaravelDatatablesServiceProvider;

class TestCase extends Orchestra
{

    protected function getPackageProviders($app)
    {
        return [LaravelDatatablesServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
