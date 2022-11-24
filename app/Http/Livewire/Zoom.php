<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Zoom extends ModalComponent
{

    public $text;

    public function mount($text) {
        $this->text = $text;
    }

    public function zoomplus(){
        switch($this->text){
            case "text-sm":
                $this->text = "text-lg";
                break;

            case "text-lg":
                $this->text = "text-2xl";
                break;
            default:
                $this->text = "text-2xl";
        }
    }

    public function zoommenos(){
        switch($this->text){
            case "text-lg":
                $this->text = "text-sm";
                break;

            case "text-2xl":
                $this->text = "text-lg";
                break;
            default:
                $this->text = "text-sm";
        }
    }

    public function render()
    {
        return view('livewire.zoom');
    }
}
