@extends('layouts.plantilla2')
@section('tituloPagina', 'Cursos Náhuatl')


@section('content')
<br><br>
<main>
    <div class="section-data">
      <h2 class="section-title">Cursos <br> en <br> Nahuatl </h2>
      <p class="section-description">Aprenderas lo basico de la lengua Nahualt gratuitamente
        de una manera diferente. <br><br> Empieza ahora y disfruta con nostros la enseñanza de nuestra lengua materna.
      </p>
    </div>

    <div class="cards-wrapper">
      <div class="card">
        <div class="card--data">
          <h3 class="card--title"> Morfológica o aglutinante</h3>
          <a href="{{ route('morfologica')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>

        </div>
        <div class="card-img-wrapper">

        </div>
        <div class="card-img-deco">
      </div>
      </div>
      <div class="card">
        <div class="card--data">
          <h3 class="card--title"> Honorifico o reverencial</h3>
          <a href="{{ route('honorifico')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">

        </div>
          <div class="card-img-deco deco-2">
        </div>
      </div>
      <div class="card">
        <div class="card--data">
          <h3 class="card--title">Metafórica</h3>
          <a href="{{ route('metaforica')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">

        </div>
        <div class="card-img-deco deco-3">
      </div>
      </div>
      <div class="card">
        <div class="card--data">
          <h3 class="card--title"> Omnipredicativa</h3>
          <a href="{{ route('omnipredicativa')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">


        </div>
        <div class="card-img-deco deco-4">
      </div>
      </div>
      <div class="card">
        <div class="card--data">
          <h3 class="card--title"> Absolutivos (ABS)</h3>
          <a href="{{ route('absolutivos')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">


        </div>
        <div class="card-img-deco deco-5">
      </div>
      </div>
      <div class="card">
        <div class="card--data">
          <h3 class="card--title">Plurales Simples.<h3>
          <a href="{{ route('pluralesSimples')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">


        </div>
        <div class="card-img-deco deco-6">
      </div>
      </div>
      <div class="card">
        <div class="card--data">
          <h3 class="card--title">Marcas de sujeto.</h3>
          <a href="{{ route('marcasSujetos')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">
        </div>
        <div class="card-img-deco deco-7">
         </div>
      </div>

      <div class="card">
        <div class="card--data">
          <h3 class="card--title">Diminutivos.</h3>
          <a href="{{ route('diminutivos')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">
        </div>
        <div class="card-img-deco deco-8">
         </div>
      </div>

      <div class="card">
        <div class="card--data">
          <h3 class="card--title">Reverenciales</h3>
          <a href="{{ route('reverenciales')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">
        </div>
        <div class="card-img-deco deco-9">
         </div>
      </div>

      <div class="card">
        <div class="card--data">
          <h3 class="card--title">Posesivos.</h3>
          <a href="{{ route('posesivos')}}"><button type="button" name="" id="" class="btn" style="background-color:#9F2241; color:white"  ><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i> Empezar</button></a>
        </div>
        <div class="card-img-wrapper">
        </div>
        <div class="card-img-deco deco-10">
         </div>
      </div>

  </main>


@endsection
