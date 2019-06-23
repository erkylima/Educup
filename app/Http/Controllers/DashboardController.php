<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planos;
use App\Models\Cursos;
use App\Models\PlanosUsuario;
use App\Models\Disciplinas;
use App\Models\Videos;
use Symfony\Component\VarDumper\Cloner\Cursor;

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
    public function meus_cursos(Request $request){
        $user = auth()->user();
        $planos = PlanosUsuario::all()->where('id_usuario',$user->id)->where('status',1);
        $msg=$request->msg;
        if(!$planos->isEmpty())
            $cursos = Cursos::all()->where('id_plano',$planos[0]->id_plano);
        else{
            $cursos = array();
        }
        return view('admin.dashboard.plano.meus-cursos',compact('msg'))->with(['msg'=>$msg,'user'=>$user,'cursos'=>$cursos,'planos'=>$planos,'request'=>$request]);
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
        $msg = 'Nenhuma Aula Encontrada';

        if(!$disciplinas->isEmpty() && isset($request->aula) && !$aulas->isEmpty()){
            $id_curso = $disciplinas->first()->id_curso;
            $cursos = Cursos::all()->where('id',$id_curso);
            $id_plano = $cursos->first()->id_plano;
            $planos = PlanosUsuario::all()->where('id_usuario',$user->id)->where('status',1)->where('id_plano',$id_plano);
            if(!$planos->isEmpty()){
                return view('admin.dashboard.plano.aula')->with(['aula'=>$aula,'aulas'=>$aulas]);
            }else{
                return redirect('admin/meus-cursos');
            }
        }else{
            return redirect()->route('admin.meus-cursos',['msg'=>$msg]);
        }

    }

    public function addCurso(Request $request){
        $plano = 1;
        $cursos = Cursos::all()->where('id_plano',$plano);

        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.addcurso');
    }
    public function editCurso(Request $request){

        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.editcurso');
    }
    public function listaCurso(Request $request){
        $cursos = Cursos::all();
        if(isset($request->id_curso)){
            $curso = Cursos::find($request->id_curso);
            $disciplinas = Disciplinas::all()->where('id_curso',$request->id_curso);
            foreach ($disciplinas as $key => $item) {
                $videos = Videos::all()->where('id_disciplina',$item->id);
                foreach ($videos as $key => $video) {
                    $video->delete();
                }
                $item->delete();
            }
            $curso->delete();
        }
        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.listacurso')->with(['cursos'=>$cursos]);
    }
    public function addDisciplina(Request $request){

        $cursos = Cursos::all();

        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.adddisciplina')->with(['cursos'=>$cursos]);
    }
    public function editDisciplina(Request $request){
        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.editdisciplina');
    }
    public function listaDisciplina(Request $request){
        $cursos = Cursos::all();
        $disciplinas = Disciplinas::all();
        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.listadisciplina')->with(['cursos'=>$cursos,'disciplinas'=>$disciplinas]);
    }
    public function addVideo(Request $request){

        $disciplinas = Disciplinas::all();

        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.addvideo')->with(['disciplinas'=>$disciplinas,'request'=>$request]);
    }
    public function editVideo(Request $request){
        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.editvideo');
    }
    public function listaVideo(Request $request){
        if($request->ajax())
        {
            $users = new User;
            if($request->q)
            {
                $users = $users->where('name', 'like', '%'.$request->q.'%')->orWhere('email', $request->q);
            }
            $users = $users->paginate(config('stisla.perpage'))->appends(['q' => $request->q]);
            return response()->json($users);
        }
        return view('admin.dashboard.gerenciador.listavideo');
    }
    public function sendCurso(Request $request){



        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $imageName = time().'.'.request()->image->getClientOriginalExtension();



        request()->image->move(public_path('assets/img/educup'), $imageName);


        $nova = new Cursos();
        $nova->id_plano = 1;
        $nova->nome = $request->nome_curso;
        $nova->descricao = $request->descricao_curso;
        $nova->img_url = 'assets/img/educup/'.$imageName;
        $nova->save();

        return back()

            ->with('success','Curso publicado com sucesso')

            ->with('image',$imageName);
        }

        public function deleteCurso(Request $request){
            $curso = Cursos::find($request->id_curso);

            $curso->delete();

            return back()->with('success','Curso deletado com sucesso');
        }

        public function sendDisciplina(Request $request){



            request()->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);



            $imageName = time().'.'.request()->image->getClientOriginalExtension();



            request()->image->move(public_path('assets/img/educup'), $imageName);


            $novad = new Disciplinas();
            $novad->id_curso = $request->id_curso;
            $novad->nome = $request->nome_disciplina;
            $novad->descricao = $request->descricao_disciplina;
            $novad->img_url = 'assets/img/educup/'.$imageName;
            $novad->save();

            return back()

                ->with('success','Curso publicado com sucesso')

                ->with('image',$imageName);
        }

        public function sendVideo(Request $request){
            $ultimo = Videos::all()->where('id_disciplina',$request->id_disciplina)->last();

            $novad = new Videos();
            $novad->id_disciplina = $request->id_disciplina;
            if($ultimo!=null){
                $novad->numero_aula = ($ultimo->numero_aula)+1;
            }else{
                $novad->numero_aula = 1;
            }
            $novad->titulo = $request->nome_video;
            $novad->url_video = $request->id_video;
            $novad->descricao = $request->descricao_video;
            $novad->tags = $request->tags;
            $novad->save();

            return back()

                ->with('success','Curso publicado com sucesso')
                ;
        }
}
