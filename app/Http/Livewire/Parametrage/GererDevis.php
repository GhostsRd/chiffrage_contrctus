<?php

namespace App\Http\Livewire\Parametrage;

use App\Http\Controllers\DeleteSelected;
use App\Models\Devis;
use App\Models\Factures;
use App\Models\Items;
use App\Models\Projets;
use App\Models\Realisers;
use App\Models\Sections;
use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\Date;
use Livewire\Component;
use Livewire\WithPagination;

use function PHPUnit\Framework\isNull;

class GererDevis extends Component
{
    
    public $checkData = [];
    public $disabled = "disabled";
    public $total ;
    public $recherche;

    public function deleteSelected(Devis $devis ){
        
        
        foreach($this->checkData as $data){

            Factures::query()
            ->where('id_devis',$data)
            ->delete();
        }

        DeleteSelected::deleteSelected($devis,"/parametrage/gererDevis",$this->checkData);

        // Devis::query()
        //     ->where('id',$this->checkData)
        //     ->delete();

        // $this->checkData = [];
        // return redirect('/parametrage/gererDevis')
        // ->with("notif","Effacé avec succés");
    }

    public function remove($id){
        Devis::where('id',$id)->delete();

        $fact = Factures::where('id_devis',$id)->get();

       foreach($fact as $fa){
        $id_facture = $fa->id;
       }

       Realisers::where('id_facture',$id_facture)->delete();

       Factures::where('id_devis',$id)->delete();
       
       
        return redirect('/parametrage/gererDevis')
        ->with("notif","Effacé avec succés");
    }
    public function visualisation($val){
        
        

        Devis::where('id',$val)->update([
            'created_at' => new DateTime('now'),
        ]);

        $curent_devis = Devis::max('created_at');
        $get_all = Devis::where('created_at',$curent_devis)->get();
        $id = 0;
       
        foreach($get_all as $current){
            $id= $current->id_projet;
        }
        
        if($id!= 0){
           $sections = Items::where('id_projet',$id)->get();

           foreach($sections as $sec){
                $new_id = $sec->id_section;
                Sections::where('id',$new_id)->update([
                    'id_projet' => $id,
                ]);
           }
           
        }
        // if($id != 0){
        //     Sections::where('id','>',0)->update([
        //         'id_projet' => $id,
        //     ]);
        // }
        return redirect('/devis')->with("status",$val);
        
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
        
        return view('livewire.parametrage.gerer-devis',[

            "devis" => Devis::where('objet_chiffrage','like','%'.$this->recherche.'%')->paginate(10),
            "projets"=> Projets::all(),
        ]);
    }
}
