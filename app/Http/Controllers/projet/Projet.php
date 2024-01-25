<?php

namespace App\Http\Controllers\projet;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use Illuminate\Http\Request;

class Projet extends Controller
{   
    
    public function index(){
        return view('projet.projet');
    }
}
