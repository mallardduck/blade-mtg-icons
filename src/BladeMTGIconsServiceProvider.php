<?php

declare(strict_types=1);

namespace MallardDuck\MTGIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeMTGIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-mtg-icons', []);

            $factory->add('mana', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-mtg-icons.php', 'blade-mtg-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-mtg-icons'),
            ], 'blade-mtg-icons');

            $this->publishes([
                __DIR__.'/../config/blade-mtg-icons.php' => $this->app->configPath('blade-mtg-icons.php'),
            ], 'blade-mtg-icons-config');
        }
    }
}
