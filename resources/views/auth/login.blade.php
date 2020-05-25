@extends('layouts.app')

@section('content')
<secion id="main" class="wrapper">
    <br><br>
    <div class="container">
        <h2 align="center">Ingreso</h2>
        <div class="card-body" align="center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row uniform 50%">
                    <div class="6u 12u$(xsmall)">
                        <h3>Correo</h3>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                        <h3>Contraseña</h3>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="6u 12u$(xsmall)">
                        <div align="left">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                Recuerdame
                            </label>
                        </div>

                    </div>
                </div>
                <br>
                <div>
                    <div align="center" class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</secion>

@endsection
