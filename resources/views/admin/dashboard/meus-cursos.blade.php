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
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                            <h4>Meus Cursos</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary">Ver Todos</a>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="chocolat-parent">
                                <a href="assets/img/example-image.jpg" class="chocolat-image" title="Just an example">
                                <div data-crop-image="400px" style="overflow: hidden; position: relative; height: 400px;">
                                        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/LHqXYqbGH2s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                            <div class="card chat-box card-success" id="mychatbox2">
                                <div class="card-header">
                                    <h4><i class="fas fa-circle text-success mr-2" title="" data-toggle="tooltip" data-original-title="Online"></i> Comentários</h4>
                                </div>
                                <div class="card-body chat-content" style="overflow: hidden; outline: currentcolor none medium;" tabindex="3">
                                <div class="chat-item chat-left" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">É hora de acordar!</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">Ok</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-left" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">Isso é incrível. Como não pensei nisso antes?</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">O que isso significa?</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-left" style=""><img src="../dist/img/avatar/avatar-5.png"><div class="chat-details"><div class="chat-text">Você precisa esconder todas as batatas fritas</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">COMO?!</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-left" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">Não! Não é pra comer! É pra esconder</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">-__________________-</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-left" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">Tem alguém aí?</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">Tenho uma dúvida!</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text">Ótima Vídeo Aula!</div><div class="chat-time">05:31</div></div></div><div class="chat-item chat-right" style=""><img src="{{ Auth::user()->avatarlink }}"><div class="chat-details"><div class="chat-text"><i>Vocês são incrivéis! Parabéns pelo trabalho!</i></div><div class="chat-time">05:31</div></div></div></div>
                                <div class="card-footer chat-form">
                                    <form id="chat-form2">
                                    <input type="text" class="form-control" placeholder="Digite um comentário">
                                    <button class="btn btn-primary">
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
