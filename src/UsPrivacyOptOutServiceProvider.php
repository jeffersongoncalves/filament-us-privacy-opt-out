<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UsPrivacyOptOutServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-us-privacy-opt-out')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
