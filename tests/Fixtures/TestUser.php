<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use JeffersonGoncalves\UsPrivacy\Attributes\PersonalData;
use JeffersonGoncalves\UsPrivacy\Concerns\InteractsWithPersonalData;
use JeffersonGoncalves\UsPrivacy\Contracts\HasPersonalData;

#[PersonalData('email')]
class TestUser extends Authenticatable implements HasPersonalData
{
    use InteractsWithPersonalData;

    protected $table = 'users';

    protected $guarded = [];

    public $timestamps = false;
}
