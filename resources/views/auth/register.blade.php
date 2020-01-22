@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-signup z-depth-1">

                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('/img/drea/logo.png')}} " class="logo" width="100">
                        <h3 class="card-title my-2">Crear una cuenta</h3>
                        <p class="slogan">Registrate para realizar alguna operación</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="md-form md-outline">
                            <label for="name" class="">Nombre de Usuario</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

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

                        <div class="md-form md-outline">
                            <label for="password_confirmation">Confirmar Contraseña</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="card-footer justify-content-between">
                            <button type="submit" class="btn btn-primary btn-rounded" dusk="btn-register">
                                Registrarse
                            </button>
                            @if (Route::has('login'))
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Ya tengo una cuenta') }}
                            </a>
                            @endif
                        </div>

                </div>

            </div>

        </div>

    </div>
</div>
@endsection