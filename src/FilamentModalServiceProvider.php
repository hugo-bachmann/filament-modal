<?php

namespace HugoBachmann\FilamentModal;

use HugoBachmann\FilamentModal\Livewire\Modal;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use HugoBachmann\FilamentModal\Commands\FilamentModalCommand;

class FilamentModalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-modal')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_modal_table')
            ->hasCommand(FilamentModalCommand::class);
    }

    public function bootingPackage(): void
    {
        Livewire::component('filament-modal::modal', Modal::class);
    }
}
