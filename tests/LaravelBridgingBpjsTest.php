<?php

namespace Cerbero\LaravelBridgingBpjs;

use Cerbero\LaravelBridgingBpjs\Providers\LaravelBridgingBpjsServiceProvider;
use Orchestra\Testbench\TestCase;

/**
 * The package test suite.
 *
 */
class LaravelBridgingBpjsTest extends TestCase
{
    /**
     * Retrieve the package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            LaravelBridgingBpjsServiceProvider::class,
        ];
    }
}
