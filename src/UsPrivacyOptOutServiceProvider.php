<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UsPrivacyOptOutServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-us-privacy-opt-out';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
