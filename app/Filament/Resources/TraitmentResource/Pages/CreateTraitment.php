<?php

namespace App\Filament\Resources\TraitmentResource\Pages;

use App\Filament\Resources\TraitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTraitment extends CreateRecord
{
    protected static string $resource = TraitmentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
