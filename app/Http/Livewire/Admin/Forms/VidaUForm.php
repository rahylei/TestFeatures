<?php

namespace App\Http\Livewire\Admin\Forms;

use Livewire\Component;
use App\Models\Home\VidaUniversitaria;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class VidaUForm extends ModalComponent
{

    use WithFileUploads;

    public $photo;
    public $storage;
    public $action;
    public $vidauniversitaria;

    public function mount($action, VidaUniversitaria $vidauniversitaria){
        $this->action = $action;
        $this->$vidauniversitaria = $vidauniversitaria;
    }

    public function save(){

        $this->validate([

            'photo' => 'image|max:16024', // 1MB Max

        ]);


        $name = $this->photo->getClientOriginalName();
        $this->photo->storeAs( "public", $name);
        $this->storage = Storage::url($name);

        VidaUniversitaria::create([
            "storage" => $this->storage,
        ]);

        $this->redirect('layout');
    }

    public function update(VidaUniversitaria $vidauniversitaria){

        $this->validate([

            'photo' => 'image|max:16024', // 1MB Max

        ]);


        $name = $this->photo->getClientOriginalName();
        $this->photo->storeAs( "public", $name);
        $this->storage = Storage::url($name);

        $vidauniversitaria->update([
            "storage" => $this->storage,
        ]);

        $this->emit('update');
    }

    public function status(VidaUniversitaria $vidauniversitaria){
        if ($vidauniversitaria->active) {
            $this->inactive($vidauniversitaria);
        } else {
            $this->active($vidauniversitaria);
        }
        
    }

    public function active(VidaUniversitaria $vidauniversitaria){
        $vidauniversitaria->update([
            "active" => true
        ]);

        $this->redirect('layout');
    }


    public function inactive(VidaUniversitaria $vidauniversitaria){
        $vidauniversitaria->update([
            "active" => false
        ]);
        
        $this->redirect('layout');
    }

    public function delete(VidaUniversitaria $vidauniversitaria){
        $vidauniversitaria->delete();
        $this->redirect('layout');
    }

    public function close(){
        $this->closeModal();
    }


    public function render()
    {
        return view('livewire.admin.forms.vida-u-form');
    }
}
