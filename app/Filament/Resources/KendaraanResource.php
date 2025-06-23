<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KendaraanResource\Pages;
use App\Filament\Resources\KendaraanResource\RelationManagers;
use App\Models\Kendaraan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KendaraanResource extends Resource
{
    protected static ?string $model = Kendaraan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('merk')
                    ->required()
                    ->maxLength(255),
                TextInput::make('pemilik')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nopol')
                    ->required()
                    ->maxLenght(255),
                TextInput::make('tahun_beli')
                    ->required()
                    ->int(),
                TextInput::make('deskripsi')
                    ->required()
                    ->Text(),
                TextInput::make('jenis_kendaraan_id')
                    ->required()
                    ->int()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('merk')
                    ->searchable(),
                TextColumn::make('pemilik')
                    ->searchable(),
                TextColumn::make('nopol')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tahun_beli')
                    ->label('Tahun Beli')
                    ->formatStateUsing(fn ($state) => $state)
                    ->sortable(),
                TextColumn::make('deskripsi')
                    ->searchable(),
                TextColumn::make('jenis_kendaraan_id')
                    ->numeric(),
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
            'index' => Pages\ListKendaraans::route('/'),
            'create' => Pages\CreateKendaraan::route('/create'),
            'edit' => Pages\EditKendaraan::route('/{record}/edit'),
        ];
    }
}
