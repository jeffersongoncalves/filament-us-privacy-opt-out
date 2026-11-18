<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut\Resources\OptOutRecords\Pages;

use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\UsPrivacyOptOut\Resources\OptOutRecords\OptOutRecordResource;

class ListOptOutRecords extends ListRecords
{
    protected static string $resource = OptOutRecordResource::class;
}
