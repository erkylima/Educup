@extends('layouts.auth-master')

@section('content')
<div class="card card-primary">
  <div class="card-header"><h4>Cadastrar</h4></div>

  <div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <label for="name">Nome</label>
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" placeholder="Digite seu nome" value="{{ old('name') }}" autofocus>
          <div class="invalid-feedback">
            {{ $errors->first('name') }}
          </div>
        </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Digite seu email" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Senha</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" placeholder="Defina uma senha" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
      </div>

      <div class="form-group">
        <label for="password_confirmation" class="control-label">Confirmar Senha</label>
        <input id="password_confirmation" type="password" placeholder="Confirme a senha" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}" name="password_confirmation" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password_confirmation') }}
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
          Registrar
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
    Já tem uma conta? <a href="{{ route('login') }}">Entrar</a>
</div>
@endsection
