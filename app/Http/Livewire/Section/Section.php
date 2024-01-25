<?php

namespace App\Http\Livewire\Section;

use App\Http\Controllers\DeleteSelected;
use App\Models\Sections;
use Illuminate\Http\Request;
use Livewire\Component;

class Section extends Component
{
    public $recherche;
    public $form = "";
    public $form1 = "";

    public $designation;
    public $semaine;
    public $commentaire;
    // modifier et ajout
    public $couleur;
    public $id_section;
    public $checkData = [];
    public $disabled = "disabled";
    public $total;
 

    public function formAjout(){
        $this->form = "active";
    }
    public function formModifier($id_sect,$designation,$comment) {

        $this->id_section = $id_sect;
        $this->designation = $designation;
        $this->commentaire = $comment;

        $this->form1 = "active";
       
    }
    public function deleteSelected(Sections $section){
     
        DeleteSelected::deleteSelected($section,"/parametre/section",$this->checkData);
      
    }
 
    public function create(){
        Sections::create([
            "designation" => $this->designation,
            "couleur" => $this->couleur,
            "commentaire" => $this->commentaire,

        ]);
       
        return redirect("/parametre/section")->with("notif","Ajouté avec succés");
    }
    public function update(Request $request){
        Sections::where('id',$request->id)
        ->update([
            "designation" => $request->designation,
            "couleur" => $request->couleur,
            "commentaire" => $request->commentaire,
        ]);
       
        return redirect("/parametre/section")->with("notif","Modificationt erminé  avec succés");
    }
    public function mount(){
        $this->form;
        $this->form1;
        $this->id_section;
        $this->designation;
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
        return view('livewire.section.section',[
            "sections" => Sections::
            where("designation",'like','%'.$this->recherche.'%')
            ->OrWhere("commentaire",'like','%'.$this->recherche.'%')
            ->paginate(9),
        ]);
    }
}
