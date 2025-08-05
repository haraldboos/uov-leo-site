<?php

namespace App\Filament\Resources\AnnounsmentResource\Pages;

use App\Filament\Resources\AnnounsmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnnounsments extends ListRecords
{
    protected static string $resource = AnnounsmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
