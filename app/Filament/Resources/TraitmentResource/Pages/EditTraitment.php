<?php

namespace App\Filament\Resources\TraitmentResource\Pages;

use App\Filament\Resources\TraitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTraitment extends EditRecord
{
    protected static string $resource = TraitmentResource::class;

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
}
