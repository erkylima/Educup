@extends('layouts.admin-master')

@section('title')
Criar Usuário
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Adicionar</h1>
    </div>
    <div class="section-body">
        <adduser-component></adduser-component>
    </div>
</section>
@endsection
