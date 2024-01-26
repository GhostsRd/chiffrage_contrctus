<?php

namespace App\Http\Livewire\Devis;

use App\Models\Clients;
use App\Models\Devis as ModelsDevis;
use App\Models\Employers;
use App\Models\Factures;
use App\Models\Items;
use App\Models\Planifications;
use App\Models\Projets;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Devis extends Component
{
    public $clients = [];
    public $employers = [];
    // form data

    public $id_devis;
    public $num_employer;

    public $titre_projet;
    public $description;
    public $contexte;
    public $commentaire;
    public $prerequis;
    public $date;
    public $num_devis;
    public $number;
    // form devis
    public $num_projet;
    public $num_client;
    public $objet;
    public $delai;
    public $choix;
    public $etat;
    // public $montant;
    public $date_creation;
    // client
    public $nom;
    public $prenom;
    public $contact;



    // choiw de projet
    public $exist = "";
    public $formCLient = "";
    public $formprojet = "";

    // role pour la creation du devis


    protected $rules = [
        'num_client' => 'required',
        'num_employer' => 'required',
        // 'num_projet'=> 'required',
        'objet'=> 'required',

    ];

    protected $messages = [
        'num_client.required' => 'Veuillez sélectionner un client',
        'num_employer.required' => 'Veuillez sectionner un employer',
        // 'num_projet.min' => 'Le champ contact ne doit pas être inférieure à 10.',
        'objet.required' => 'Le champ objet est vide.',
       

    ];

    public function form1(){
        $this->formCLient = "";
        
    }
    
    public function form(){
        $this->formCLient = "active";
        
    }

    // function creation du devis avec du projet existant
    public function createDevis(){
       $this->validate();

        if($this->choix == "OK"){
            Planifications::create();

            $max_date = Planifications::max('created_at');
            $id_plans = Planifications::where('created_at',$max_date)->get();
            foreach($id_plans  as $plan){
                $id_plan = $plan->id;
            }
            ModelsDevis::create([
                "id_projet" => $this->num_projet,
                "id_client" => $this->num_client,
                "objet_chiffrage" => $this->objet,
                // "delai_mise_en_oeuvre" => $this->delai,
                "choix_planification" => $id_plan,
                "etat_devis" => "en cours",
                // "montant_total" => $this->montant,
                "date_creation" => $this->date_creation,
            ]);
        }else{
            ModelsDevis::create([
                "id_projet" => $this->num_projet,
                "id_client" => $this->num_client,
                "objet_chiffrage" => $this->objet,
                // "delai_mise_en_oeuvre" => $this->delai,
                "choix_planification" => $this->choix,
                "etat_devis" => "en cours",
                // "montant_total" => $this->montant,
                "date_creation" => $this->date_creation,
            ]);
        }
        

        // obtenier l'id exact  du nouveau devis 
        $this->num_devis = ModelsDevis::where('objet_chiffrage',$this->objet)->where('id_projet',$this->num_projet)->get('id');
        foreach($this->num_devis as $ids){
            
            $this->number =$ids->id;
       }
      
        //    mise a jour du nouveau projet avec le nouveau devis
        Projets::where('id',$this->num_projet)->update([

            "id_devis" => $this->number,
            "id_employer" => $this->num_employer,
           
        ]);

        // creer le facture du nouveau devis
        Factures::create([
            'id_devis' => $this->number,
        ]);

        // vider les items du projet existant

        // Items::where('id_projet',$this->num_projet)->delete();
        Planifications::create();
        
        Session::put('projet',"projet des");
        // $this->id_devis = ModelsDevis::where('id_projet',$this->num_projet)->get('id');
        return redirect('/chiffrage ');
        
    }

    // update devis from page liste devis

    public function updateDevis(Request $request){

        
        if($request->choix == "OK" ){
            Planifications::create();
            $plan =Planifications::max('created_at');
            $id_plan = Planifications::where('created_at',$plan)->get();

            foreach($id_plan as $plan){
                $res = $plan->id;
            }
            ModelsDevis::where('id',$request->id)->update([
            
                "id_client" => $request->id_client,
                "objet_chiffrage" => $request->objet,
                "choix_planification" => $res,
                "etat_devis" => "en cours",
                // "id_projet" => $request->id_projet,
                // "date_creation" => $this->date_creation,
            ]);
           
            Projets::where('id',$request->id_projet)->update([
                "id_employer" => $request->id_employer,     
            ]);
    
        }else{
            ModelsDevis::where('id',$request->id)->update([
            
                "id_client" => $request->id_client,
                "objet_chiffrage" => $request->objet,
                "choix_planification" => $request->choix,
                "etat_devis" => "en cours",
               
            ]);
            Projets::where('id',$request->id_projet)->update([
                "id_employer" => $request->id_employer,     
            ]);
        }
 
        return redirect('/chiffrage');
 }

    // fonction creation du devis avec nouveau projet
    public function createProjetChangeDevis(){

        $this->validate();

        Planifications::create();

        Projets::create([
            "id_employer" => $this->num_employer,
        ]);

        
        $datemax = Projets::max('created_at');
        $id_projets = Projets::where('created_at',$datemax)->get('id');
        foreach($id_projets as $proj){
            $id = $proj->id;
        }
        if($this->choix == "OK"){
            Planifications::create();

            $max_date = Planifications::max('created_at');
            $id_plans = Planifications::where('created_at',$max_date)->get();
            foreach($id_plans  as $plan){
                $id_plan = $plan->id;
            }
            ModelsDevis::create([
                "id_projet" => $id,
                "id_client" => $this->num_client,
                "objet_chiffrage" => $this->objet,
                // "delai_mise_en_oeuvre" => $this->delai,
                "choix_planification" => $id_plan,
                "etat_devis" => "en cours",
                // "montant_total" => $this->montant,
                "date_creation" => $this->date_creation,
            ]);
        }else{
            ModelsDevis::create([
                "id_projet" => $id,
                "id_client" => $this->num_client,
                "objet_chiffrage" => $this->objet,
                // "delai_mise_en_oeuvre" => $this->delai,
                "choix_planification" => $this->choix,
                "etat_devis" => "en cours",
                // "montant_total" => $this->montant,
                "date_creation" => $this->date_creation,
            ]);
        }
       
        // selectionner le devis courant
        $this->num_devis = ModelsDevis::where('objet_chiffrage',$this->objet)->where('id_projet',$id)->get('id');
        foreach($this->num_devis as $ids){
            
            $this->number =$ids->id;
       }
    //    update id devis sur le projet
        Projets::where('id',$id)->update([
            "id_devis" => $this->number,
        ]);
        Factures::create([
            'id_devis' => $this->number,
        ]);
        
       return redirect('/projet');
    }





    public function createProjet(){
        
        Projets::create([
            // "id_devis" => $this->num_devis,
            "id_employer" => $this->num_employer,
            "titre" => $this->titre_projet,
            "description" => $this->description,
            "contexte" => $this->contexte,
            "commentaire" => $this->commentaire,
            "prerequis" => $this->prerequis,
            "date_de_creation" => $this->date,
        ]);
        return redirect('/devis');
    }
    public function createClient(){
        
        Clients::create([ 
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "contact" => $this->contact,
        
        ]);
        $this->formCLient = "";
        // return redirect('/devis');
    }
    public function mount(){
        $this->clients;
        $this->employers;
        $this->formCLient;
        if($this->exist == "existant"){
            $this->exist = "";
            $this->formprojet = "";
        }else {
            // $this->exist = "active";
            $this->formprojet = "active";
        }
    }

    public function render()
    {
        return view('livewire.devis.devis',[
            $this->clients = Clients::all(),
            $this->employers = Employers::all(),
            'projets' => Projets::all(),
            'devis' => ModelsDevis::all(),
            
        ]);
    }
}
