<?php

namespace HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

class ListModal extends ListRecords
{
    public static function getResource(): string
    {
        return ModalResource::class;
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
