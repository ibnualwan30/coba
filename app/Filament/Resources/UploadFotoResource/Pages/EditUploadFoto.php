<?php

namespace App\Filament\Resources\UploadFotoResource\Pages;

use App\Filament\Resources\UploadFotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUploadFoto extends EditRecord
{
    protected static string $resource = UploadFotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
