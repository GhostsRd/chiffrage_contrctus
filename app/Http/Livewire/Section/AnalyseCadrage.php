<?php

namespace App\Http\Livewire\Section;

use App\Models\Devis;
use App\Models\Items;
use Livewire\Component;
use App\Models\Projets;

use App\Models\Sections;

class AnalyseCadrage extends Component
{
    // form variable
    public $id_projet;
    public $devis;
    public $designation;
    public $commentaire;
    public $temps_passe;
    public $date;
    public $tests;

    public $form = "";
    public $formDev = "";
    // projet data
    public $projets = [];

    public function section(){
        $this->form = "active";
    }
    public function create(){
        foreach($this->tests as $res){
           $resultat = $res->id_projet;

        }
        //  = Projets::where('id_projet',$this)
       Sections::create([
        "id_projet" => $resultat,
        "designation" => "analyse",
        "commentaire" => $this->commentaire,
        "semaine" => $this->temps_passe,
       ]);
    //items analyse et cadrage 
       Items::create([
        "id_projet" => $resultat,
        "id_section" => 1,
        "designation" =>   $this->designation,
        "commentaire" => $this->commentaire,
        "temps_passe" => $this->temps_passe,
       ]);
       return redirect('/sectionDev',$this->id_projet);
       
    }
    public function formaDev(){
        $this->form = "des";
        $this->formDev = "active";
    }
    public function mount(){
        $this->form;
        $this->formDev;
        $this->projets;
        $this->id_projet;
        $this->tests;

    // dd($this->tests->id_projet);

    }
   
    public function render()
    {
        return view('livewire..section.analyse-cadrage',[
            $this->projets = Projets::all(),
             $this->devis = Devis::max('created_at'),
             $this->tests = Devis::where('created_at',$this->devis)->get(),
        ]);
    }
}
