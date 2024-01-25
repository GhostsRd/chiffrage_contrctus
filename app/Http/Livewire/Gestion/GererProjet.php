<?php

namespace App\Http\Livewire\Gestion;

use App\Http\Controllers\DeleteSelected;
use App\Models\Projets;
use Illuminate\Http\Request;
use Livewire\Component;

class GererProjet extends Component
{
     // extract data
     public $data = [];
     // donne formulaire
     public  $titre;
     public  $description;
     public  $prerequis;
     public  $contexte;
     public  $commentaire;
     public $id_projet;
    
     // form ajout
     public $form = "";
     public $form1 = "";

    //  
    public $checkData = [];
    public $disabled = "disabled";
    public $total;
    public $recherche;
    
    public function formAjout()
    {
        $this->form = "active";
    }
    public function formModifier($id, $titre, $description, $prerequis,$contexte,$commentaire)
    {

        // $this->dataForm = Clients::where('id',$dat)->get();
        $this->id_projet = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->prerequis = $prerequis;
        $this->contexte = $contexte;
        $this->commentaire = $commentaire;


        // dd($this->dataForm);
        $this->form1 = "active";
    }
    public function create(){
        Projets::create([
            "titre"=>$this->titre,
            "description"=>$this->description,
            "prerequis"=>$this->prerequis,
            "contexte"=>$this->contexte,
            "commentaire"=>$this->commentaire,

        ]);
        return redirect("/gererProjet")
        ->with('notif',"Ajouté avec succés");
    }
    public function update(Request $request){
        Projets::where('id',$request->id)->update([
            "titre"=>$request->titre,
            "description"=>$request->description,
            "prerequis"=>$request->prerequis,
            "contexte"=>$request->contexte,
            "commentaire"=>$request->commentaire,

        ]);
        return redirect("/gererProjet")
        ->with('notif',"Modifié avec succés");
    }
     public function deleteSelected(Projets $projets){
        DeleteSelected::deleteSelected($projets,"/gererProjet",$this->checkData);
        // Projets::query()
        //     ->where('id',$this->checkData)
        //     ->delete();

        // $this->checkData = [];

        // return redirect("/gererProjet")
        // ->with('notif',"Effacé avec succés");
    }
  
    public function mount(){
     $this->form;
     $this->form1;
     $this->id_projet;
     $this->titre;
     $this->description;
     $this->prerequis;
     $this->contexte;
     $this->commentaire;
       
    }
    public function render()
    {
        if(count($this->checkData) > 0){
            $this->disabled = "";
            $this->total = count($this->checkData);
        }else
        {
             $this->disabled = "disabled";
        }
        return view('livewire.gestion.gerer-projet',[
         "projets" => Projets:: where("titre",'like','%'.$this->recherche.'%')
           ->OrWhere("description",'like','%'.$this->recherche.'%')
           ->OrWhere("prerequis",'like','%'.$this->recherche.'%')
           ->OrWhere("contexte",'like','%'.$this->recherche.'%')
           ->paginate(8),
        ]);
    }
}
