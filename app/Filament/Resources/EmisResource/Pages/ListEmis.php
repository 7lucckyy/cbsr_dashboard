<?php

namespace App\Filament\Resources\EmisResource\Pages;

use App\Filament\Resources\EmisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmis extends ListRecords
{
    protected static string $resource = EmisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
