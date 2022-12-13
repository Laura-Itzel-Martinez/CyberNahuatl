@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Reverenciales.')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 > Reverenciales

                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('posesivos')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href="{{ route('diminutivos')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4><u>Definiciòn.</u></h4>

                <h5 class="font-weight-normal mt-4 text-justify">

                    Morfología:

                    <br><p>[<strong style="color:chocolate ">Sujeto</strong> + <strong style="color: green">Raiz Nominal</strong> + <Strong style="color: blue">Reverencial</Strong>]</p><br>
                    <p>El reverencial es un sufijo, marca.</p>
                    <p>- Reverencial u honorifico: Marca
                        distanciamiento.
                    </p>
                    <p>- Funciona como diminutivo. Pero
                        también marca cercanía y afecto.
                    </p>
                    <p>- Marca número. </p>

                    <p>-<strong style="color: blue">tsin</strong> = singular.</p>

                    <p>-<strong style="color: blue">tsitsin</strong> = plural.</p>

                </h5>


            </div>
            <div class="col-1"></div>
            <div class="col">

                <h5><u>Ejemplos:</u></h5><br>

                <h5>
                    <ul class="list-unstyled">
                        <li>
                          <ul>
                            <li><strong style="color:green">Sowa</strong><strong style="color: blue">tsin</strong> = (ella) Es mujercita, es venerable mujer.</li>
                          </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ti</strong><strong style="color: green">sowa</strong><strong style="color: blue">tsin</strong><strong style="color: red">tle</strong> = (tú) Eres mujercita
                                    / respetable mujer.</li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Nen</strong><strong style="color: green">sowa</strong><strong style="color: blue">tsintsin</strong> = (Uds.) Son
                                    mujercitas / respetables mujeres.</li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Nen</strong><strong style="color: green">sowa</strong><strong style="color: blue">tsintsin</strong><strong style="color: chocolate">tin</strong> = (Uds.) Son
                                    venerables mujeres / respetables
                                    mujeres</li>

                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:green">Ichpoka</strong><strong style="color: red">tsin</strong> = Es muchacha.</li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ti</strong><strong style="color: green">ichpoka</strong><strong style="color: blue">tsin</strong> = Tú eres
                                    muchachita / jovencita.</li>
                            </ul>
                        </li><br>
                        <li>
                            <ul>
                                <li><strong style="color:chocolate">Ti</strong><strong style="color: green">ichpoka</strong><strong style="color: blue">tsintsin</strong> =  (nos.) Somos
                                    muchachitas.</li>
                            </ul>
                        </li><br>
                    </ul>

                </h5>


            </div>

        </div>
    </div>
@endsection



