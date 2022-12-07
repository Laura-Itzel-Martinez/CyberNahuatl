@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Absolutivos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="margin-top:30px">

            <h2 >Absolutivos (<strong style="color: red">ABS</strong>).

                <a class="btn" style="float: right; color:#691C32 " href="{{ route('pluralesSimples')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                <a class="btn" style="float: right; color:#10312B"  href="{{ route('omnipredicativa')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

            </h2>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-5">

                    <h4><u>Definiciones: </u></h4>
                    <br>


                    <h5 style="text-align: justify">Son morfemas, sufijos que
                        acompañan a los sustantivos y no
                        tienen significado, pero si tienen
                        función: indican que la palabra es
                        un sustantivo y está en singular.
                    </h5>

                    <br>
                    <h5>Las diferencias entre estas
                        terminaciones son de tipo fonético.
                    </h5>
                    <br>
                    <h4><u>Descripción: </u></h4>
                    <br>


                    <h5>
                        <strong style="color: black">1. </strong><strong style="color: green">R.N</strong>
                        <strong style="color: black"> + Vocal + </strong><strong style="color: red">tl</strong>
                    </h5>
                    <br>


                    <h5 id="abs">
                        <strong style="color: black">a. </strong><strong style="color: green">papal</strong>
                        <strong style="color: black">u</strong><strong style="color: red">tl</strong>
                        <strong style="color: black"> = Mariposa</strong>
                    </h5>

                    <br>


                    <h5>
                        <strong style="color: black">2. </strong><strong style="color: green">R.N</strong>
                        <strong style="color: black"> + Consonante + </strong><strong style="color: red">tle</strong>
                    </h5>
                    <br>


                    <h5 id="abs">
                        <strong style="color: black">a. </strong><strong style="color: green">Me</strong>
                        <strong style="color: black">s</strong><strong style="color: red">tle</strong>
                        <strong style="color: black"> = Luna</strong>
                    </h5>



        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">

                    <br>


                    <h5>
                        <strong style="color: black">3. </strong><strong style="color: green">R.N</strong>
                        <strong style="color: black"> + I + </strong><strong style="color: red">le</strong>
                    </h5>
                    <br>


                    <h5  id="abs">
                        <strong style="color: black">a. </strong><strong style="color: green">Coma</strong>
                        <strong style="color: black">l</strong><strong style="color: red">le</strong>
                        <strong style="color: black"> = Comal</strong>
                    </h5>

                    <br>


                    <h5>
                        <strong style="color: black">4. Aboslutivo</strong><strong style="color: red"> in.</strong>

                    </h5>
                    <br>
                    <h5>
                        Marca singular, pero indica
                        colectividad que no se puede
                        cuantificar, pero refiere que existe,
                        se vende o vive en conjunto.
                    </h5>
                    <br>
                    <h5><strong style="color: green">Tamal</strong><strong style="color: red">le</strong>
                        <strong style="color: black"> = tamal</strong>
                    </h5>
                    <br>
                    <h5 id="abs">
                        <strong style="color: green">Tamal</strong>
                        <strong style="color: red">in</strong>
                        <strong style="color: black"> = tamales</strong>
                    </h5>
                    <br>
                    <h5><strong style="color: green">Chapol</strong><strong style="color: red">le</strong>
                        <strong style="color: black"> = chapulin</strong>
                    </h5>
                    <br>
                    <h5 id="abs">
                        <strong style="color: green">chapul</strong>
                        <strong style="color: red">in</strong>
                        <strong style="color: black"> = chapulines</strong>
                    </h5>

    </div>
</div>
@endsection
