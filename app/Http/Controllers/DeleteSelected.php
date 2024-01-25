<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DeleteSelected extends Controller
{
    public function deleteSelected(Model $table,string $route,$checkData){
     
        foreach($checkData as $data){

            $table::query()
                ->where('id',$data)
                ->delete();
        }

      $checkData = [];

      return redirect($route)
      ->with('notif',"Effacé avec succés");
  }
}
