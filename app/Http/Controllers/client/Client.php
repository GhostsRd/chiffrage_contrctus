<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Client extends Controller
{
    public function index(){
        return view('client.client');
    }
}
