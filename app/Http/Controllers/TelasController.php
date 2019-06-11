<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelasController extends Controller
{
    public function index(){
        return view('telas.index');
    }
}
