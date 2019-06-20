@extends('layouts.admin-master')

@section('title')
Planos
@endsection

@section('content')
<section class="section">
        <div class="section-header">
        <h1>Planos</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Início</a></div>
            <div class="breadcrumb-item">Planos</div>
        </div>
        </div>

        <div class="section-body">
            <div class="container">
                <div class="row">
                    @php
                        $contador=1;
                    @endphp
                    @foreach ($planos as $plano)
                        <div class=" @if(count($planos)==1) col-lg-12 col-md-12 @else col-lg-6 col-md-6 @endif ">
                            <div class="pricing pricing-highlight">
                                <div class="pricing-title">
                                    {{ $plano->nome }}
                                </div>
                                <div class="pricing-padding">
                                    <div class="pricing-price">
                                    <div>R${{ number_format($plano->preco, 2, ',', '')  }} </div>
                                    <div>por mês</div>
                                    </div>
                                    <div class="pricing-details">
                                    <div class="pricing-item">
                                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                        <div class="pricing-item-label">{{ $plano->descricao }}</div>
                                    </div>
                                    @php
                                        $contacurso=0;
                                    @endphp
                                    @foreach ($cursos as $curso)
                                        @if ($curso->id_plano == $plano->id)
                                            @php
                                                $contacurso++;
                                            @endphp
                                            <div class="pricing-item">
                                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                                <div class="pricing-item-label">{{ $curso->nome }}</div>
                                            </div>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                                <div class="pricing-cta sticky-bottom" >
                                    <a href="#" id="data{{ $contador }}" onclick="to_next(this.id)">Escolher <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @php
                            $contador++;
                        @endphp
                    @endforeach

                </div>
            </div>
        </div>
</section>
@endsection
