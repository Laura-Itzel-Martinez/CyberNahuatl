@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Morfologica')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="margin-top:30px">


            <h2>Morfológica o
                aglutinante.

                <a class="btn" style="float: right; color:#10312B"  href="{{ route('honorifico')}}"> Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                <a class="btn" style="float: right; color:#691C32 " href="{{ route('cursos')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Salir</a>


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

            <h5><strong style="color: green">Raíz Nominal (R.N): </strong>Es el
                morfema que se mantiene
                invariable generalmente y porta el
                significado básico de la palabra
                (nominal).</h5>

                <br>
                <br>
                <h5><strong style="color: black">Aglutinante: </strong>Conseguir que
                    distintos elementos queden unidos
                    entre sí. </h5>

                <br>
                <br>
                <h5><strong style="color: red">Absolutivos (ABS): </strong> Son morfemas,
                    sufijos que acompañan a los
                    sustantivos. No tienen significado,
                    pero si tienen función. Indican que
                    la palabra es un sustantivo y está
                    en singular. (tl, tle, le, in).</h5>

        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-5">

            <h4><u>Ejemplos:</u></h4>

            <h5>• Kalle = casa</h5>

            <h5><strong style="color: green">Kal</strong><strong style="color: black">=</strong>
                <strong style="color: green">RN</strong>,<strong style="color: red">le</strong><strong style="color: black">=</strong>
                <strong style="color: red">ABS</strong>
            </h5>

            <br>

            <h5>• Atl = agua</h5>

            <h5><strong style="color: green">A</strong><strong style="color: black">=</strong>
                <strong style="color: green">RN</strong>,<strong style="color: red">tl</strong><strong style="color: black">=</strong>
                <strong style="color: red">ABS</strong>
            </h5>

            <br>

            <h5>• Nakatl = carne</h5>

            <h5><strong style="color: green">Naka</strong><strong style="color: black">=</strong>
                <strong style="color: green">RN</strong>,<strong style="color: red">tl</strong><strong style="color: black">=</strong>
                <strong style="color: red">ABS</strong>
            </h5>

            <br>

            <h5>• Pitsotl = cerdo</h5>

            <h5><strong style="color: green">Pitso</strong><strong style="color: black">=</strong>
                <strong style="color: green">RN</strong>,<strong style="color: red">tl</strong><strong style="color: black">=</strong>
                <strong style="color: red">ABS</strong>
            </h5>

            <br>

            <h5>• Pitsonakatl = carne de cerdo</h5>

            <h5><strong style="color: green">Pitsonaka</strong><strong style="color: black">=</strong>
                <strong style="color: green">RN</strong>,<strong style="color: red">tl</strong><strong style="color: black">=</strong>
                <strong style="color: red">ABS</strong>
            </h5>
        </div>
    </div>
</div>
@endsection
