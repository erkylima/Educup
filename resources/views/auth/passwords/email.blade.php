@extends('layouts.auth-master')

@section('content')
<div class="card card-primary">
  <div class="card-header"><h4>Resetar Senha</h4></div>

  <div class="card-body">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
        <div class="invalid-feedback">
          {{ $errors->first('email') }}
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
            Enviar Link de Reset
        </button>
      </div>
    </form>
  </div>
</div>
<div class="mt-5 text-muted text-center">
    Recuperou suas informações de login? <a href="{{ route('login') }}">Entrar</a>
</div>
@endsection
