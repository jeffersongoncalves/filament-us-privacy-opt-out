<?php

namespace JeffersonGoncalves\Filament\UsPrivacyOptOut\Support;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use JeffersonGoncalves\UsPrivacyOptOut\Models\OptOutRecord;

class Labels
{
    public static function subject(OptOutRecord $record): string
    {
        $type = $record->getAttribute('subject_type');

        if (is_string($type)) {
            return class_basename(Model::getActualClassNameForMorph($type)).' #'.$record->getAttribute('subject_id');
        }

        // The anonymous id identifies a browser: show enough to tell visitors apart.
        return __('filament-us-privacy-opt-out::filament-us-privacy-opt-out.visitor').' '.Str::limit((string) $record->getAttribute('anonymous_id'), 8);
    }

    public static function right(string $right): string
    {
        return __("filament-us-privacy-opt-out::filament-us-privacy-opt-out.right.{$right}");
    }

    public static function action(string $action): string
    {
        return __("filament-us-privacy-opt-out::filament-us-privacy-opt-out.action.{$action}");
    }

    public static function actionColor(string $action): string
    {
        return $action === 'opted_out' ? 'danger' : 'success';
    }

    /** Known sources are translated; anything else your app records is shown as it is. */
    public static function source(string $source): string
    {
        $key = "filament-us-privacy-opt-out::filament-us-privacy-opt-out.sources.{$source}";

        return trans()->has($key) ? __($key) : $source;
    }
}
