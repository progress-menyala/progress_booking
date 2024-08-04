<?php

namespace App\Filament\Resources\DestinationPhotoResource\Pages;

use App\Filament\Resources\DestinationPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDestinationPhotos extends ListRecords
{
    protected static string $resource = DestinationPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
