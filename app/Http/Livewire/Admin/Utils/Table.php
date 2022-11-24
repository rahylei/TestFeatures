<?php

namespace App\Http\Livewire\Admin\Utils;

use Livewire\Component;
use App\Models\Home\Carousel;

class Table extends Component
{

    public $cols;
    public $items;
    public $form;
    public $model;

    public function mount($cols, $form, $model, Carousel $items){
        $this->cols = $cols;
        $this->form = $form;
        $this->model = $model;
        $this->items = $items->all();
    }

    public function render()
    {
        return view('livewire.admin.utils.table');
    }
}
