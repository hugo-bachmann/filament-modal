<?php

namespace HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

use Filament\Resources\Pages\CreateRecord;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

class CreateModal extends CreateRecord
{
    public static function getResource(): string
    {
        return ModalResource::class;
    }
}
