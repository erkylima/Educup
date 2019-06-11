@extends('layouts.auth-master')

@section('content')
<div class="card card-primary">
  <div class="card-header"><h4>Entrar</h4></div>

  <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email registrado" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
        @if(App::environment('demo'))
        <small id="emailHelpBlock" class="form-text text-muted">
            Email Demo: usuario@exemplo.com
        </small>
        @endif
      </div>

      <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">Senha</label>
          <div class="float-right">
            <a href="{{ route('password.request') }}" class="text-small">
                Esqueceu a senha?
            </a>
          </div>
        </div>
        <input aria-describedby="passwordHelpBlock" id="password" type="password" placeholder="Senha da sua conta" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2">
        <div class="invalid-feedback">
          {{ $errors->first('password') }}
        </div>
        @if(App::environment('demo'))
        <small id="passwordHelpBlock" class="form-text text-muted">
            Senha Demo: 1234
        </small>
        @endif
      </div>

      <div class="form-group">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember"{{ old('remember') ? ' checked': '' }}>
          <label class="custom-control-label" for="remember">Lembrar de mim</label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
            Logar
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
    Não tem uma conta? <a href="{{ route('register') }}">Crie Uma</a>
</div>
@endsection
