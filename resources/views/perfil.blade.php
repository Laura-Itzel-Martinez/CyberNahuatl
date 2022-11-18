@extends('layouts.plantilla2')

@section('content')

<br><br>
<header class="cabezera ">
  <div class="perfil">
    <img class="perfil-foto" src="{{asset('img/nopal.jpg')}}"/>
  </div>


  <div class="titulo">
   <h3>Nombre: {{ Auth::user()->nombre }}  </h3>
    <h3>Correo electronico:  {{ Auth::user()->email }} </h3>
  </div>


  <div class="col"></div>
  <div class="tema">
    <button class="btnPerfil" onclick="mudaTema()">Alterar Tema</button>
  </div>
</header>


<main class="jumpotron">
  <ul class="jumpotron-titulo">Calificaciones de los cursos en Nahualt:</ul>

</main>
</div>
@endsection
