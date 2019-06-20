@extends('layouts.admin-master')

@section('title')
Meus Cursos
@endsection

@section('content')
<section class="section">
        <div class="section-header">
        <h1>Meus Cursos</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Início</a></div>
            <div class="breadcrumb-item">Meus Cursos</div>
        </div>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="row">

                    @if (!$planos->isEmpty())
                        @foreach ($cursos as $curso)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <article class="article">
                                <div class="article-header">
                                    <div class="article-image" data-background="{{ asset($curso->img_url) }}" style="background-image: url(&quot;assets/img/news/img08.jpg&quot;);">
                                    </div>
                                    <div class="article-title">
                                    <h2><a href="#">{{ $curso->nome }}</a></h2>
                                    </div>
                                </div>
                                <div class="article-details">
                                    <p class="truncate">{{ $curso->descricao }} </p>
                                    <div class="article-cta">
                                    <form action="{{ route('admin.curso') }}" method="get">
                                        <input type="hidden" name="id_curso" value="{{ $curso->id }}">
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
                                    Acesse nosso menu de planos e adquira um agora mesmo.
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
