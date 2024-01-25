<?php

namespace App\Http\Controllers\parametrage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GererDevis extends Controller
{
    public function index(){
        return view('parametrage.gerer-devis');
    }
}
