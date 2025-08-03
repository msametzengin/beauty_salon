<?php

namespace App\Filament\Resources\AppointmentResource\Pages;

use App\Filament\Resources\AppointmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Patient;

class CreateAppointment extends CreateRecord
{
    protected static string $resource = AppointmentResource::class;

    // AppointmentResource::mutateFormDataBeforeCreate()

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $patient = Patient::create($data['patient']); // hasta bilgilerini oluştur
        $data['patient_id'] = $patient->id; // randevuya hasta id'si ekle

        unset($data['patient']); // nested patient alanını kaldır

        return $data;
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}

