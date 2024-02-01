<?php

namespace HugoBachmann\FilamentModal;

use Filament\Contracts\Plugin;
use Filament\Panel;
use HugoBachmann\FilamentModal\Filament\Resources\ModalResource;

class FilamentModalPlugin  implements Plugin
{
    public function getId(): string
    {
        return 'filament-modal';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                ModalResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
