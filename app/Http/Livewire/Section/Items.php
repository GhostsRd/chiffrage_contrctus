<?php

namespace App\Http\Livewire;

use App\Models\Projets;
use Livewire\Component;

class Items extends Component
{
    // public $form = "";
    // public $formDev = "";
    // // projet data
    // public $projets = [];

    // public function section(){
    //     $this->form = "active";
    // }
    // public function formaDev(){
    //     $this->form = "des";
    //     $this->formDev = "active";
    // }
    public function mount(){
        // $this->form;
        // $this->formDev;
        // $this->projets;
    }
    public function render()
    {
        return view('livewire..section.items',[
            // $this->projets = Projets::all(),
        ]);
    }
}
