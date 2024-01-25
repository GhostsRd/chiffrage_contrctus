<?php

namespace App\Http\Controllers\section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Items extends Controller
{
    public function index(){
        return view('section.items');
    }
}
