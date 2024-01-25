<?php

namespace App\Http\Livewire;

use App\Models\Clients;
use App\Models\Devis;
use App\Models\Employers;
use App\Models\Projets;
use Livewire\Component;

class Projet extends Component
{
    public $clients = [];
    public $employers = [];
    // form data

    public $num_devis;


    public $titre_projet;
    public $description;
    public $contexte;
    public $commentaire;
    public $prerequis;
    public $date;
    // choiw de projet
    public $exist = "";

    // public function existant(){
    //     $this->exist = "active";
        
    // }
    
    // public function notexist(){
    //     $this->exist = "";
        
    // }
    public function update(){
        $datemax = Projets::max('created_at');
        $id_projets = Projets::where('created_at',$datemax)->get();
        foreach($id_projets as $proj){
            $id_projet = $proj->id;
            $id_devis = $proj->id_devis;
        }

        $valeurs = Devis::where('id',$id_devis)->where('id_projet',$id_projet)->get('id_projet');
        foreach($valeurs as $val){
            
            $number_id = $val->id_projet;
       }

        Projets::where('id',$number_id)->update([
            "titre" => $this->titre_projet,
            "description" => $this->description,
            "contexte" => $this->contexte,
            "commentaire" => $this->commentaire,
            "prerequis" => $this->prerequis,
           
        ]);
        return redirect('/chiffrage');
    }
    public function mount(){
      
    }

    public function render()
    {
        return view('livewire.projet');
    }
}
