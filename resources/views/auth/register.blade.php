@extends('layouts.auth')

@section('title', 'Crear una cuenta')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('/img/drea/logo.png')}} " class="logo" width="100">
                        <h3 class="card-title my-2">Crear una cuenta</h3>
                        <p class="slogan">Registrate para realizar alguna operación</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <div class="mi-input @error('name') mi-error @enderror">
                                <label for="name" class="mi-input-label">Nombre de Usuario</label>
                                <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name"
                                    required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                            <label id="name-error" class="error" for="name">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="mi-input @error('email') mi-error @enderror">
                                <label for="email" class="mi-input-label">Correo Electrónico</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                            <label id="email-error" class="error" for="email">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="mi-input @error('password') mi-error @enderror">
                                <label for="password" class="mi-input-label">Contraseña</label>
                                <input type="password" id="password" class="form-control" value="{{ old('password') }}"
                                    name="password" required autocomplete="password" autofocus>
                            </div>
                            @error('password')
                            <label id="password-error" class="error" for="password">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="mi-input @error('password_confirmation') mi-error @enderror">
                                <label for="password_confirmation" class="mi-input-label">Confirmar Contraseña</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control">
                            </div>
                            @error('password_confirmation')
                            <label id="password_confirmation-error" class="error"
                                for="password_confirmation">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="mt-4 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary waves-effect" dusk="btn-register">
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