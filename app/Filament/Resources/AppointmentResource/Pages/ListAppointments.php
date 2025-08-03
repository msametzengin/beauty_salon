<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAppointments extends ListRecords
{
    protected static string $resource = AppointmentResource::class;

    public function getTitle(): string
    {
        return "Randevular";
    }
    

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];

        
    }
}
