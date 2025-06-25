<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AreaParkirResource\Pages;
use App\Filament\Resources\AreaParkirResource\RelationManagers;
use App\Models\AreaParkir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AreaParkirResource extends Resource
{
    protected static ?string $model = AreaParkir::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('kapasitas')
                    ->required()
                    ->numeric()
                    ->rule('integer'),
                TextInput::make('keterangan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('kampus_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('kapasitas')
                    ->searchable(),
                TextColumn::make('keterangan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kampus_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListAreaParkirs::route('/'),
            'create' => Pages\CreateAreaParkir::route('/create'),
            'edit' => Pages\EditAreaParkir::route('/{record}/edit'),
        ];
    }
}
