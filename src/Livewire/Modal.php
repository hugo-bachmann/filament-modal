<?php

namespace HugoBachmann\FilamentModal\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $modalId;

    public $customClasses = '';

    public function render()
    {
        $content = \HugoBachmann\FilamentModal\Models\Modal::where('id', $this->modalId)->first()->content ?? '';

        $customClasses = $this->customClasses;

        return view('filament-modal::livewire.modal', compact('content', 'customClasses'));
    }
}
