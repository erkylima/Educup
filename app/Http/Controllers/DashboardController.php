<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.dashboard.index');
    }
    public function cursos(){
        return view('admin.dashboard.cursos');
    }
    public function fatura(){
        return view('admin.dashboard.fatura');
    }
    public function meus_cursos(){
        return view('admin.dashboard.meus-cursos');
    }
}
