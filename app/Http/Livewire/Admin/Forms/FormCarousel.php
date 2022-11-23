<?php

namespace App\Http\Livewire\Admin\Forms;

use LivewireUI\Modal\ModalComponent;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Home\Carousel;
use Illuminate\Support\Facades\Storage;

class FormCarousel extends ModalComponent
{

    use WithFileUploads;

    public $photo;
    public $storage;
    public $url;
    public $action;
    public $carousel;
    protected $listeners = ['create' => 'respound'];

    public function mount($action, Carousel $carousel){
        $this->action = $action;
        $this->carousel = $carousel;
    }

    public function respound(){
        $this->reset();
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

        $this->emit('create');
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
        $this->emit('delete');
    }

    public function render()
    {
        return view('livewire.admin.forms.form-carousel');
    }
}
