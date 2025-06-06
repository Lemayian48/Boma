<?php

namespace App\Filament\Resources\PromotionResource\Pages;

use App\Filament\Resources\PromotionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromotions extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    
    protected static string $resource = PromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
