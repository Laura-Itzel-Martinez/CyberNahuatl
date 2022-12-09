<!doctype html>
<html lang="en">
  <head>
    <title>@yield('tituloPagina')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/logoCyber.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="librerias/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <link href="{{asset('css/curso.css') }}" rel="stylesheet">
    <link href="{{asset('css/carrucelAlfabeto.css') }}" rel="stylesheet">
    <link href="{{asset('css/perfil.css') }}" rel="stylesheet">
    <link href="{{asset('css/colaboradores.css') }}" rel="stylesheet">
    <link href="{{asset('css/numeracion.css') }}" rel="stylesheet">
    <link href="{{asset('css/cuerpo.css') }}" rel="stylesheet">
    <link href="{{asset('css/alfabeto.css') }}" rel="stylesheet">
    <link href="{{asset('css/animales.css') }}" rel="stylesheet">
    <link href="{{asset('css/colores.css') }}" rel="stylesheet">
    <link href="{{asset('css/meses.css') }}" rel="stylesheet">
    <link href="{{asset('css/navbarSistema.css') }}" rel="stylesheet">
    <link href="{{asset('librerias/fontawesome/css/all.css') }}" rel="stylesheet">

    <script src="{{ asset('js/ruleta_js/Winwheel.min.js') }}"></script>
    <script src="{{ asset('js/ruleta_js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/ruleta_js/jQuery-2.1.4.min.js') }}"></script>


  </head>
  <body>

    <div id="wrapper" >

      <aside id="sidebar-wrapper" >
        <div class="sidebar-brand">
          <h2>CyberNahualt</h2><br>
          <h2> <a href="{{ route('home')}}" id="op"><i aria-hidden="true"><img src="{{asset('img/alcaldia_6.png') }}" id="img_alcaldia" alt="" loading="lazy"
            style="text-align: center"></i></a></h2>
        </div>

        <ul class="sidebar-nav mt-4" >
            <br><br><br><br>
          <li>
            <a href="{{ route('alfabeto')}}" id="op"><i class="fa fa-font" aria-hidden="true"></i>Alfabeto</a>
          </li>
          <br>
          <li>
            <a href="{{ route('numeracion')}}" id="op"><i class="fa fa-list-ol" aria-hidden="true"></i>Numeraciòn</a>
          </li>
          <br>
          <li>
            <a href="{{ route('cuerpo')}}" id="op"><i class="fa fa-universal-access" aria-hidden="true"></i>Cuerpo</a>
          </li>
          <br>
          <li>
            <a href="{{ route('animales')}}" id="op"><i class="fa fa-bug" aria-hidden="true"></i>Animales</a>

          </li>
          <br>
          <li>
            <a href="{{ route('colores')}}" id="op"><i class="fa fa-th-large" aria-hidden="true"></i>Colores</a>
          </li>
          <br>
          <li>
            <a href="{{ route('meses')}}" id="op"><i class="fa fa-calendar-minus" aria-hidden="true"></i>Meses</a>
          </li>
        </ul>
      </aside>

      <div id="navbar-wrapper" style="position: fixed">
        <nav class="navbar navbar-inverse" >
          <div class="container-fluid" >
            <div class="navbar-header" >
              <div class="row" id="barra" id="navbar-menu">
                <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>

                <a href="{{ route('home')}}"><i class="fa fa-home"></i> Home</a>
                <div class="col-sm-1"></div>
                <a href="{{ route('cursos')}}"><i class="fa fa-outdent"></i> Cursos</a>
                <div class="col-sm-1"></div>
                <a href="{{ route('diccionario')}}"><i class="fa fa-search"></i> Diccionario</a>
                <div class="col-sm-1"></div>
                <a href="{{ route('colaboradores')}}"><i class="fa fa-users" aria-hidden="true"></i> Colaboradores</a>




                <div class="col" id="salir">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->nombre }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                        <a class="dropdown-item" style="color: black">Correo: {{ Auth::user()->email}}</a>

                      <a class="dropdown-item" href="{{url('/logout')}}" style="color: black">Cerrar sesión</a>
                    </div>

                </div>


            </div>
          </div>
        </nav>
      </div>

      <section id="content-wrapper">
          <div class="row">
            <div class="col-lg-12">
              @yield('content')
            </div>
          </div>
      </section>


    </div>
  <!--/.container-->





  <!--/.container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://rawcdn.githack.com/bramus/scroll-timeline/b59ed75508d7341f97dc25eccf20ab66231c815a/dist/scroll-timeline.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{ asset('js/navbarSistema.js') }}"></script>
    <script src="{{ asset('js/carrucelAlfabeto.js') }}"></script>
    <script src="{{ asset('js/perfil.js') }}"></script>
    <script src="{{ asset('js/numeracion.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/jquery.maphilight.min.js"></script>
   <script src="{{ asset('js/cuerpo.js') }}"></script>
   <script src="{{ asset('js/ruleta_js/bootstrap.js') }}"></script>

  </body>
</html>
