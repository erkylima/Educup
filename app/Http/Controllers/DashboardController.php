<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planos;
use App\Models\Cursos;
use App\Models\PlanosUsuario;
use App\Models\Disciplinas;
use App\Models\Videos;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.dashboard.index');
    }
    public function planos(){
        $planos = Planos::all();
        $cursos = Cursos::all();
        return view('admin.dashboard.planos.index')->with(['planos'=>$planos,'cursos'=>$cursos]);
    }
    public function cursos(){
        return view('admin.dashboard.planos.cursos');
    }
    public function fatura(){
        return view('admin.dashboard.fatura');
    }
    public function meus_cursos(){
        $user = auth()->user();
        $planos = PlanosUsuario::all()->where('id_usuario',$user->id)->where('status',1);
        if(!$planos->isEmpty())
            $cursos = Cursos::all()->where('id_plano',$planos[0]->id_plano);
        else{
            $cursos = array();
        }
        return view('admin.dashboard.plano.meus-cursos')->with(['user'=>$user,'cursos'=>$cursos,'planos'=>$planos]);
    }
    public function curso(Request $request){
        $id = $request->id_curso;
        $disciplinas = Disciplinas::all()->where('id_curso',$id)->sortBy('id');

        return view('admin.dashboard.plano.curso')->with(['disciplinas'=>$disciplinas]);
    }
    public function aula(Request $request){
        $user = auth()->user();
        $id = $request->disciplina;
        $aulas = Videos::all()->where('id_disciplina',$id);
        $aula = $request->aula;
        $disciplinas = Disciplinas::all()->where('id',$id);
        if(!$disciplinas->isEmpty() && isset($request->aula)){
            $cursos = Cursos::all()->where('id',$disciplinas[0]->id_curso);
            $planos = PlanosUsuario::all()->where('id_usuario',$user->id)->where('status',1)->where('id_plano',$cursos[0]->id_plano);
            if(!$planos->isEmpty()){
                return view('admin.dashboard.plano.aula')->with(['aula'=>$aula,'aulas'=>$aulas]);
            }else{
                return redirect('admin/meus-cursos');
            }
        }else{
            return redirect('admin/meus-cursos');
        }

    }
}
