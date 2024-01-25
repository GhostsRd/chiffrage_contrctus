<?php

namespace App\Http\Controllers\planning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class plannification extends Controller
{
    public function index(){
        return view('planning.planification');
    }
}
