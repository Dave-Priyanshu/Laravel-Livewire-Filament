<?php

namespace App\Filament\Resources\ArticaleResource\Pages;

use App\Filament\Resources\ArticaleResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditArticale extends EditRecord
{
    protected static string $resource = ArticaleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Articale Updated Successfully')
            ->body('Articale has been Updated successfully.');
    }
}
