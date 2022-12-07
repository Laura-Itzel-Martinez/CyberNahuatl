@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Plurales Simples.')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 >Plurales Simples.

                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('marcasSujetos')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href="{{ route('absolutivos')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>


            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h4><u>Definiciòn.</u></h4>

                <h5 class="font-weight-normal mt-4 text-justify">Son morfemas, sufijos que
                    Aparecen siempre al final del
                    sustantivo (nominal). El plural no
                    puede aparecer simultáneamente
                    al absolutivo.
                </h5>
                <br>
                <h4 ><u>Descripciòn.</u></h4><br>

                <h5>
                    <ul class="list-unstyled">
                        <li> 1.- <strong style="color: green">Raiz Nominal</strong> + <strong>Vocal</strong> + <strong style="color:purple">meh</strong>.</li>
                          <ul>
                          </ul><br>
                        <li><strong style="color: green">Sow</strong><strong>a</strong><strong style="color: red">tl</strong> = <strong>es mujer.</strong>
                            <ul>
                              <li><strong style="color: green">Sowa</strong><strong style="color: purple">meh</strong> = <strong>son mujeres.</strong></li>
                            </ul>
                          </li><br>
                          <li><strong style="color: green">Chiche</strong> = <strong>es perro.</strong>
                            <ul>
                              <li><strong style="color: green">Chichi</strong><strong style="color:purple">meh</strong> = <strong>son perros.</strong></li>
                            </ul>
                          </li><br>


                        </li><br>

                    </ul>



                </h5>

            </div>
            <div class="col-1"></div>
            <div class="col" style="margin-top: 20%">

                <h5>
                    <ul class="list-unstyled">
                        <li> 2.- <strong style="color: green">Raiz Nominal</strong> + <strong>Consolante</strong> + <strong style="color:purple">tin</strong>.</li>
                        <ul>
                        </ul><br>
                        <li><strong style="color: green">Xok</strong><strong>a</strong><strong style="color: red">tle</strong> = <strong>es olla.</strong>
                            <ul>
                            <li><strong style="color: green">Xok</strong><strong style="color: purple">tin</strong> = <strong>son ollas.</strong></li>
                            </ul>
                        </li><br>
                        <li><strong style="color: green">Xal</strong><strong style="color: red">le</strong> = <strong>es arena.</strong>
                            <ul>
                            <li><strong style="color: green">Xal</strong><strong style="color:purple">tin</strong> = <strong>son arenas.</strong></li>
                            </ul>
                        </li><br>


                        </li><br>

                    </ul>

                </h5>

            </div>

        </div>
    </div>
@endsection
