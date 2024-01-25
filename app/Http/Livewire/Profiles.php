<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\employers;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Profiles extends Component
{
     use WithPagination;
     use WithFileUploads;

    public $tarif;
    public $profs  =[];

    public $form = "" ;
    public $form2 = "" ;
    public $count;
    public $recherche;
    
    public $nom;
    public $profiles;
    public $contact;
    public $tarifs;
    public $file;
    // modif prpoerties
    public $modifier = [];
    public $val = "2" ;
    
    
    public function active(){
        $this->form = "active";
    }
    public function desactive(){
        $this->form = "";
        
    }
    public function active2(){
        $this->form2 = "active";
    }
    public function desactive2(){
        $this->form2 = "";
        
    }
    public function store(Request $request){
        $profimg = date('Ymdhis');
        // dd($request);
        employers::create([
            
            'nom' => $this->nom,
            'profile' => $this->profiles,
            'contact' => $this->contact,
            'tarif' => $this->tarifs,
            'image' => $profimg,
        ]);
        // $this->file->storeAs('images',$profimg);
        // $img = $this->file;
        // $destpath = 'images/';
        // $rd = $this->file;
        // dd($rd);
        // $img->move_uploaded_file($profimg,$destpath);
        return redirect('/profiles');
    }
    public function update(Request $request){
        
 
        employers::where('id',$request->id)->update([
            'nom' => $request->nom,
            'profile' => $request->profile,
            'contact' => $request->contact,
            'tarif' => $request->tarif,
            'image' => $request->tarif,
        ]);
        return redirect('/profiles');
    }
    
    public function destroy($id){
        employers::where('id',$id)->delete();
        return redirect('/profiles');
    }
    public function  mount(){
        $this->profs;
        $this->form ;
        $this->form2 ;
        $this->modifier ;
    }
    public function render()
    {
       
        return view('livewire.profiles',[
            $this->profs  = employers::where('nom','like','%'.$this->recherche.'%')->get(),
            $this->modifier  = employers::where('id','like','%'.$this->val.'%')->get(),

        ]);
    }
    
}
