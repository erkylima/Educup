@extends('layouts.admin-master')

@section('title')
Curso
@endsection

@section('content')
<section class="section">
        <div class="section-header">
        <h1></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Início</a></div>
            <div class="breadcrumb-item">Meus Cursos</div>
        </div>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="row">

                    @if (!$disciplinas->isEmpty())
                        @foreach ($disciplinas as $disciplina)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <article class="article">
                                <div class="article-header">
                                    <div class="article-image" data-background="{{ asset($disciplina->img_url) }}">
                                    </div>
                                    <div class="article-title">
                                    <h2><a href="#">{{ $disciplina->nome }}</a></h2>
                                    </div>
                                </div>
                                <div class="article-details">
                                    <p class="truncate">{{ $disciplina->descricao }} </p>
                                    <div class="article-cta">
                                    <form action="{{ route('admin.aula') }}" method="get">
                                        <input type="hidden" name="disciplina" value="{{ $disciplina->id }}">
                                        <input type="hidden" name="aula" value="1">
                                        <button type="submit" class="btn btn-primary">Abrir Curso</button>
                                    </form>
                                    </div>
                                </div>
                                </article>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                <h4>Você não Comprou Nenhum Plano</h4>
                                </div>
                                <div class="card-body">
                                <div class="empty-state" data-height="400" style="height: 400px;">
                                    <div class="empty-state-icon">
                                    <i class="fas fa-question"></i>
                                    </div>
                                    <h2>Nós não encontramos nenhum plano pago</h2>
                                    <p class="lead">
                                    Acesse nossa aba de planos e adquira um agora mesmo.
                                    </p>
                                    <a href="{{ route('admin.planos') }}" class="btn btn-primary mt-4">Comprar um Agora!</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif


                </div>

            </div>
        </div>
</section>
@endsection
