@extends('layouts.admin-master')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Adicionar Disciplina</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="">Início</a></div>
                <div class="breadcrumb-item">Adicionar Disciplina</div>
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
                            <h4>Escreva sobre a Disciplina</h4>
                        </div>
                        <div class="card-body">
                            <form id="uploadImage" action="{{ route('admin.senddisciplina') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Selecione o Curso</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="id_curso" class="form-control selectric">
                                                @foreach ($cursos as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nome</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" maxlength="70" id="nome_disciplina"  name="nome_disciplina" class="form-control">
                                </div>
                                </div>
                                <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Descrição</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" maxlength="255" name="descricao_disciplina" id="descricao_disciplina">
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
                                <img src="{{ asset('assets/img/mastercard.png') }}" style="display:none;" id="logo" srcset="">
                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7">
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
