@extends('layouts.admin-master')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Adicionar Vídeo</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="">Início</a></div>
                <div class="breadcrumb-item">Adicionar Vídeo</div>
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
                    @if (isset($request->id_disciplina))
                    <div class="card">
                        <div class="card-header">
                            <h4>Escreva sobre o Video</h4>
                        </div>
                        <div class="card-body">
                            <form id="uploadImage" action="{{ route('admin.sendvideo',['id_disciplina'=>$request->id_disciplina]) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @csrf
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" maxlength="70" id="nome_video"  name="nome_video" class="form-control">
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" maxlength="255" name="descricao_video" id="descricao_video">
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">ID do Vídeo do YouTube</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" maxlength="255" name="id_video" id="id_video">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="tags" id="tags" class="form-control inputtags">
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/mastercard.png') }}" style="display:none;" id="logo" srcset="">
                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
                                    <input type="submit" id="uploadSubmit" class="btn btn-primary" value="Publicar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="card">
                        <div class="card-header">
                            <h4>Você está acessando pelo local errado</h4>
                        </div>
                        <div class="card-body">
                            <div class="empty-state" data-height="400" style="height: 400px;">
                                <a href="{{ route('admin.listadisciplina') }}">
                                    <div class="empty-state-icon bg-danger">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </a>
                                <h2>Retorne à página anterior!</h2>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

<script>

    $(document).ready(function(){

        $('#uploadImage').submit(function(event){

            $('#logo').show();
            $(this).ajaxSubmit({
                target: '#logo',
                success: function(){
                    $('#logo').hide();
                }
            });
            return false;
        });
    });
</script>


@endsection
