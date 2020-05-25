@extends('layouts.app')

@section('content')
<div class="container">
    <br>
         <h2 class="align-center">Registro</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row uniform 50%">
                <div class="12u$">
                    <h4 class="align-left">Nombre</h4>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="12u$">
                    <h4>Correo Electronico</h4>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="12u$">
                    <h4>Contraseña</h4>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <h4>Confirme Constraseña</h4>
                <div class="12u$">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <br>
            <div class="align-center">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Registrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
