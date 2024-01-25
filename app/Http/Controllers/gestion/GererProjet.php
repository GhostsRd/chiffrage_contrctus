<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GererProjet extends Controller
{
    public function index(){
        return view('gestion.gerer-projet');
    }
}
