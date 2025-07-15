<?php

namespace App\Filament\Resources\ArticaleResource\Pages;

use App\Filament\Resources\ArticaleResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateArticale extends CreateRecord
{
    protected static string $resource = ArticaleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Articale Created Successfully')
            ->body('Articale has been Added successfully.');
    }
}
