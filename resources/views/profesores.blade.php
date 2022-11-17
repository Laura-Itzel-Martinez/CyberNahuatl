@extends('layouts.plantilla2')

@section('content')

<body class="body_2">
  
  <div class="row" style="margin-top: 40px">
    <div class="col">
      <p><h2>Profesores de la lengua Nahuatl</h2></p>
    </div>
  </div>

<div class="grid-8 element-animation">
    <!--card-1-->

    <div class="cards_p color-card">
      <img src="{{asset('img/profe_osvaldo.jpg')}}" alt="profile-pic" class="profile">
      <h1 class="title">Profesor Oswaldo Galicia Calderón </h1>
      <p class="job-title">Hablante de la lengua Nahuatl</p>
      
      <hr>
      <h5 id="texto">
        Originario de la comunidad de Santa Ana Tlacotenco, nahuablante, aprendio la lengua náhuatl desde niño
        a lado de sus padres, abuelos yen la comunidad.

        Tiene ormación como profesor de lengua náhuatl (variante masewalkopa) y, forma parte de un proyecto 
        comunitariode fortalecimiento , difusión y enseñanza de la lengua náhuatl variante de Santa Ana Tlacontenco, Milpa Alta.
      </h5>
      
    </div>
  </div>

  <!--card-2-->

  <div class="grid- element-animation">
    <div class="cards_p color-card-2">
      <img src="{{asset('img/profe_jose.jpg')}}" alt="profile-pic" class="profile">
      <h1 class="title-2">Profesor José Ortiz Rivera </h1>
      <p class="job-title"> Hablante de la lengua Nahuatl</p>

      <hr class="hr-2">
      <h5 id="texto">Revitalizador de la lengua náhuatl desde el arte y la cultura, es originario de Santa Ana Tlacotenco,
      Milpa Alta y ahí, en su comunidad, ha impulsado que siga viva la lengua nahuatl, por medio del canto, la pintura y 
      la escultura. Además, defiende la idea de mantener vivas las lenguas aprendiendo de los y las abuelas.
      Conoce el reciente proyecto de José Ortiz, Casa de Cultura “Kaltlamahchichihke”, donde se alberga la obra de varios autores 
      con la cosmovisión del pueblo de Santa Ana Tlacotenco, ubicada en Guadalupe y Ramírez 69, Santa Ana Tlacontenco, Milpa Alta .</h5>
    </div>
  </div>
</div>

</body>



  
@endsection