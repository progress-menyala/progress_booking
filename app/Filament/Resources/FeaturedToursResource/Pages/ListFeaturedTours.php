<?php

namespace App\Filament\Resources\FeaturedToursResource\Pages;

use App\Filament\Resources\FeaturedToursResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedTours extends ListRecords
{
    protected static string $resource = FeaturedToursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
