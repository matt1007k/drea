@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card">

                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('/img/drea/logo.png')}} " class="logo" width="100">
                        <h3 class="card-title my-2">Iniciar sesión</h3>
                        <p class="slogan">Ingresa para realizar alguna operación</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <div class="mi-input @error('email') mi-error @enderror">
                                <label for="email" class="mi-input-label">Correo Electrónico</label>
                                <input type="email" id="email" class="form-control" value="{{ old('email') }}"
                                    name="email" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                            <label id="email-error" class="error" for="email">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <div class="mi-input">
                                <label for="password" class="mi-input-label">Contraseña</label>
                                <input type="password" id="password"
                                    class="form-control @error('password') mi-error @enderror"
                                    value="{{ old('password') }}" name="password" required autocomplete="password"
                                    autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>

                        <div class="mx-3 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary waves-effect" dusk="btn-login">
                                Ingresar
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                            @endif
                        </div>

                </div>
                <div class="mx-3 text-center">

                    @if (Route::has('register'))
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Crear una cuenta') }}
                    </a>
                    @endif
                </div>

            </div>

        </div>
    </div>
</div>
@endsection