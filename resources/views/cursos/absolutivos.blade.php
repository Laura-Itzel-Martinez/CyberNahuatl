@extends('layouts.plantilla4')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 >Absolutivos <strong style="color: red">(ABS)</strong>.

                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('pluralesSimples')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href=""><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>


            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h4><u>Definiciòn.</u></h4>

                <h5 class="font-weight-normal mt-4 text-justify">Son morfemas, sufijos que
                    acompañan a los sustantivos y no
                    tienen significado, pero si tienen
                    función: indican que la palabra es
                    un sustantivo y está en singular.
                    Las diferencias entre estas
                    terminaciones son de tipo fonético.
                </h5>
                <br>
                <h4 ><u>Descripciòn.</u></h4><br>

                <h5>
                    <ul class="list-unstyled">
                        <li> 1.- <strong style="color: green">Raiz Nominal</strong> + <strong>Vocal</strong> + <strong style="color: red">tl</strong>.</li>
                          <ul>
                            <li><strong style="color: green">Papal</strong><strong>u</strong><strong style="color: red">tl</strong> = <strong>Mariposa.</strong></li>
                          </ul>
                        </li><br>

                        <li>2.- <strong style="color: green">Raiz Nominal</strong> + <strong>Consonante</strong> + <strong style="color: red">tle</strong>.</li>
                        <ul>
                            <li><strong style="color: green">Me</strong><strong>s</strong><strong style="color: red">tle</strong> = <strong>Luna.</strong></li>
                          </ul>
                        </li><br>
                        <li>3.- <strong style="color: green">Raiz Nominal</strong> + <strong>l</strong> + <strong style="color: red">le</strong>.</li>
                        <ul>
                            <li><strong style="color: green">Coma</strong><strong>l</strong><strong style="color: red">le</strong> = <strong>Comal.</strong></li>
                          </ul>
                        </li><br>
                      </ul>

                </h5>
            </div>
            <div class="col-1"></div>
            <div class="col">
              <h4><strong>Absolutivo</strong> <strong style="color:red">in</strong>.</h4>

              <h5 class="font-weight-normal mt-4 text-justify">Marca singular, pero indica
                colectividad que no se puede
                cuantificar, pero refiere que existe,
                se vende o vive en conjunto.
              </h5><br><br>

              <h5>
                <ul class="list-unstyled">
                  <li><strong style="color: green">Tamal</strong><strong style="color: red">le</strong> = <strong>Tamal.</strong>
                    <ul>
                      <li><strong style="color: green">Tamal</strong><strong style="color: red">in</strong> = <strong>Tamales.</strong></li>
                    </ul>
                  </li><br>

                  <li><strong style="color: green">Chapol</strong><strong style="color: red">le</strong> = <strong>Chapulin.</strong></li>
                    <ul>
                      <li><strong style="color: green">Chapu</strong><strong style="color: red">in</strong> = <strong>Chapulines.</strong></li>
                    </ul>

                </ul>

              </h5>

            </div>

        </div>
    </div>
@endsection
