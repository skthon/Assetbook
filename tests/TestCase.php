<?php

namespace Skthon\Assetbook\Tests;

use Skthon\Assetbook\AssetbookServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AssetbookServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {

    }
}