<?php

namespace App\Filament\Clusters\Locations\Resources\Locations\CountryResource\Pages;

use App\Filament\Clusters\Locations\Resources\Locations\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCountries extends ManageRecords
{
    protected static string $resource = CountryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
