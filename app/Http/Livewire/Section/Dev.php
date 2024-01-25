<?php

namespace App\Http\Livewire\Section;

use App\Http\Controllers\DeleteSelected;
use App\Models\Devis;
use App\Models\Items;
use App\Models\Projets;
use App\Models\Sections;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dev extends Component
{
      public $recherche;
      public $checkData = [];
      public $disabled = "disabled";
      public $total;
   

    
   
     public function create(){

   
        Items::create([
        //  "id_projet" => $res ,
        //  "id_section" => 2,
        //  "designation" =>   $this->designation,
        //  "commentaire" => $this->commentaire,
        //  "temps_passe" => $this->temps_passe,
        ]);
        return redirect('/sectionDev');
        
     }
     public function deleteSelected(Items $items){
     
        DeleteSelected::deleteSelected($items,"/items",$this->checkData);
    //     foreach($this->checkData as $data)
    //   Items::query()
    //       ->where('id',$this->checkData)
    //       ->delete();

    //   $this->checkData = [];

    //   return redirect("/parametre/section")
    //   ->with('notif',"Effacé avec succés");
  }


     public function remove($rem){
        Items::where('id',$rem)->delete();
        return redirect('/items')
        ->with('notif',"Effacé avec succés");
     }
     public function mount(){
         
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
      

         return view('livewire..section.dev',[
             "items" => Items::orderby('id')->where('designation','like','%'.$this->recherche.'%')
             ->OrWhere("id_section",'like','%'.$this->recherche.'%')
             ->paginate(20),
             "sections" => Sections::all(),
             "projets"=>Projets::all(),
             
          

            //  $this->jours = Items::where('id_projet',$this->projet)->get('temps_passe'),
            //  $this->items = Items::where('id_section',1)->get(),
         ]);
     }
}
