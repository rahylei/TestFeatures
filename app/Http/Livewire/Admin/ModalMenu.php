<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Home\Carousel;

class ModalMenu extends Component
{
    protected $listeners = ['create' => '$refresh'];
    public $active;
    public $inactive;

    public function mount(Carousel $carousels){

        $this->active = $carousels->where("active", true)->get();
        $this->inactive = $carousels->where("active", false)->get();
    }

    public function render()
    {
        return view('livewire.admin.modal-menu');
    }
}
