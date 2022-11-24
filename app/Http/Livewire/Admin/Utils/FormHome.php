<?php

namespace App\Http\Livewire\Admin\Utils;

use Livewire\Component;

class FormHome extends Component
{
    public $area;

    public function mount($area){
        $this->area = $area;
    }

    public function render()
    {
        return view('livewire.admin.utils.form-home');
    }
}
