@extends('layouts.admin-master')

@section('content')
<section class="section">
        <div class="section-header">
            <h1>Lista de Disciplinas</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.inicio') }}">Início</a></div>
                <div class="breadcrumb-item">Lista de Disciplinas</div>
            </div>
    </div>
    <div class="section-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Todas</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Curso</th>
                                <th>Ação</th>
                                </tr>
                                @foreach ($disciplinas as $key=>$itemd)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $itemd->nome }}</td>
                                        @foreach ($cursos as $itemc)
                                            @if ($itemd->id_curso == $itemc->id)
                                                <td>{{ $itemc->nome }}</td>
                                            @endif
                                        @endforeach
                                        <td>
                                            <a href="{{ route('admin.addvideo',['id_disciplina'=>$itemd->id]) }}" class="btn btn-success">Add Video</a>
                                            <a href="#" class="btn btn-secondary">Apagar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
