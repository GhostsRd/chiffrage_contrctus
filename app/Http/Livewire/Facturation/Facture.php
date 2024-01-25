<?php

namespace App\Http\Livewire\Facturation;

use App\Models\Avoirs;
use App\Models\Clients;
use App\Models\Devis;
use App\Models\Employers;
use App\Models\Factures;
use App\Models\Items;
use App\Models\Planifications;
use App\Models\Profils;
use App\Models\Projets;
use App\Models\Realisers;
use DateTime;
use App\Models\Sections;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

use Illuminate\Support\Facades\DB;

class Facture extends Component
{

    public $projets;
    public $devis;
    public $tests;
    public $it;
    public $items;
    public $secTests;
    public $devs;
    public $id_devis;
    public $total_colonne;
    public $planns;
    public $id_pl;

    
    public function updateFacture(){
    
        $devis = Devis::max('created_at');
        $tests = Devis::where('created_at',$devis)->get();
  
        foreach($tests as $te){
            $id_devis = $te->id;
          }

        //   get facture pour obtenir la somme finale
        
        Factures::where('id_devis',$id_devis)->update([
            "date_envoi"=>new DateTime('now'),
        ]);
        //   foreach($factures as $fact){
        //       $id_fact = $fact->id;
           
        //     }
  
    }



    public function mount(){
        $this->projets;
        $this->items;
        $this->it;
        $this->total_colonne;
        $this->planns;
       


       
    }


    public function render()
    {
   
      $this->devis = Devis::max('created_at');
      $this->tests = Devis::where('created_at',$this->devis)->get();

      foreach($this->tests as $te){
          $this->it = $te->id_projet;
          $this->id_devis = $te->id;
          $this->id_pl = $te->choix_planification;
        }


        $factures = Factures::where('id_devis',$this->id_devis)->get();
        foreach($factures as $fact){
            $id_fact = $fact->id;
         
          }
        //   if(is_null($this->id_pl)){
          
        //   }else
        //   {
        
        //   }
        if(is_numeric($this->id_pl)){
                   // counting egal a la tableau 
        $maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where  id_planification = '.$this->id_pl.'');
        foreach($maxDate_item as $max){
        $delai = $max->date;
            }
         $this->total_colonne = $delai;
     
         $this->planns = Planifications::where('id',$this->id_pl)->get();
     
        }


  
        return view('livewire.facturation.facture',[
            "alls" => Devis::where('created_at',$this->devis)->get(),
            "clients" => Clients::get(),
            $this->projets = Projets::all(),
            "profiles" => Profils::all(),
            "realisers" => Realisers::all(),

           $this->secTests = Items::where('id_projet',$this->it)->get(),

          //  section visualisation
        
            "sections" => Sections::where("id_projet",$this->it)->get(),
            // chef de proejt
            "resProjects" => Projets::where("id_devis",$this->id_devis)->get(),
            "chefs" => Employers::get(),
            "taches" => Realisers::where('id_facture',$id_fact)->get(),
            "montant_total" => Factures::where('id',$id_fact)->get('montant'),

            // planning
            // "avoirs" => Avoirs::orderby("date_debut")->get(),
            "avoirs" => Avoirs::where('id_planification',$this->id_pl)->get(),
            "factures" => $factures,
            

   
        ]);
    }
}
