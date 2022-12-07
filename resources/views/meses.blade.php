@extends('layouts.plantilla2')
@section('tituloPagina', 'Meses')

@section('content')
<br>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert" role="alert">
                    <p><h1>Aprende los meses en Nahuatl</h1></p>
                    <img src="{{asset('img/meses/maestro.gif')}}" class="card_image" alt="..." width="400px" height="300px">
                </div>
            </div>
            <div class="col">
                <div class="cards-list">
                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3> Yenkwikmetstle</h3>
                        </div>
                        <img src="{{asset('img/meses/enero.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>En el calendario gregoriano, enero es el primer mes del año y tiene 31 días.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="cards-list">
                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Yehyekametstle</h3>
                        </div>
                        <img src="{{asset('img/meses/febrero.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p> Febrero es el segundo mes del año y es el más corto: tiene 28 días en los años comunes y 29 en los años bisiestos.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="cards-list">
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Tukismetstle</h3>
                        </div>
                        <img src="{{asset('img/meses/marzo.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Marzo es el tercer mes del año y tiene 31 días. </p>
                        </div>
                    </div>

                    <div class="col"></div>
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3> Xoxohkametstle</h3>
                        </div>
                        <img src="{{asset('img/meses/abril.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Abril es el cuarto mes del año y es uno de los cuatro meses que tienen 30 días.</p>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>


                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Totunkameststle</h3>
                        </div>
                        <img src="{{asset('img/meses/mayo.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Mayo es el quinto mes del año y tiene 31 días; pero era el tercer mes en el antiguo calendario romano</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="cards-list">
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3> Kiawismeststle</h3>
                        </div>
                        <img src="{{asset('img/meses/junio.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p> En el calendario gregoriano, junio es el sexto mes del año y tiene 30 días.</p>
                        </div>
                    </div>

                    <div class="col"></div>
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Kiawismeststle</h3>
                        </div>
                        <img src="{{asset('img/meses/julio.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p> Julio es el séptimo mes del año y tiene 31 días. Originalmente este mes era el quinto del primitivo calendario romano</p>
                        </div>
                    </div>

                    <div class="col"></div>
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Xupantlametstle</h3>
                        </div>
                        <img src="{{asset('img/meses/agosto.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p> Agosto es el octavo mes del año y tiene 31 días.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="cards-list">
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Xupantlametstle</h3>
                        </div>
                        <img src="{{asset('img/meses/septiembre.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Septiembre o setiembre​ es el noveno mes del año y tiene 30 días.</p>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Pixkismetstle</h3>
                        </div>
                        <img src="{{asset('img/meses/octubre.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Octubre es el décimo y antepenúltimo mes del año y tiene 31 días.</p>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Mihkailhwimetstle</h3>
                        </div>
                        <img src="{{asset('img/meses/noviembre.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Noviembre es el undécimo y penúltimo mes del año y tiene 30 días.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="cards-list">

                    <div class="cardMeses" >
                        <div class="card-header">
                           <h3>Sekwismetstle</h3>
                        </div>
                        <img src="{{asset('img/meses/diciembre.jpg')}}" class="card_image" alt="..." >
                        <div class="card-body">
                            <p>Diciembre es el duodécimo y último mes del año y tiene 31 días. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
