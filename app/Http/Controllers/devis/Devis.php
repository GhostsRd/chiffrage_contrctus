<?php

namespace App\Http\Controllers\devis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Devis extends Controller
{
    public function index(){
        return view('devis.devis');
    }
}
