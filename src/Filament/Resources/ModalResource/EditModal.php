<?php

namespace HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

use Filament\Resources\Pages\EditRecord;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

class EditModal extends EditRecord
{
    public static function getResource(): string
    {
        return ModalResource::class;
    }
}
