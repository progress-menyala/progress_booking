<?php

namespace App\Filament\Resources\FeaturedToursResource\Pages;

use App\Filament\Resources\FeaturedToursResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedTours extends EditRecord
{
    protected static string $resource = FeaturedToursResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
