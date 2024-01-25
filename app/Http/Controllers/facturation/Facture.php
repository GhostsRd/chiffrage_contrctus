<?php

namespace App\Http\Controllers\facturation;

use App\Http\Controllers\Controller;
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
use App\Models\Sections;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Facture extends Controller
{
   public function index(){
    return view('facturation.facture');
   }
   public function facture(){
      $devis = Devis::max('created_at');
      $tests = Devis::where('created_at',$devis)->get();

      foreach($tests as $te){
          $it = $te->id_projet;
          $id_devis = $te->id;
          $id_pl = $te->choix_planification;
        }


        $factures = Factures::where('id_devis',$id_devis)->get();
        foreach($factures as $fact){
            $id_fact = $fact->id;
         
          }
        //   if(is_null($this->id_pl)){
          
        //   }else
        //   {
        
        //   }
        if(is_numeric($id_pl)){
                   // counting egal a la tableau 
        $maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where  id_planification = '.$id_pl.'');
        foreach($maxDate_item as $max){
        $delai = $max->date;
            }
         $total_colonne = $delai;
     
         $planns = Planifications::where('id',$id_pl)->get();
     
        }


      

      $pdf = FacadePdf::loadView("facturation.facturedevis",["total_colonne","planns",
         "alls" => Devis::where('created_at',$devis)->get(),
         "clients" => Clients::get(),
         "profiles" => Profils::all(),
         "projets" => Projets::all(),
         "realisers" => Realisers::all(),
         
    
       

         
         "secTests" => Items::where('id_projet',$it)->get(),
         //  section visualisation
         
         "sections" => Sections::where("id_projet",$it)->get(),
         // chef de proejt
         "resProjects" => Projets::where("id_devis",$id_devis)->get(),
         "chefs" => Employers::get(),
         "taches" => Realisers::where('id_facture',$id_fact)->get(),
         "montant_total" => Factures::where('id',$id_fact)->get('montant'),

         // planning
         // "avoirs" => Avoirs::orderby("date_debut")->get(),
         "avoirs" => Avoirs::where('id_planification',$id_pl)->get(),
      ]);
      return $pdf->stream("doc.pdf");
      // return view('facturation.facturedevis');
   }
}
