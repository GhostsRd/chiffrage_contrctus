<?php

namespace App\Http\Livewire\Gestion;

use App\Http\Controllers\DeleteSelected;
use App\Models\Factures;
use Livewire\Component;

class GererFacture extends Component
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

   public function deleteSelected(Factures $facture){

    DeleteSelected::deleteSelected($facture,"/gestion/facture",$this->checkData);
 
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
        return view('livewire.gestion.gerer-facture',[
            "factures" => Factures:: where("id_devis",'like','%'.$this->recherche.'%')
            ->OrWhere("nature_projet",'like','%'.$this->recherche.'%')
            ->OrWhere("date_edition",'like','%'.$this->recherche.'%')
            ->OrWhere("date_envoi",'like','%'.$this->recherche.'%')
            ->OrWhere("montant",'like','%'.$this->recherche.'%')
            ->paginate(8),
        ]);
    }
}
