<?php

namespace App\Filament\Resources\AnnounsmentResource\Pages;

use App\Filament\Resources\AnnounsmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnnounsment extends EditRecord
{
    protected static string $resource = AnnounsmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
