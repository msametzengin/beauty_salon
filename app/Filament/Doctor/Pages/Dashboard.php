<?php

namespace App\Filament\Doctor\Pages;

use App\Filament\Doctor\Widgets\Calendar;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static ?string $activeNavigationIcon = 'heroicon-s-calendar';

    protected static ?string $navigationLabel = 'Randevu Takvimi'; 

    protected static ?string $pluralModelLabel = 'Randevu Takvimi';

    public function getWidgets(): array
    {
        return [
            Calendar::class,
        ];
    }
}
