@extends('layouts.admin-master')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Lista de Cursos</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.inicio') }}">Início</a></div>
                <div class="breadcrumb-item">Lista de Cursos</div>
            </div>
    </div>
    <div class="section-body">
        <div class="container">
                @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                </div>
                <!--img src="{{ asset('assets/img/educup') }}/{{ Session::get('image') }}"-->

                @endif



                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Ops!</strong> Tivemos problemas ao enviar o formulário.

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if (!$cursos->isEmpty())


                        <div class="card-header">
                            <h4>Todas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Ação</th>
                                </tr>
                                @foreach ($cursos as $key=>$itemd)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $itemd->nome }}</td>
                                        <td>
                                            <a href="#" class="btn btn-info">Editar</a>
                                            <a href="{{ route('admin.deletecurso',['id_curso'=>$itemd->id]) }}" class="btn btn-danger">Apagar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                        @else
                            <div class="card-header">
                                <h4>Nenhum curso foi cadastrado</h4>
                            </div>
                            <div class="card-body">
                                <div class="empty-state" data-height="400" style="height: 400px;">
                                    <a href="{{ route('admin.addcurso') }}">
                                        <div class="empty-state-icon bg-success">
                                            <i class="fas fa-plus-circle"></i>
                                        </div>
                                    </a>
                                    <h2>Adicione um agora mesmo!</h2>

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
