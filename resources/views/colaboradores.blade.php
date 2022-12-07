@extends('layouts.plantilla2')
@section('tituloPagina', 'Colaboradores')

@section('content')

<body class="body_2">

  <div class="row" style="margin-top: 40px">
    <div class="col">
      <p><h2>Colaboradores.</h2></p>
    </div>
  </div>

<div class="grid-8 element-animation">
    <!--card-1-->

    <div class="cards_p color-card">
      <img src="{{asset('img/itma2.webp')}}" alt="profile-pic" class="profile">
      <h4 class="title">TECNM Campus Milpa Alta II </h4>
      <hr>
      <h5 id="texto">
        Directora del Instituto Tecnológico de Milpa Alta II, Tonantzin Ponce Martínez.
      </h5>

    </div>
  </div>

  <!--card-2-->

  <div class="grid- element-animation">
    <div class="cards_p color-card-2">
      <img src="{{asset('img/alcaldia.png')}}" alt="profile-pic" class="profile">
      <h4 class="title-2">Alcaldia de Milpa Alta</h4>
      <hr class="hr-2">
      <h5 id="texto">Alcaldesa de Milpa Alta Judith Vanegas Tapia.</h5>
    </div>
  </div>

</div>

</body>




@endsection
