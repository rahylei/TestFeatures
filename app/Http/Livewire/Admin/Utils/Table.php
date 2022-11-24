<?php

namespace App\Http\Livewire\Admin\Utils;

use Livewire\Component;
use App\Models\Home\Carousel;

class Table extends Component
{

    public $cols;
    public $items;

    public function mount($cols,Carousel $items){
        $this->cols = $cols;
        $this->items = $items->all();
    }

    public function render()
    {
        return view('livewire.admin.utils.table');
    }
}
