<?php

namespace App\Filament\Resources\AreaParkirResource\Pages;

use App\Filament\Resources\AreaParkirResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAreaParkir extends EditRecord
{
    protected static string $resource = AreaParkirResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
