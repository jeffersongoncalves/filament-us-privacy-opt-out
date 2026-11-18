<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests;

use JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\UsPrivacyOptOutServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Support\SupportServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            SupportServiceProvider::class,
            FilamentServiceProvider::class,
            TestPanelProvider::class,
            UsPrivacyOptOutServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
        config()->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
        config()->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
    }
}
