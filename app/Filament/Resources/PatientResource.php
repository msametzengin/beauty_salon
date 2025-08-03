<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Hastalar';
    protected static ?string $pluralModelLabel = 'Hastalar';
    protected static ?string $modelLabel = 'Hasta';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Soyad')
                    ->required()
                    ->maxLength(255),

                TextInput::make('surname')
                    ->label('Soyad')
                    ->required()
                    ->maxLength(255),

                TextInput::make('tc_id')
                    ->label('TC Kimlik No')
                    ->numeric()
                    ->minLength(11)
                    ->maxLength(11)
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('email')
                    ->label('E-posta')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                DatePicker::make('birth_date')
                    ->label('Doğum Tarihi')
                    ->required(),

                TextInput::make('phone')
                    ->label('Telefon')
                    ->tel()
                    ->minLength(10)
                    ->maxLength(11)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Ad')
                    ->searchable()
                    ->sortable(),
                
                TextColumn::make('surname')
                    ->label('Soyad')
                    ->searchable()
                    ->sortable(),


                TextColumn::make('tc_id')
                    ->label('TC')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->label('E-posta')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('birth_date')
                    ->label('Doğum Tarihi')
                    ->date(),

                TextColumn::make('phone')
                    ->label('Telefon')
                    ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
