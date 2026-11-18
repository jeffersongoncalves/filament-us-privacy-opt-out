<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\UsPrivacyOptOutPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                UsPrivacyOptOutPlugin::make(),
            ]);
    }
}
