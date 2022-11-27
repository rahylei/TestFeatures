<?php

namespace App\Http\Livewire\Admin\Utils;

use Livewire\Component;
use App\Models\Home\VidaUniversitaria;

class TableVidaU extends Component
{


    public $type;
    public $cols;
    public $items;
    public $form;
    public $model;
    public $action;

    public function mount($type, $cols, $form, $model, $action, VidaUniversitaria $items){
        $this->type = $type;
        $this->cols = $cols;
        $this->form = $form;
        $this->model = $model;
        $this->items = $items;
    }


    public function render()
    {
        return view('livewire.admin.utils.table-vida-u');
    }
}
