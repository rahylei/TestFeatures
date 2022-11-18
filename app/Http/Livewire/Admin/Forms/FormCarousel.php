<?php

namespace App\Http\Livewire\Admin\Forms;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Home\Carousel;
use Illuminate\Support\Facades\Storage;

class FormCarousel extends Component
{

    use WithFileUploads;

    public $photo;
    public $storage;
    public $url;

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
    }

    public function render()
    {
        return view('livewire.admin.forms.form-carousel');
    }
}
