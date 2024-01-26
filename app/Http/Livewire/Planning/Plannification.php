<?php

namespace App\Http\Livewire\Planning;

use App\Http\Controllers\planning\plannification as PlanningPlannification;
use App\Models\Avoirs;
use App\Models\Devis;
use App\Models\Items;
use App\Models\Planifications;
use App\Models\Projets;
use App\Models\Sections;
use DateInterval;
use DateTime;
use Hamcrest\Type\IsObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Plannification extends Component
{
    public $devis;
    public $tests;
    public $it;
    // public $tests;
    public $projets = [];
    public $items = [];
    public $dev = [];
    public $test = [];
    public $total_colonne;
    public $recherche = 1;
    //  public $temps_dev;
    public $state_date;
    public $plans = [];
    //  select 
    public $selects;
    public  $max;
    public $val;
    public $debut = 0;
    public $delai;
    public $couleur;
    public $idsection;
    public $maxDate_item;
    public $id_planning;
    public $max_date;
    public $date;
    public $date_fin;
    public $description;
    public $planns;
    // modifier le planing item
    public $form = "";
    public $id_item = "";
    public $design_item = "";
    public $planning_active = "";
    public $item_active = "";
    public $id_pl;
    public $id_devis;
    public $affiche;
    public $choix_planning;




    public function affichage(){
        $this->devis = Devis::max('created_at');
        $this->tests = Devis::where('created_at', $this->devis)->get();

        foreach ($this->tests as $te) {
            // $this->it = $te->id_projet;
            $pl = $te->choix_planification;
        }if($this->choix_planning == ""){

        }
        elseif($this->choix_planning == "jour"){
            Planifications::where("id",$pl)->update([
                "choix_planning"=> 0,
            ]);
            return redirect('/planification')->with('info',"Le planning est affiché par jour !");
        }else{
            Planifications::where("id",$pl)->update([
                "choix_planning"=>1,
            ]);
            return redirect('/planification')->with('info',"Le planning est affiché par semaine !");

        }
    }

    public function form_planning()
    {
        $this->planning_active = "active";
    }
    public function form_item()
    {
        $this->item_active = "active";
    }
    public function planningData()
    {
        $this->devis = Devis::max('created_at');
        $this->tests = Devis::where('created_at', $this->devis)->get();

        foreach ($this->tests as $te) {
            // $this->it = $te->id_projet;
            $pl = $te->choix_planification;
        }
        // $this->projets = Projets::where('id', $this->it)->get();
        // foreach ($this->projets  as $pro) {
        //     $id_projet = $pro->id;
        // }
        // $get_avoirs =  Avoirs::where('id_projet', $id_projet)->get();
        // foreach ($get_avoirs  as $res) {
        //     $this->id_pl = $res->id_planification;
        // }
        // dd($id_pl);
        // $result = Planifications::where('id', $id_pl)->get();

        // 


        $this->maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where  id_planification =' . $pl . '');
        foreach ($this->maxDate_item as $max) {
            $delai = $max->date;
        }

        $this->total_colonne = $delai;
        $this->date_fin = date('Y-m-d', strtotime($this->date) + ($delai * 24 * 60 * 60));

        Planifications::where('id', $this->id_pl)->update([
            'description' => $this->description,
            'delai' => $delai,
            'date_debut' => $this->date,
            'date_fin' => $this->date_fin,

        ]);
        return redirect('/planification');
    }

    public function exit()
    {
        $this->form = "";
    }
    public function modal($val,$designation){
        $this->id_item = $val;
        $this->design_item = $designation;
    }
    public function submited($val){
        $this->devis = Devis::max('created_at');
        $this->tests = Devis::where('created_at', $this->devis)->get();

        foreach ($this->tests as $te) {
            $this->it = $te->id_projet;
            $pl = $te->choix_planification;
        }
        $choix_plans = Planifications::where('id',$pl)->get("choix_planning");

        foreach($choix_plans as $choix){
            $choix_plan = $choix->choix_planning;
        }
        if($choix_plan == true){
            if($this->id_item == ""){
                return redirect('/planification')->with('info',"sectionner d'abord l'item puis la date de debut !");
            }else{
  
                $verification = Avoirs::where('id_items', $this->id_item)->get();
                $identifiant = 0;
                foreach ($verification as $ver) {
                    $identifiant = $ver->id;
                    $id_plan = $ver->id_planification;
                }
                $test = Planifications::where('id', $id_plan)->get();
        
                foreach ($test as $te) {
                    $date_debut = $te->date_debut;
                }
                $this->projets = Projets::where('id', $this->it)->get();
                foreach ($this->projets  as $pro) {
                    $id_projet = $pro->id;
                }
                $get_avoirs =  Avoirs::where('id_projet', $id_projet)->get();
                foreach ($get_avoirs  as $res) {
                    $this->id_pl = $res->id_planification;
                }
        
        
                if ($identifiant != 0) {
                    Avoirs::where('id_items', $this->id_item)->update([
                        // "duree" =>$this->delai,
                        "date_debut" => $val*5 - 5,
                    ]);
                    
                }
        
                $maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where   id_planification =' . $pl . '');
                foreach ($maxDate_item as $max) {
                    $delai = $max->date;
                    $date_fianle = date('Y-m-d', strtotime($date_debut) + ($delai * 24 * 60 * 60));
      
                    Planifications::where('id', $id_plan)->update([
                        "delai" => $delai,
                        "date_fin" => $date_fianle,
                    ]);
        
                    return redirect('/planification')->with('notif'," ".$this->design_item." a été deplacé avec succés :) ");
                }
            
            }
           
        }else{
            if($this->id_item == ""){
                return redirect('/planification')->with('info',"Sélectionner d'abord l'item puis la date de debut !");
            }else{
                $this->devis = Devis::max('created_at');
                $this->tests = Devis::where('created_at', $this->devis)->get();
        
                foreach ($this->tests as $te) {
                    $this->it = $te->id_projet;
                    $pl = $te->choix_planification;
                }
        
                $verification = Avoirs::where('id_items', $this->id_item)->get();
                $identifiant = 0;
                foreach ($verification as $ver) {
                    $identifiant = $ver->id;
                    $id_plan = $ver->id_planification;
                }
                $test = Planifications::where('id', $id_plan)->get();
        
                foreach ($test as $te) {
                    $date_debut = $te->date_debut;
                }
                $this->projets = Projets::where('id', $this->it)->get();
                foreach ($this->projets  as $pro) {
                    $id_projet = $pro->id;
                }
                $get_avoirs =  Avoirs::where('id_projet', $id_projet)->get();
                foreach ($get_avoirs  as $res) {
                    $this->id_pl = $res->id_planification;
                }
        
        
                if ($identifiant != 0) {
                    Avoirs::where('id_items', $this->id_item)->update([
                        // "duree" =>$this->delai,
                        "date_debut" => $val - 1,
                    ]);
                    
                }
        
                $maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where   id_planification =' . $pl . '');
                foreach ($maxDate_item as $max) {
                    $delai = $max->date;
                    $date_fianle = date('Y-m-d', strtotime($date_debut) + ($delai * 24 * 60 * 60));
      
                    Planifications::where('id', $id_plan)->update([
                        "delai" => $delai,
                        "date_fin" => $date_fianle,
                    ]);
        
                    return redirect('/planification')->with('notif'," ".$this->design_item." a été deplacé avec succés :) ");
                }
            
            }
        }
        
       
        
    }
    public function modifier($val, $design)
    {

        $this->form = "active";
        $this->id_item = $val;
        $this->design_item = $design;


        // dd($val$design);
    }
    public function changecouleur()
    {
        Sections::where("id", $this->idsection)->update([
            "couleur" => $this->couleur,
        ]);
        return redirect('/planification');
    }
    // planning avec modal
    // public function planning(Request $request)
    // {
    //     $this->devis = Devis::max('created_at');
    //     $this->tests = Devis::where('created_at', $this->devis)->get();

    //     foreach ($this->tests as $te) {
    //         $this->it = $te->id_projet;
    //         $pl = $te->choix_planification;
    //     }

    //     $verification = Avoirs::where('id_items', $request->id_item)->get();
    //     $identifiant = 0;
    //     foreach ($verification as $ver) {
    //         $identifiant = $ver->id;
    //         $id_plan = $ver->id_planification;
    //     }
    //     $test = Planifications::where('id', $id_plan)->get();

    //     foreach ($test as $te) {
    //         $date_debut = $te->date_debut;
    //     }
    //     $this->projets = Projets::where('id', $this->it)->get();
    //     foreach ($this->projets  as $pro) {
    //         $id_projet = $pro->id;
    //     }
    //     $get_avoirs =  Avoirs::where('id_projet', $id_projet)->get();
    //     foreach ($get_avoirs  as $res) {
    //         $this->id_pl = $res->id_planification;
    //     }


    //     if ($identifiant != 0) {
    //         Avoirs::where('id_items', $request->id_item)->update([
    //             // "duree" =>$this->delai,
    //             "date_debut" => $request->debut - 1,
    //         ]);
            
    //     }

    //     $maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where   id_planification =' . $pl . '');
    //     foreach ($maxDate_item as $max) {
    //         $delai = $max->date;
    //         $date_fianle = date('Y-m-d', strtotime($date_debut) + ($delai * 24 * 60 * 60));




    //         Planifications::where('id', $id_plan)->update([
    //             "delai" => $delai,
    //             "date_fin" => $date_fianle,
    //         ]);

    //         return redirect('/planification');
    //     }
    //     // else{

    //     //     Avoirs::create([
    //     //         "id_items" => $request->id_item,
    //     //         // "duree" =>$this->delai,
    //     //         "date_debut" =>$request->debut,

    //     //     ]);

    //     //     return redirect('/planification');

    //     // }
    //     return redirect('/planification');
    // }
    public function updatedebut()
    {

        Avoirs::where('id_items', $this->val)->update([
            "date_debut" => $this->debut++,
        ]);
    }
    public function updatedurre($valeur)
    {

        Avoirs::where('id_items', $this->val)->update([
            "duree" => $valeur,

        ]);
    }
    public function mount()
    {
        $this->projets;
        $this->items;
        // $this->dev;
        $this->state_date;
        $this->max = strtotime($this->state_date);
        $this->plans;
        $this->val;
        // $this->maxDate_item;    
        $this->date;
        $this->date_fin;
        $this->maxDate_item;
        $this->form;
        // $this->id_item;
        $this->design_item;
        $this->planns;
        $this->choix_planning;




        // $this->selects = Projets::all();






    }
    public function render()
    {
        $this->devis = Devis::max('created_at');
        $this->tests = Devis::where('created_at', $this->devis)->get();

        foreach ($this->tests as $te) {
            $this->it = $te->id_projet;
            //   $this->id_devis = $te->id;
            $this->id_pl = intval($te->choix_planification);
        }

        // $this->projets = Projets::where('id', $this->it)->get();
        // foreach ($this->projets  as $pro) {
        //     $id_projet = $pro->id;
        // }
        // $get_avoirs =  Avoirs::where('id_projet', $id_projet)->get();
        // foreach ($get_avoirs  as $res) {
        //     $this->id_pl = $res->id_planification;
        // }

        $this->maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where  id_planification =' . $this->id_pl . '');
        foreach ($this->maxDate_item as $max) {
            $delai = $max->date;
        }
        $this->total_colonne = $delai;

        // pour le plannification courant
        // $this->projets = Projets::where('id', $this->it)->get();
        // foreach ($this->projets  as $pro) {
        //     $id_projet = $pro->id;
        // }
        // $get_avoirs =  Avoirs::where('id_projet', $id_projet)->get();
        // foreach ($get_avoirs  as $res) {
        //     $id_projet = $res->id_planification;
        // }
        $this->planns = Planifications::where('id', $this->id_pl)->get();



        return view('livewire.planning.plannification', [

            $this->state_date = Items::where('id_projet', $this->it)->min("created_at"),

            $this->plans = Items::where('id_projet', $this->it)->get(),
            "sections" => Sections::get(),


            // $this->total_colonne = DB::table('items')->where('id_projet',$this->it)->sum('temps_passe'),
            // "avoirs" => Avoirs::where("id_items","like",'%'.$this->val.'%')->get(),
            "avoirs" => Avoirs::where('id_planification', $this->id_pl)->orderby('date_debut',"asc")->get(),

            $this->maxDate_item = DB::select('select max(duree + date_debut) as date from avoirs where   id_planification = ' . $this->id_pl . ''),

            $this->planns = Planifications::where('id', $this->id_pl)->get(),

        ]);
    }
}
