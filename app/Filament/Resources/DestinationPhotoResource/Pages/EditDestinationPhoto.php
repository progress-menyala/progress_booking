<?php

namespace App\Filament\Resources\DestinationPhotoResource\Pages;

use App\Filament\Resources\DestinationPhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDestinationPhoto extends EditRecord
{
    protected static string $resource = DestinationPhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
