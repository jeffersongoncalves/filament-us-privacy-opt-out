<?php

use JeffersonGoncalves\Filament\UsPrivacyOptOut\Resources\OptOutRecords\OptOutRecordResource;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\Resources\OptOutRecords\Pages\ListOptOutRecords;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\Resources\OptOutRecords\Pages\ViewOptOutRecord;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\UsPrivacyOptOutPlugin;
use JeffersonGoncalves\UsPrivacyOptOut\Enums\OptOutRight;
use JeffersonGoncalves\UsPrivacyOptOut\Facades\UsPrivacyOptOut;
use Livewire\Livewire;

beforeEach(function () {
    $this->user = TestUser::create(['name' => 'Maria', 'email' => 'maria@example.com']);

    $this->actingAs($this->user);
});

it('lists users and visitors choices with their state', function () {
    $user = UsPrivacyOptOut::optOut($this->user, OptOutRight::TargetedAdvertising, source: 'form', state: 'CO');
    $visitor = UsPrivacyOptOut::optOut('3f2b9c1e-visitor', OptOutRight::Sale, source: 'gpc', state: 'TX');

    Livewire::test(ListOptOutRecords::class)
        ->assertSuccessful()
        ->assertCanSeeTableRecords([$user, $visitor])
        ->assertSee('TestUser #'.$this->user->getKey())
        ->assertSee('Visitor 3f2b9c1e...')
        ->assertSee('Targeted advertising')
        ->assertSee('Global Privacy Control signal')
        ->assertSee('Opted out')
        ->assertSee('CO');
});

it('filters by right, choice, state, visitors and GPC', function () {
    $sensitive = UsPrivacyOptOut::optIn($this->user, OptOutRight::SensitiveData, source: 'form', state: 'VA');
    $gpc = UsPrivacyOptOut::optOut('visitor-1', OptOutRight::Sale, source: 'gpc', state: 'CO');
    $profiling = UsPrivacyOptOut::optOut($this->user, OptOutRight::Profiling, source: 'form', state: 'MN');

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('right', 'sensitive_data')
        ->assertCanSeeTableRecords([$sensitive])
        ->assertCanNotSeeTableRecords([$gpc, $profiling]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('action', 'opted_in')
        ->assertCanSeeTableRecords([$sensitive])
        ->assertCanNotSeeTableRecords([$gpc, $profiling]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('state', 'MN')
        ->assertCanSeeTableRecords([$profiling])
        ->assertCanNotSeeTableRecords([$sensitive, $gpc]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('visitors', true)
        ->assertCanSeeTableRecords([$gpc])
        ->assertCanNotSeeTableRecords([$sensitive, $profiling]);

    Livewire::test(ListOptOutRecords::class)
        ->filterTable('gpc', true)
        ->assertCanSeeTableRecords([$gpc])
        ->assertCanNotSeeTableRecords([$sensitive, $profiling]);
});

it('shows the proof of the choice', function () {
    $record = UsPrivacyOptOut::optOut($this->user, OptOutRight::Sale, source: 'form', state: 'OR', metadata: ['page' => 'privacy-choices']);

    Livewire::test(ViewOptOutRecord::class, ['record' => $record->getKey()])
        ->assertSuccessful()
        ->assertSee('Sale of personal data')
        ->assertSee('Form')
        ->assertSee('OR')
        ->assertSee('privacy-choices');
});

it('is read-only and applies the fluent plugin options', function () {
    UsPrivacyOptOutPlugin::get()->navigationGroup('US')->slug('privacy-choices');

    expect(OptOutRecordResource::canCreate())->toBeFalse()
        ->and(OptOutRecordResource::getPages())->toHaveKeys(['index', 'view'])->not->toHaveKey('edit')
        ->and(OptOutRecordResource::getNavigationGroup())->toBe('US')
        ->and(OptOutRecordResource::getSlug())->toBe('privacy-choices');
});
