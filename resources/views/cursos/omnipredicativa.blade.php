@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Omnipredicativa.')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="margin-top:30px">


            <h2>Omnipredicativa.

                <a class="btn" style="float: right; color:#691C32 " href="{{ route('absolutivos')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                <a class="btn" style="float: right; color:#10312B"  href="{{ route('metaforica')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

            </h2>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-5">

            <h4><u>Definiciones: </u></h4>
            <br>
            <br>

            <h5>Toda palabra en náhuatl
                funciona como predicado.</h5>

            <br>
            <h5>- El náhuatl es descriptivo y
                contextual.
            </h5>
            <br>
            <h5>- No es abstracto (paz,
                libertad).

            </h5>
            <br>
            <h5>- No existen hiperónimos
                (abrigo, mueble, árbol, etc.).
            </h5>

        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">

            <h4><u>Ejemplos:</u></h4>
            <br>
            <br>
            <h5> <strong style="color: green">Sowa</strong><strong style="color: red">tl</strong>
                <strong style="color: black">= es mujer.</strong>
            </h5>
            <br>
            <h5><strong style="color: green">Tlaka</strong><strong style="color: red">tl</strong>
                <strong> = es persona / es señor.</strong>
            </h5>

            <br>

            <h5>
                <strong style="color: green">Chiche</strong><strong style="color: black"> = es perro</strong>
            </h5>
            <br>
            <h5><strong style="color: green">Telpola</strong><strong style="color: red">tl</strong>
                <strong> = es joven.</strong>
            </h5>

    </div>
</div>
<br><br><br><br>
@endsection
