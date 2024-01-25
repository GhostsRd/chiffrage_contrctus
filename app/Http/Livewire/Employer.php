<?php

namespace App\Http\Livewire;

use App\Http\Controllers\DeleteSelected;
use App\Models\Employers;
use Illuminate\Http\Request;
use Livewire\Component;

class Employer extends Component
{
   
    // donne formulaire
    public $id_employer;
    public  $nom;
    public  $prenom;
    public  $contact;
    // form ajout
    public $form = "";
    public $form1 = "";

    // DELETE SELECTED et  MODIFY
    public $checkData = [];
    public $disabled = "disabled";
    public $total;
    public $recherche;

    protected $rules = [
        'nom' => 'required|max:25',
        'prenom' => 'required|max:25',
        'contact'=> 'required|max:10|min:10'
    ];

    protected $messages = [
        'contact.required' => 'Le champ contat est vide.',
        'contact.max' => 'Le champ contact ne doit pas être supérieure à 10.',
        'contact.min' => 'Le champ contact ne doit pas être inférieure à 10.',
        'prenom.required' => 'Le champ prenom est vide.',
        'nom.required' => 'Le champ nom est vide.',

    ];



    public function formAjout(){

        $this->form = "active";
    }
    public function formModifier($id_empl,$nom,$prenom,$contact) {

        $this->id_employer = $id_empl;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->contact = $contact;

        $this->form1 = "active";
       
    }
    public function deleteSelected(Employers $employer){
     
        DeleteSelected::deleteSelected($employer,"/employer",$this->checkData);
        // foreach($this->checkData as $data){

        //     Employers::query()
        //         ->where('id',$data)
        //         ->delete();
        // }

        // $this->checkData = [];

        // return redirect("/employer")
        // ->with('notif',"Effacé avec succés");
    }
    
    
    public function create(){

        $this->validate();

        Employers::create([
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "contact" => $this->contact,
        ]);
        return redirect("/employer")->with('notif',"Ajouté avec succés");
    }
    public function update(Request $request){
        Employers::where('id',$request->id)
                    ->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "contact" => $request->contact,
        ]);
        return redirect("/employer")->with('notif',"Modification terminé avec succés");
    }
    public function mount(){
        $this->id_employer;
        $this->nom;
        $this->prenom;
        $this->contact;

        $this->form;
        $this->form1;
        
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
        return view('livewire.employer',[
            "employers" => Employers::where('nom','like','%'.$this->recherche.'%')
            ->OrWhere('prenom','like','%'.$this->recherche.'%')
            ->paginate(9),
        ]);
    }
}
