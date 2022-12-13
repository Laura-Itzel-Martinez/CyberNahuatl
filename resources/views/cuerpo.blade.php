@extends('layouts.plantilla2')
@section('tituloPagina', 'Cuerpo')

@section('content')

<body id="body_cuerpo">
<header>
  <div class="row mt-2" >
    <div class="col-sm-1">
      <input type="checkbox" name="" value="cuerpo" checked style="display: none" >
      <div class="col-sm-1">
        <div  id="opcion" style="display: none">
        </div>
      </div>
      <div class="col-sm-1">
        <div  id="sexo" style="display: none">
        </div>
    </div>
    </div>
  </div>
  <div class="row" style="text-align: center">
    <div class="col">
      <span><p style="color: black"><h1 class="display-5">Partes del Cuerpo en Nahuatl</h1></p></span>
    </div>
  </div>
  <div class="row" style="margin-top: -20px">
      <div class="col" style="text-align:center">
        <div  role="alert" >
          <h5>SELECCIONA ALGUNA PARTE DEL CUERPO PARA SABER SU INFORMACIÓN</h5>
        </div>
      </div>
  </div>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-5" style="margin-top: 100px">
    <div class="card-header"> <span></span></div>
  </div>
  <div class="col-sm-1"></div>
  <div class="col-sm-3">

    <div align="center" class="mt-3" id="humanImg">
      <!---Imagen---->
    </div>
    <map name="myMap" >
      <area class="area" shape="rect" id="cabeza"  coords="68,10,110,30" href="#"  >
      <area class="area" shape="rect" id="cuello" coords="120,67,60,80" href="#">
      <!--1ra: Localizar en donde estara el cuadro en lo ancho de la img-->
      <!--2da: altura del  cuadro -->
      <!--3ra: Localizar en que parte de ancho localizar -->
      <!--3ra:  Localizar en donde estara el cuadro en la altura de la img-->
      <area class="area" shape="rect" id="abdomen" coords="130,140,55,200" href="#">
      <area class="area" shape="rect" id="ojo" coords="90,40,75,30" href="#">
      <area class="area" shape="rect" id="oreja" coords="75,40,65,30" href="#">
      <area class="area" shape="rect" id="boca" coords="98,59,80,50" href="#">
      <area class="area" shape="rect" id="nariz" coords="93,53,80,45" href="#">
      <area class="area" shape="rect" id="mano" coords="35,253,10,215" href="#">
      <area class="area" shape="rect" id="rodilla" coords="85,340,60,320" href="#">
      <area class="area" shape="rect" id="pie" coords="80,460,45,425" href="#">
    </map>


  </div>
  <div class="col-sm-1"></div>
</div>

</header>

<script src="{{ asset('js/app_.js') }}"></script>
</body>

@endsection
