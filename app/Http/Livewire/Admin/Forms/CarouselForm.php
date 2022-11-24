<?php

namespace App\Http\Livewire\Admin\Forms;

use Livewire\Component;
use App\Models\Home\Carousel;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class CarouselForm extends ModalComponent
{
    use WithFileUploads;

    public $photo;
    public $storage;
    public $url;
    public $action;
    public $carousel;

    public function mount($action, Carousel $carousel){
        $this->action = $action;
        $this->carousel = $carousel;
    }

    public function save(){

        $this->validate([

            'photo' => 'image|max:16024', // 1MB Max

        ]);


        $name = $this->photo->getClientOriginalName();
        $this->photo->storeAs( "public", $name);
        $this->storage = Storage::url($name);

        Carousel::create([
            "storage" => $this->storage,
            "url" => $this->url
        ]);

        $this->redirect('layout');
    }

    public function update(Carousel $carousel){

        $this->validate([

            'photo' => 'image|max:16024', // 1MB Max

        ]);


        $name = $this->photo->getClientOriginalName();
        $this->photo->storeAs( "public", $name);
        $this->storage = Storage::url($name);

        $carousel->update([
            "storage" => $this->storage,
            "url" => $this->url
        ]);

        $this->emit('update');
    }

    public function active(Carousel $carousel){
        $carousel->update([
            "active" => true
        ]);

        $this->emit('status'); 
    }


    public function inactive(Carousel $carousel){
        $carousel->update([
            "active" => false
        ]);
        
        $this->emit('status'); 
    }

    public function delete(Carousel $carousel){
        $carousel->delete();
        $this->redirect('layout');
    }

    public function close(){
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.forms.carousel-form');
    }
}
