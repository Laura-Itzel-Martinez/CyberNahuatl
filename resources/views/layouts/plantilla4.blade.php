<!doctype html>
<html lang="en">
  <head>
    <title>@yield('tituloPagina')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/alcaldia_6.png') }}" type="image/x-icon" style="width: 50px">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('css/navbarSistema.css') }}" rel="stylesheet">
    <link href="{{asset('css/cursos.css') }}" rel="stylesheet">
    <link href="{{asset('librerias/fontawesome/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="librerias/fontawesome/css/all.css">



  </head>
  <body>

    <div id="wrapper" >

      <aside id="sidebar-wrapper" >
        <div class="sidebar-brand">
          <h2 class="text-center">Cursos en Nahualt</h2>
        </div>
        <ul class="sidebar-nav" >
          <li class="">
            <a href="{{ route('morfologica')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Morfológica</a>
          </li>
          <li>
            <a href="{{ route('honorifico')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Honorifico</a>
          </li>
          <li>
            <a href="{{ route('metaforica')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Metaforica</a>
          </li>
          <li>
            <a href="{{ route('omnipredicativa')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Omnipredicativa</a>
          </li>
          <li>
            <a href="{{ route('absolutivos')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Absolutivos (ABS)</a>
          </li>
          <li>
            <a href="{{ route('pluralesSimples')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Plurales Simples.<a>
          </li>
          <li>
            <a href="{{ route('marcasSujetos')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Marcas de sujeto.<a>
          </li>
          <li>
            <a href="{{ route('diminutivos')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Diminutivos.<a>
          </li>
          <li>
            <a href="{{ route('reverenciales')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Reverenciales.<a>
          </li>
          <li>
            <a href="{{ route('posesivos')}}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Posesivos.<a>
          </li>

          <li>
            <a href="{{ route('cursos')}}"><i class="fa fa-times" style="color:crimson" aria-hidden="true"></i>Salir<a>
          </li>
        </ul>
      </aside>

      <div id="navbar-wrapper" style="position: fixed" >
        <nav class="navbar navbar-inverse" >
          <div class="container-fluid" >
            <div class="navbar-header" >
              <div class="row" id="barra" id="navbar-menu">
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
    <div class="card-footer text-center"  >
      © 2022 - CyberNahuatl
    </div>


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


  </body>
</html>
