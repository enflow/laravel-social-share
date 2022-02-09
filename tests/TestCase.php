<?php

namespace Enflow\SocialShare\Test;

use Enflow\SocialShare\SocialShareServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithContainer;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    use InteractsWithContainer;

    protected function getPackageProviders($app)
    {
        return [
            SocialShareServiceProvider::class,
        ];
    }
}
