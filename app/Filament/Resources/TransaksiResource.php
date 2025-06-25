<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiResource\Pages;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Models\Transaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tanggal')
                    ->required(),
                TimePicker::make('mulai')
                    ->required(),
                TimePicker::make('akhir')
                    ->required(),
                TextInput::make('keterangan')
                    ->required()
                    ->maxLength(255),
                TextInput::make('biaya')
                    ->required()
                    ->numeric(),
                TextInput::make('kendaraan_id')
                    ->label('kendaraan')
                    ->required()
                    ->rule('integer'),
                TextInput::make('area_parkir_id')
                    ->label('area_parkir')
                    ->required()
                    ->rule('integer'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal')
                    ->searchable(),
                TextColumn::make('mulai')
                    ->searchable(),
                TextColumn::make('akhir')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('keterangan')
                    ->formatStateUsing(fn ($state) => $state)
                    ->sortable(),
                TextColumn::make('biaya')
                    ->searchable(),
                TextColumn::make('kendaraan_id')
                    ->numeric(),
                TextColumn::make('area_parkir_id')
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
