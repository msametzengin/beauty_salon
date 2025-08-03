<?php

namespace App\Filament\Doctor\Resources;

use App\Filament\Doctor\Resources\AppointmentResource\Pages;
use App\Filament\Doctor\Resources\AppointmentResource\RelationManagers;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Fieldset;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static ?string $activeNavigationIcon = 'heroicon-s-list-bullet';

    protected static ?string $navigationLabel = 'Randevular'; 
    protected static ?string $pluralModelLabel = 'Randevular';
    protected static ?string $modelLabel = 'Randevu';  

   public static function form(Form $form): Form
    {
    return $form
        ->schema([
            TextInput::make('patient.name')
                ->required()
                ->minLength(2)
                ->maxLength(50)
                ->label('Ad'),

            TextInput::make('patient.surname')
                ->required()
                ->minLength(2)
                ->maxLength(50)
                ->label('Soyad'),

            TextInput::make('patient.tc_id')
                ->required()
                ->length(11)
                ->regex('/^[0-9]+$/')
                ->label('T.C. Kimlik No'),

            TextInput::make('patient.email')
                ->required()
                ->email()
                ->label('E-posta'),

            TextInput::make('patient.phone')
                ->required()
                ->length(10)
                ->regex('/^[0-9]+$/')
                ->label('Telefon'),

            DatePicker::make('patient.birth_date')
                ->required()
                ->label('Doğum Tarihi')
                ->maxDate(now()->subYears(18))
                ->minDate(now()->subYears(100)),

            DateTimePicker::make('date')
                ->label('Randevu Tarihi')
                ->required()
                ->seconds(false)
                ->extraAttributes([
                    'min' => now()->format('Y-m-d\TH:i'),
                    'max' => now()->addYear()->format('Y-m-d\TH:i'),
                ]),

                Hidden::make('doctor_id')
                ->default(fn () => Auth::id()),

            // Select::make('doctor_id')
            //     ->label('Doktor')
            //     ->relationship(
            //         name: 'doctor',
            //         titleAttribute: 'name',
            //         modifyQueryUsing: fn ($query) =>
            //             $query->whereHas('roles', fn ($q) => $q->where('id', 2))
            //     )
            //     ->required(),

            Select::make('traitment_id')
                ->label('İşlem')
                ->relationship('traitment', 'name')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('patient.name')
                    ->searchable()
                    ->label('Hasta Ad'),
                TextColumn::make('patient.surname')
                    ->searchable()
                    ->label('Hasta Soyad'),
                TextColumn::make('traitment.name')
                    ->sortable()
                    ->label('İşlem'),
                TextColumn::make('date')
                    ->sortable()
                    ->dateTime()
                    ->label('Randevu Tarihi'),
                TextColumn::make('status')
                    ->sortable()
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'waiting' => 'Beklemede',
                        'accepted' => 'Kabul Edildi',
                        'denied' => 'Reddedildi',
                    })
                    ->color(fn (string $state): string => match ($state){
                        'waiting' => 'warning',
                        'denied' => 'danger',
                        'accepted' => 'success',
                    })
                    ->label('Durum')
            ])
            ->filters([
                //
            ])
            ->actions([ 
                ViewAction::make()
                    ->modalHeading('Randevu Detayı')
                    ->slideOver()
                    ->infolist([
                        Section::make('Hasta Bilgileri')
                            ->icon('heroicon-o-users')
                            ->statePath('patient')
                            ->columns(3)
                            ->schema([
                                TextEntry::make('name')->label('Adı'),
                                TextEntry::make('surname')->label('Soyadı'),
                                TextEntry::make('phone')->label('Telefon'),

                        ]),
                    
                        Section::make('Randevu Bilgileri')
                            ->icon('heroicon-o-calendar')
                            ->columns(3)
                            ->schema([
                                TextEntry::make('date')->label('Tarihi')->dateTime(),
                                TextEntry::make('traitment.name')->label('İşlem'),
                                IconEntry::make('status')->label('Durumu')
                                    ->color(fn (string $state): string => match ($state){
                                        'waiting' => 'warning',
                                        'denied' => 'danger',
                                        'accepted' => 'success',
                                    })
                                    ->icon(fn (string $state): string => match ($state){
                                        'waiting' => 'heroicon-o-clock',
                                        'denied' => 'heroicon-o-x-circle',
                                        'accepted' => 'heroicon-o-check-circle',
                                    })
                            ]),
                ]),

                ActionGroup::make([
                    Action::make('set_waiting')
                        ->label('⏳ Beklemeye Al')
                        ->color('warning')
                        ->visible(fn ($record) => $record->status !== 'waiting')
                        ->action(fn ($record) => $record->update(['status' => 'waiting'])),

                    Action::make('set_accepted')
                        ->label('✅ Kabul Et')
                        ->color('success')
                        ->visible(fn ($record) => $record->status !== 'accepted')
                        ->action(fn ($record) => $record->update(['status' => 'accepted'])),

                    Action::make('set_denied')
                        ->label('❌ Reddet')
                        ->color('danger')
                        ->visible(fn ($record) => $record->status !== 'denied')
                        ->action(fn ($record) => $record->update(['status' => 'denied'])),
                ])
                ->label('Durum İşlemleri')
                ->icon('heroicon-m-ellipsis-vertical')
                ->size(ActionSize::Small)
                ->color('primary')
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            // 'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}
