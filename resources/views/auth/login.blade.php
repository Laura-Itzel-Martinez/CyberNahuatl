<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@extends('layouts.plantilla')
  
@section('content')
        <div class="fondo_login">
        <div class="wrapper fadeInDown" id="Login">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first mt-2">
                    <img src="img/usuario_icono.PNG" id="icon" alt="User Icon" />
                    <p></p>
                    <h2 style="color: black; text-align: center;font-size: 12px;font-weight: 600;text-transform: uppercase;
                    display:inline-block; margin: 10px 8px 10px 8px; ">
                        "Si no cuentas con un usuario registrate por favor"
                    </h2>
                </div>

                <!-- Login Form -->
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Correo o contraseña invalido</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col ml-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Confirmar') }}
                                </button>
                            </div>
                            <!---<div class="col-sm-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>-->
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
