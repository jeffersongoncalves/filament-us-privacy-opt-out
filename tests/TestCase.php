<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\Facades\Filament;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\UsPrivacyOptOutServiceProvider;
use JeffersonGoncalves\PestPluginDatabaseMigrations\LoadsPackageMigrations;
use JeffersonGoncalves\UsPrivacy\UsPrivacyServiceProvider;
use JeffersonGoncalves\UsPrivacyOptOut\UsPrivacyOptOutServiceProvider as ConsentServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use RyanChandler\BladeCaptureDirective\BladeCaptureDirectiveServiceProvider;

abstract class TestCase extends Orchestra
{
    use LoadsPackageMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        Filament::setCurrentPanel(Filament::getDefaultPanel());

        $this->withoutVite();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            SupportServiceProvider::class,
            BladeCaptureDirectiveServiceProvider::class,
            FormsServiceProvider::class,
            TablesServiceProvider::class,
            ActionsServiceProvider::class,
            InfolistsServiceProvider::class,
            NotificationsServiceProvider::class,
            WidgetsServiceProvider::class,
            FilamentServiceProvider::class,
            UsPrivacyServiceProvider::class,
            ConsentServiceProvider::class,
            UsPrivacyOptOutServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('app.key', 'base64:'.base64_encode(str_repeat('a', 32)));
        $app['config']->set('database.default', 'testing');
        $app['config']->set('auth.providers.users.model', TestUser::class);
        $app['config']->set('us-privacy.models', [TestUser::class]);
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadPackageMigrations(ConsentServiceProvider::class);

        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->default('');
            $table->rememberToken();
        });
    }
}
