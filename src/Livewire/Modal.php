<?php

namespace HugoBachmann\FilamentModal\Livewire;

use Livewire\Component;

class Modal extends Component
{
    /**
     * @var int|null $modalId
     * @description Select the modal to display
     */
    public ?int $modalId;

    /**
     * @var string|null $btnLabel
     * @description Change the label of the button of the modal
     */
    public ?string $btnLabel = 'Open Modal';

    /**
     * @var string|null $btnClasses
     * @description Add custom to the button of the modal
     */
    public ?string $btnClasses = 'btn btn-primary';

    /**
     * @var string|null $customClasses
     * @description Add custom classes to the body of the modal
     */
    public ?string $customClasses = '';

    public function render()
    {
        $content = \HugoBachmann\FilamentModal\Models\Modal::where('id', $this->modalId)->first()->content ?? '';

        $customClasses = $this->customClasses;

        return view('filament-modal::livewire.modal', compact('content', 'customClasses'));
    }
}
