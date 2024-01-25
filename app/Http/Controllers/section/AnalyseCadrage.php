<?php

namespace App\Http\Controllers\section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyseCadrage extends Controller
{
    public function index(){
        return view("section.analysecadrage");
    }
}
