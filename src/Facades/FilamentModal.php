<?php

namespace HugoBachmann\FilamentModal\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HugoBachmann\FilamentModal\FilamentModal
 */
class FilamentModal extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HugoBachmann\FilamentModal\FilamentModal::class;
    }
}
