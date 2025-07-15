<?php

namespace App\Filament\Resources\ArticaleResource\Pages;

use App\Filament\Resources\ArticaleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArticales extends ListRecords
{
    protected static string $resource = ArticaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
