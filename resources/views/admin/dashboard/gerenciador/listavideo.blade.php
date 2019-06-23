@extends('layouts.admin-master')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Lista de Vídeos</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.inicio') }}">Início</a></div>
                <div class="breadcrumb-item">Lista de Vídeos</div>
            </div>
    </div>
    <div class="section-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if (!$videos->isEmpty())
                            <div class="card-header">
                                <h4>Todas</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Disciplina</th>
                                    <th>Ação</th>
                                    </tr>
                                    @foreach ($videos as $key=>$itemd)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $itemd->titulo }}</td>
                                            @foreach ($disciplinas as $itemc)
                                                @if ($itemd->id_disciplina == $itemc->id)
                                                    <td>{{ $itemc->nome }}</td>
                                                @endif
                                            @endforeach
                                            <td>
                                                <a href="{{ route('admin.editvideo',['id'=>$itemd->id]) }}" class="btn btn-info">Editar Video</a>
                                                <a href="{{ route('admin.deletevideo',['id_disciplina'=>$request->id_disciplina,'id_video'=>$itemd->id]) }}" class="btn btn-secondary">Apagar Vídeo</a>
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
                                    <a href="{{ route('admin.addvideo',['id_disciplina'=>$request->id_disciplina]) }}">
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
