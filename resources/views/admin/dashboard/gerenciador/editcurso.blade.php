@extends('layouts.admin-master')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Editar Curso</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="">Início</a></div>
                <div class="breadcrumb-item">Editar Curso</div>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Escreva sobre o Curso</h4>
                        </div>
                        <div class="card-body">
                            <form id="uploadImage" action="{{ route('admin.editadocurso') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @csrf

                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" maxlength="70" id="nome_curso"  name="nome_curso" class="form-control" value="{{ $curso->nome }}">
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" maxlength="255" name="descricao_curso" id="descricao_curso" value="{{ $curso->descricao }}">
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Imagem Destacada</label>
                                <div class="col-sm-12 col-md-7">
                                    <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Escolha o arquivo</label>
                                    <input type="file" name="image" id="image-upload" accept=".jpg, .png"/>
                                    </div>
                                </div>
                                </div>
                                <img src="{{ asset('assets/img/logo.png') }}" style="display:none;" id="logo" srcset="">
                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                        <input type="hidden" name="id_curso" id="id_curso" value="{{ $curso->id }}">
                                        <input type="submit" id="uploadSubmit" class="btn btn-primary" value="Publicar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection