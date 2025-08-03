<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TraitmentResource\Pages;
use App\Filament\Resources\TraitmentResource\RelationManagers;
use App\Models\Traitment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class TraitmentResource extends Resource
{
    protected static ?string $model = Traitment::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    protected static ?string $activeNavigationIcon = 'heroicon-s-heart';

    protected static ?string $navigationLabel = 'Hizmetler';
    protected static ?string $pluralModelLabel = 'Hizmetler';
    protected static ?string $modelLabel = 'Hizmet';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Hizmet Adı')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Hizmet Adı')
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTraitments::route('/'),
            'create' => Pages\CreateTraitment::route('/create'),
            'edit' => Pages\EditTraitment::route('/{record}/edit'),
        ];
    }
}
