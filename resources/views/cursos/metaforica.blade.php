@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Metaforica')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="margin-top:30px">

            <h2>Metaforica.

                <a class="btn" style="float: right; color:#691C32 " href="{{ route('omnipredicativa')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                <a class="btn" style="float: right; color:#10312B"  href="{{ route('honorifico')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

            </h2>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">

        <div class="col-sm-6">

            <h4><u>Definicion: </u></h4>
            <br>


            <h5>La metáfora es una
                modificación semántica, es
                decir un cambio en el
                significado</h5>

        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6">

                <h4><u>Ejemplos:</u></h4>

                <h5><strong style="color: black">- </strong> <strong style="color: green">Nekw</strong><strong style="color: red">tle</strong>
                    <strong style="color: black">= Es pulque.</strong>
                </h5>
                <br>
                <h5>
                    Ichichiwalayutsintotlalnantsin.
                </h5>
                <br>
                <h5>
                    <strong style="color: orange">I</strong><strong style="color: black"> = marca de posesivo.</strong>
                </h5>
                <br>
                <h5>
                    <strong style="color: green">Chichiwalle</strong><strong style="color: black"> = seno materno.</strong>
                </h5>
                <br>
                <h5>
                    <strong style="color: green">Ayu</strong><strong style="color: red">tl</strong><strong style="color: black"> = Jugo.</strong>
                </h5>
                <br>
                <h5>
                    <strong style="color: blue">Tsin</strong><strong style="color: black"> = reverencial.</strong>
                </h5>
                <br>
                <h5>
                    <strong style="color: black">To = marca de posesivo 1ra. del plural.</strong>
                </h5>
                <br>
                <h5>
                    <strong style="color: green">Tlal</strong><strong style="color: black"> = raiz nominal de</strong>
                    <strong style="color: green">tla</strong><strong style="color: red">le</strong>
                </h5>
                <br>
                <h5>
                    <strong style="color: green">Nan</strong><strong style="color: black"> = raiz nominal de</strong>
                    <strong style="color: green">nan</strong><strong style="color: red">tle</strong>
                </h5>

            </div>
        <div class="col-sm-6">


            <h5><strong style="color: black">- </strong> <strong style="color: green">Tlao</strong><strong style="color: red">lle</strong>
                <strong style="color: black">= maiz.</strong>
            </h5>
            <br>
            <h5>
                <strong style="color: green">Tonacayo</strong><strong style="color: black"> = nuestra carne</strong>

            </h5>
            <br>
            <h5>
                <strong style="color: black">Naka = raíz nominal del náhuatl.</strong>

            </h5>
            <br>
            <h5>
                <strong style="color: black">Yo = derivador de abundancia.</strong>

            </h5>

    </div>
</div>
@endsection
