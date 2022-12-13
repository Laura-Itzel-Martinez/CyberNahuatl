@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Marcas de Sujeto')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 > Marcas de sujeto.

                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('diminutivos')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href="{{ route('pluralesSimples')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4><u>Definiciòn.</u></h4>

                <h5 class="font-weight-normal mt-4 text-justify">Son morfemas, son prefijos que
                    necesitan ir acompañados de una
                    raíz y una marca de numero para
                    tener sentido.
                </h5><br>


                <h5>
                    <ul class="list-unstyled">
                        <li>
                          <ul>
                            <li><strong style="color:chocolate">Ni</strong> = <strong>yo.</strong></li>
                          </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ti</strong> = <strong>tu.</strong></li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ø</strong> = <strong>èl / ella.</strong></li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ti</strong> = <strong>nosotros.</strong></li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Nen</strong> = <strong>ustedes.</strong></li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ø</strong> = <strong>ellos / ellas.</strong></li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ø</strong> = <strong>significa vacìo.</strong></li>
                            </ul>
                        </li><br>
                    </ul>

                </h5>
            </div>
            <div class="col-1"></div>
            <div class="col">
              <h4><u>Estructura de la palabra nominal:</u></h4>

              <h5 class="font-weight-normal mt-4 text-justify">Todas las palabras en náhuatl
                presentan esta estructura
                morfológica mínima:
              </h5><br>

              <h6>[<strong style="color: chocolate"> Sujeto</strong> + <strong style="color:green">Raiz Nominal</strong> + <strong style="color: red">ABS</strong> ]</h6><br>

              <h5><u>Ejemplos:</u></h5>


              <h5>
                <ul class="list-unstyled">
                    <li>
                      <ul>
                        <li><strong style="color:chocolate">Ni</strong><strong style="color: green">telpoka</strong><strong style="color: red">tl</strong> = <strong>soy jòven.</strong></li>
                      </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Ti</strong><strong style="color: green">telpok</strong><strong style="color: purple">meh</strong> = <strong>somos jòvenes.</strong></li>
                        </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Ni</strong><strong style="color: green">ichpoka</strong><strong style="color: red">tl</strong> = <strong>soy muchacha.</strong></li>
                        </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Ti</strong><strong style="color:green">ichpoka</strong><strong style="color: purple">meh</strong> = <strong>somos muchachas.</strong></li>
                        </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Nen</strong><strong style="color: green">ichpoka</strong><strong style="color: purple">meh</strong> = <strong>ustedes son muchachas.</strong></li>
                        </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Ø</strong> <strong style="color: green">Ichpoka</strong><strong style="color: purple">meh</strong> = <strong>ellas son muchachas.</strong></li>
                        </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Ti</strong><strong style="color: green">chiche</strong> = <strong>"tù" eres perro.</strong></li>
                        </ul>
                    </li><br>
                    <li>
                        <ul>
                            <li><strong style="color:chocolate">Ti</strong><strong style="color: green">chichi</strong><strong style="color: purple">meh</strong> = <strong>somos perros.</strong></li>
                        </ul>
                    </li><br>
                </ul>

            </h5>

            </div>

        </div>
    </div>
@endsection

