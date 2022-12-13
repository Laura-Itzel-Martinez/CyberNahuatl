@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Diminutivos.')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 > Diminutivos.

                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('reverenciales')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href="{{ route('marcasSujetos')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4><u>Definiciòn.</u></h4>

                <h5 class="font-weight-normal mt-4 text-justify">Se utiliza el <strong  style="color:#691C32 ">tun</strong> para el singular.</h5>
                <h5 class="font-weight-normal mt-4 text-justify">Se utiliza el <strong style="color:#691C32">totun</strong> para el plural.</h5><br>

            </div>
            <div class="col-1"></div>
            <div class="col">

                <h5><u>Ejemplos:</u></h5>

                <h5>
                    <ul class="list-unstyled">
                        <li>
                        <ul>
                        </ul><br>
                        <li><strong style="color: green">Chiche</strong> = <strong>perro.</strong>
                            <ul>
                                <li><strong style="color: green">Chichi</strong><strong style="color:#691C32 ">tun</strong> = <strong>perrito.</strong></li>
                                <li><strong style="color: green">Chichi</strong><strong style="color:#691C32 ">totun</strong> = <strong>perritos.</strong></li>
                            </ul>
                        </li><br>
                        <li><strong style="color: green">Mis</strong><strong style="color: red">tle</strong> = <strong>gato.</strong>
                            <ul>
                            <li><strong style="color: green">Mis</strong><strong style="color:#691C32">tin</strong> = <strong>gatito.</strong></li>
                            <li><strong style="color: green">Mis</strong><strong style="color:#691C32">totun</strong> = <strong>gatitos.</strong></li>
                            </ul>
                        </li><br>


                        </li><br>

                    </ul>

                </h5>




            </div>

        </div>
    </div>
    <br><br><br><br><br><br><br><br>
@endsection


