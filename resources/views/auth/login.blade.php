@extends('layouts.auth')

@section('title', 'Iniciar sesión')

@section('content')

<div class="z-20 bg-white shadow-lg rounded-lg h-auto flex flex-col md:flex-row overflow-hidden w-full sm:w-4/5 lg:w-4/5  xl:w-2/3">
    <div class="p-10 w-full sm:w-1/2">

        <h3 class="font-impact font-bold text-4xl text-center uppercase mt-8">Iniciar sesión</h3>
        <p class="text-gray-700 text-lg mb-4">Ingresa tus datos para continuar</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                    name="email" required autocomplete="email" autofocus>
                @error('email')
                <div class="text-red-500 font-medium text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password"
                    class="form-control @error('password') is-invalid @enderror"
                    value="{{ old('password') }}" name="password" required autocomplete="password"
                    autofocus>
                @error('password')
                <div class="text-red-500"> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input  type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-label" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>
            </div>

            <div class="my-3 flex flex-col justify-center">
                <button type="submit" class="btn btn-primary w-full" dusk="btn-login">
                    Ingresar
                </button>
                @if (Route::has('password.request'))
                <a class="text-blue-700 text-sm font-medium text-center w-full mt-3" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
    <div class="bg-blue-700 w-full sm:w-1/2 relative shadow-inner">
        <div class="p-10">
            <h3 class="heading-1 text-white uppercase w-3/4">No tengo una cuenta</h3>
            <p class="mt-4 text-teal-200 font-medium text-xl">Si no tienes una cuenta, puedes registrarte para realizar operaciones en la aplicación.</p>
            <p class="font-impact font-bold uppercase text-6xl text-teal-200 opacity-25 absolute max-w-2/3 leading-16 mt-4">Crear una cuenta</p>
        </div>
        @if (Route::has('register'))
        <div class="mt-6 w-48 flex justify-center absolute bottom-0 right-0">
            <a class="w-full bg-black p-4 rounded-tl-lg font-medium text-white text-center  transition ease-in duration-500 hover:bg-white hover:text-black flex items-center" href="{{ route('register') }}">
                {{ __('Registrate aquí') }}
                <i class="eva eva-arrow-forward-outline ml-2 hover:ml-4"></i>
            </a>
        </div>
        @endif
    </div>

</div>
@endsection