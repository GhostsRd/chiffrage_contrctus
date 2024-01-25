<?php

namespace App\Http\Controllers\planning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GererPlanning extends Controller
{
    public function index(){
        return view('planning.gererplanning');
    }
}
