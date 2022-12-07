@extends('layouts.plantilla4')
@section('tituloPagina', ' Curso Posesivos.')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 > Posesivos <strong style="color:lightseagreen">(POS)</strong>.


                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('cursos')}}">Salir <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href="{{ route('diminutivos')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>


            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h4><u>Definiciòn.</u></h4>

                <h5 class="font-weight-normal mt-4 text-justify">
                    <p>Esta forma relacional en la que
                        puede aparecer las raíces
                        nominales consiste en relacionar
                        dos entidades referenciales: un
                        sujeto gramatical que se relaciona
                        con un “poseedor”. No se trata de
                        propiedad, posesión o pertenencia
                        sino de una forma gramatical que
                        establece tipos de relación social
                        entre dos entidades.
                    </p>
                    <p>
                        Las formas relacionales se
                        contraponen a las formas
                        absolutas y por ende no es
                        posible, en el náhuatl del centro de
                        México, mantener un absolutivo
                        cuando se usa esta relacional.

                    </p>
                    <p>
                        <ul class="list-unstyled">
                            <li>
                              <ul>
                                <li><strong style="color:lightseagreen">No</strong> = <strong>mi.</strong></li>
                              </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><strong style="color:lightseagreen">Mo</strong> = <strong>tu.</strong></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><strong style="color:lightseagreen">I</strong> = <strong>su (èl / ella).</strong></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><strong style="color:lightseagreen">To</strong> = <strong>nosotro/a.</strong></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><strong style="color:lightseagreen">Nenmo</strong> = <strong>su (de ustedes).</strong></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><strong style="color:lightseagreen">In</strong> = <strong>su (ellos / ellas).</strong></li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                </h5>


            </div>
            <div class="col-1"></div>
            <div class="col">

                <h5>Morfología: </h5>
                <h5>[<strong style="color:lightseagreen ">Posesivo</strong> + <strong style="color: green">Raiz Nominal</strong> + <Strong style="color:crimson">NUM</Strong>]</h5><br>

                <h5><u>Ejemplos Singular:</u></h5>

                <h5>
                    <ul class="list-unstyled">
                        <li>
                        <ul>
                        </ul><br>
                        <li><strong style="color: green">Xuchi</strong><strong style="color: red">tl</strong> = <strong>flor.</strong>
                            <ul>
                                <li><strong style="color:lightseagreen">No</strong><strong style="color:green ">xuchi</strong> = <strong>mi flor.</strong></li>
                            </ul>
                        </li><br>
                        <li><strong style="color: green">Tlaxkal</strong><strong style="color: red">le</strong> = <strong>tortilla.</strong>
                            <ul>
                            <li><strong style="color:lightseagreen">No</strong><strong style="color:green">tlaxkal</strong> = <strong>mi tortilla.</strong></li>
                            </ul>
                        </li><br>
                    </ul>

                    <p class="font-weight-normal mt-4 text-justify">La partícula <strong style="color: crimson">wan</strong> es un pluralizador del posesivo.</p>

                    <u>Ejemplos Plural:</u>

                    <ul class="list-unstyled">
                        <li>
                        <ul>
                        </ul><br>
                        <li><strong style="color: green">Xuchi</strong><strong style="color: red">tl</strong> = <strong> flor.</strong>
                            <ul>
                                <li><strong style="color:lightseagreen">No</strong><strong style="color:green ">xuchi</strong><strong style="color: crimson">wan</strong> = <strong>mis flores.</strong></li>
                                <li><strong style="color:lightseagreen">To</strong><strong style="color:green ">xuchi</strong> = <strong>nuestra flor.</strong></li>
                                <li><strong style="color:lightseagreen">To</strong><strong style="color:green ">xuchi</strong><strong style="color: crimson">wan</strong> = <strong>nuestras flores.</strong></li>
                            </ul>
                        </li><br>
                        <li><strong style="color: green">Tlaxkal</strong><strong style="color: red">le</strong> = <strong>tortilla.</strong>
                            <ul>
                                <li><strong style="color:lightseagreen">No</strong><strong style="color:green">tlaxkal</strong><strong style="color: crimson">wan</strong> = <strong>mis tortillas.</strong></li>
                                <li><strong style="color:lightseagreen">To</strong><strong style="color:green">tlaxkal</strong> = <strong>nuestra tortilla.</strong></li>
                                <li><strong style="color:lightseagreen">To</strong><strong style="color:green">tlaxkal</strong><strong style="color: crimson">wan</strong> = <strong>nuestras tortilla.</strong></li>
                            </ul>
                        </li><br>
                    </ul>



                </h5>




            </div>

        </div>
    </div>
@endsection


