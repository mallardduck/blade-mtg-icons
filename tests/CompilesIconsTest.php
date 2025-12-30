<?php

declare(strict_types=1);

namespace Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use MallardDuck\MTGIcons\BladeMTGIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class CompilesIconsTest extends TestCase
{
    use MatchesSnapshots;

    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('mtg-9')->toHtml();
        $this->assertMatchesSnapshot($result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('mtg-ability-amass', 'w-6 h-6 text-gray-500')->toHtml();
        $this->assertMatchesSnapshot($result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('mtg-artifact', ['style' => 'color: #555'])->toHtml();
        $this->assertMatchesSnapshot($result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeMTGIconsServiceProvider::class,
        ];
    }
}
