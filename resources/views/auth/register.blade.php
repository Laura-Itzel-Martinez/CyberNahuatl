<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@extends('layouts.plantilla')

@section('content')
<div class="fondo_registro">
<div class="wrapper fadeInDown" id="registro">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first mt-4">
            <h3 style="color: yellowgreen">{{ __('Registro de usuario') }} <i class="fas fa-user-edit"></i></h3>
        </div>
        <div class="fadeIn first mt-2">
            <img src="img/usuario_registro.PNG" id="icon" alt="User Icon" />
            <p></p>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>Correo invalido</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password" placeholder="Contraseña">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>Error en la contraseña</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-12">
                        <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Confirma Contraseña">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>




        <!-- Remind Passowrd -->
        <div id="formFooter" >
            <a class="nav-link" href="{{ url('/') }}"><span class=" btn btn-block" style="background-color: #cd0c36; color:white">   Cancelar</span></a>
        </div>

    </div>
</div>
@endsection
