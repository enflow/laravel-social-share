<?php

namespace Enflow\SocialShare;

use Illuminate\Support\ServiceProvider;

class SocialShareServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerConfig();
        $this->registerViews();
        $this->registerPublishables();
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/social-share.php', 'social-share');
    }

    private function registerViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'social-share');
    }

    private function registerPublishables(): self
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/social-share.php' => config_path('social-share.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/social-share'),
            ], 'views');
        }

        return $this;
    }
}
