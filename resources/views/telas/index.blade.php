@extends('layouts.tela-master')

@section('conteudo')
    <div class="container ">
        <div class="row mb-5">
            <div class="col">
                <a href="{{ url('register') }}">
                    <img src="{{ asset('assets/img/ser-aluno.png') }}" class="img-fluid w-75" alt="">
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img src="{{ asset('assets/img/livro.png') }}" class="img-fluid w-75" alt="">
                </a>
            </div>
            <div class="col">
                <a href="{{ url('login') }}">
                    <img src="{{ asset('assets/img/sou-aluno.png') }}" class="img-fluid w-75" alt="">
                </a>
            </div>
        </div>

    </div>

@endsection
