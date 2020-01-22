@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-3">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card card-signup z-depth-1">

                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('/img/drea/logo.png')}} " class="logo" width="100">
                        <h3 class="card-title my-2">Iniciar sesión</h3>
                        <p class="slogan">Ingresa para realizar alguna operación</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="md-form md-outline">
                            <label for="email" class="">Correo Electrónico</label>
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="md-form md-outline">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password"
                                class="form-control @error('password') is-invalid @enderror"
                                value="{{ old('password') }}" name="password" required autocomplete="password"
                                autofocus>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>

                        <div class="card-footer justify-content-between">
                            <button type="submit" class="btn btn-primary btn-rounded" dusk="btn-login">
                                Ingresar
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                            @endif
                        </div>

                </div>
                <div class="card-footer text-center">

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