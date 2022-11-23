<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Modal extends ModalComponent
{

    //protected $listeners = ['closeModal' => '$refresh'];
    public $type;
    public $seccion;
    //public $submdule;$submodule = null

    public function mount($seccion,$type, ){
        $this->seccion = $seccion;
        $this->type = $type;
        //$this->submodule = $submodule;
    }

    public static function modalMaxWidth(): string
    {
        return '7xl';
    }

    public static function closeModalOnEscape(): bool
    {
        return true;
    }

    public function render()
    {
        return view('livewire.admin.modal');
    }
}
