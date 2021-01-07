<?php

namespace Enflow\SocialShare\Test;

use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithContainer;

abstract class TestCase extends TestbenchTestCase
{
    use InteractsWithContainer;

    protected function getPackageProviders($app)
    {
        return [
            \Enflow\SocialShare\SocialShareServiceProvider::class,
        ];
    }
}
