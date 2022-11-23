<?php

namespace App\Http\Livewire\Admin\Utils;

use Livewire\Component;

class Table extends Component
{
    protected $listeners = [
        'create' =>'$refresh',
        'delete' =>'$refresh',
        'update' =>'$refresh',
        'status' =>'$refresh'
    ];

    public $items;

    public function mount($items){
        $this->items = $items;
    }

    public function render()
    {
        return view('livewire.admin.utils.table');
    }
}
