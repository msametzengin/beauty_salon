<?php

namespace App\Filament\Resources\DoctorResource\Pages;

use App\Filament\Resources\DoctorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListDoctors extends ListRecords
{
    protected static string $resource = DoctorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return "Doktorlar";
    }

    public function getTableQuery(): Builder
    {
        return parent::getTableQuery()
            ->whereHas('roles', function ($query) {
                $query->where('name', 'doctor');
            });
    }
}
