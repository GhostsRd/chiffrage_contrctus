<?php

namespace App\Http\Livewire\Parametrage;

use App\Http\Controllers\DeleteSelected;
use App\Models\Profils;
use Livewire\Component;
use Illuminate\Http\Request;

class Profile extends Component
{
    public $checkData = [];
    public $disabled = "disabled";
    public $total;
    public $recherche;
    // form ajouter
    public $profile;
    public $tarif;
    public $form = "";
    // form modifier
    public $form1 = "";
    public $id_profile;
    
    
    protected $rules = [
        'profile' => 'required|max:25',
        'tarif' => 'required',
      
    ];

    protected $messages = [
        'profile.required' => 'Le champ profile est vide.',
        'tarif.required' => 'Le champ tarif est vide.',
      

    ];


    public function formAjout(){

        $this->form = "active";
    }
    public function formModifier($id_profile,$profile,$tarif) {

      

        $this->id_profile = $id_profile;
        $this->profile = $profile;
        $this->tarif = $tarif;
      
        $this->form1 = "active";
       
    }
    public function update(Request $request){
        Profils::where('id',$request->id)
        ->update([
            "profile" => $request->profile,
            "tarif" => $request->tarif,
        ]);
        
        return redirect("/profile")
        ->with('notif',"Modification effectué");
    }
    
    public function deleteSelected(Profils $profiles){
     
        DeleteSelected::deleteSelected($profiles,"/profile",$this->checkData);
        // foreach($this->checkData as $data){

        //     Profils::query()
        //         ->where('id',$data)
        //         ->delete();
        // }

        // $this->checkData = [];

        // return redirect("/profile")
        // ->with('notif',"Effacé avec succes");
    }
    public function insert(){
        $this->validate();

        Profils::create([
            "profile"=>$this->profile,
            "tarif"=>$this->tarif,

        ]);
        return redirect("/profile")
        ->with('notif',"Ajouté avec succes");
    }
    public function mount(){
        $this->form;
        $this->form1;
        $this->profile;
        $this->tarif;


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
        return view('livewire.parametrage.profile',[
            'profiles' => Profils::where('profile','like','%'.$this->recherche.'%')
            ->paginate(10),
        ]);
    }
}
