<?php

namespace App\Filament\Resources\OrganizerProfileResource\Pages;

use App\Filament\Resources\OrganizerProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizerProfile extends EditRecord
{
    protected static string $resource = OrganizerProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
