@extends('layouts.plantilla2')

@section('content')

<body id="body_cuerpo">
  <div id="particles-js"></div>
<header class="contenedor header">
  <div class="row mt-5" >
    <div class="col-sm-1">
      <input type="checkbox" name="" value="cuerpo" checked style="display: none" >
    </div>

      <div class="col-sm-3">
        
        <div  id="opcion"></div>
      </div>
      
      <div class="col-sm-2">
        <div  id="sexo" style="color: black">

        </div>
      </div>
      <div class="col"></div>
      <div class="col-sm-5" style="margin-top: 20px">
        <div  role="alert" style="color: black">
          selecciona alguna parte del cuerpo para saber su información
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
    
    <div align="center" class="mt-5" id="humanImg">
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
    </map>
      
   
  </div>
  <div class="col-sm-1"></div>
</div>
    
</header>
<script src="{{ asset('js/particles.min.js') }}"></script>
<script src="{{ asset('js/app_.js') }}"></script>
</body>

@endsection
