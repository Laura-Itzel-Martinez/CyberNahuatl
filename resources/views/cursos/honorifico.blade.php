@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Honorifico')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="margin-top:30px">

            <h2 >Honorifico o
                reverencial.

                <a class="btn" style="float: right; color:#691C32 " href="{{ route('metaforica')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                <a class="btn" style="float: right; color:#10312B"  href="{{ route('morfologica')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

            </h2>

        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6">

            <h4 class="card-title"><u>Definicion: </u></h4>
            <br>
            <br>

            <h5 class="card-text"><strong style="color: blue">Tsin: </strong>Esto hace que se hable de
                forma honorifica (con respeto).</h5>


        </div>
        <div class="col-sm-6">

            <h4 class="card-title"><u>Ejemplos:</u></h4>

            <h5 class="card-text">• <strong style="color: green">Ichpoka</strong><strong style="color: red">tl</strong>
                <strong style="color: black">= La señorita/ la joven.</strong>
            </h5>
            <br>
            <h5 class="card-text"><strong style="color: green">Ichpoka</strong><strong style="color: blue">tsin</strong>
                <strong> = La venerable señorita / la venerable joven.</strong>
            </h5>

            <br>

            <h5 class="card-text">
                • <strong style="color: green">Chiche</strong><strong style="color: black"> = El perro</strong>
            </h5>
            <br>
            <h5 class="card-text"><strong style="color: green">Chichi</strong><strong style="color: blue">tsin</strong>
                <strong> = Venerable perro
                    / venerable perrito.</strong>
            </h5>
            <br><br><br><br><br><br><br>

    </div>
</div>
@endsection
