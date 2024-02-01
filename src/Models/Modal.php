<?php

namespace HugoBachmann\FilamentModal\Models;

use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{

    protected $table = 'filament_modals';
    protected $fillable = [
        'name',
        'content',
        'full_screen',
    ];

    protected $casts = [
        'content'       => 'array',
        'full_screen'   => 'boolean',
    ];
}
