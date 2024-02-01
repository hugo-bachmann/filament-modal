<?php

namespace HugoBachmann\FilamentModal\Commands;

use Illuminate\Console\Command;

class FilamentModalCommand extends Command
{
    public $signature = 'filament-modal';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
