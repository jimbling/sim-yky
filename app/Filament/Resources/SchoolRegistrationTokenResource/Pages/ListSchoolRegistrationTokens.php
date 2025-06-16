<?php

namespace App\Filament\Resources\SchoolRegistrationTokenResource\Pages;

use App\Filament\Resources\SchoolRegistrationTokenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchoolRegistrationTokens extends ListRecords
{
    protected static string $resource = SchoolRegistrationTokenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
