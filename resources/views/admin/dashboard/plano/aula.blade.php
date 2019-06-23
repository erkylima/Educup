@extends('layouts.admin-master')

@section('title')
Aula
@endsection

@section('content')
<section class="section">
        <div class="section-header">
        <h1>Aulas</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Início</a></div>
            <div class="breadcrumb-item">Aulas</div>
        </div>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="row">
                    @php
                        $descricao="";
                    @endphp
                    @if (count($aulas)>=$aula && $aula>0 )
                        <div class="col-lg-8 col-sm-12">
                            <div class="card">

                                @foreach ($aulas as $key=>$item)
                                    @if($item->numero_aula == $aula)
                                        <div class="card-header">
                                            <h4>{{ $item->titulo }}</h4>
                                            @php
                                                $descricao=$item->descricao;
                                            @endphp
                                        </div>
                                        <div class="card-body">
                                            <div class="chocolat-parent">
                                                <a href="assets/img/example-image.jpg" class="chocolat-image" title="Just an example">
                                                    <div data-crop-image="400px" style="overflow: hidden; position: relative; height: 400px;">
                                                        <iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{ $item->url_video }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <script>
                            $(function () {
                                $('#myList a:last-child').tab('show')
                            })
                        </script>
                        <div class="col-lg-4 col-sm-12 ">
                            <div class="card card-primary">
                                <div class="card-header ui-sortable-handle">
                                    <h4>Todas as Aulas</h4>
                                </div>
                                <div class="card-body">
                                    <div class="lista">
                                        @php
                                            $itensCount=1;
                                        @endphp
                                        @foreach ($aulas as $keylist=>$item)
                                            <div class="list-group" id="myList" role="tablist">
                                                <a class="list-group-item list-group-item-action @if($itensCount == $aula) active @endif" href="{{ route('admin.aula') }}?disciplina={{ $item->id_disciplina }}&aula={{ $itensCount }}" role="tab">
                                                    {{ $itensCount }}ª Aula - {{ $item->titulo }}
                                                </a>
                                            </div>
                                            @php
                                                $itensCount++;
                                            @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-12 ">
                            <div class="card card-primary">
                                    <div class="card-header ui-sortable-handle">
                                        <h4>Descrição</h4>
                                    </div>
                                    <div class="card-body">
                                        {{ $descricao }}
                                    </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h4>Parece que essa aula não existe</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="empty-state" data-height="400" style="height: 400px;">
                                        <div class="empty-state-icon">
                                        <i class="fas fa-question"></i>
                                        </div>
                                        <h2>Nós não encontramos a aula que você procurou</h2>
                                        <p class="lead">
                                        Você será redirecionado em 5 segundos.
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <script>

                            setTimeout(function () {
                                window.location.href = "{{ route('admin.meus-cursos') }}";
                            }, 5000);
                        </script>
                    @endif
                </div>
            </div>
        </div>
</section>
@endsection
