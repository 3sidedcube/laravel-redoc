<?php

namespace ThreeSidedCube\LaravelRedoc\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as BaseTestCase;
use ThreeSidedCube\LaravelRedoc\RedocServiceProvider;

class TestCase extends BaseTestCase
{
    /**
     * Get the packages service providers.
     *
     * @param  Application  $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [
            RedocServiceProvider::class,
        ];
    }
}
