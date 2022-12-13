@extends('layouts.plantilla2')
@section('tituloPagina', 'Inicio')

@section('content')

    <div class="container" style="margin-top: 40px">
        <div class="row">
            <div class="col">
                <h2>¡Bienvenido <span class="text-uppercase">{{ Auth::user()->nombre }}</span> a CyberNahuatl
                    encontraras lo bàsico de la lengua Náhualt de la variente de Santa Ana Tlacotenco.
                </h2>
            </div>
            <div class="">
                <div class="row">
                  <div class="col"><img src="{{asset('img/señores2.jpg')}}" alt="" ></div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 5%"></div>
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card_inicio border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">Conoce un poco mas de Alcaldia de Milpa Alta</div>
                    <div class="card-body ">
                        <p class="card-text">
                            Milpa Alta es un lugar que se ubica al sur de la Ciudad de México, colinda con las alcaldías de Tláhuac, Tlalpan,
                            Xochimilco y con el Estado de México y Morelos. Cabe destacar que esta es la segunda demarcación más grande de la
                            capital mexicana, pues cuenta con una superficie total de 228,4 km².
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card_inicio border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">Conoce un poco más del Pueblo de Santa Ana Tlacotenco.</div>
                    <div class="card-body ">
                      <p class="card-text">
                        Santa Ana Tlacotenco es uno de los doce pueblos originarios ubicados en la alcaldía Milpa Alta, en la Ciudad de México.
                        Tlacotenco viene de la lengua náhuatl y significa "a la orilla de los breñales" o "a la orilla de las jarillas".
                        Santa Ana le fue agregado luego de la evangelización de la Nueva España.
                      </p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card_inicio border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">Lengua Nahuatl en Milpa Alta.</div>
                    <div class="card-body ">
                      <p class="card-text">
                        Milpa Alta, lo cual influye en la identidad de sus habitantes,
                        quienes poco a poco empiezan a recuperar su legado momoxca y el habla del náhuatl. Pueblos como San Lorenzo Tlacoyucan,
                        San Jerónimo Miacatlán y Santa Ana Tlacotenco se han convertido en bastiones e revitalización de la lengua náhuatl,
                        trabajando de forma autónoma e institucional. Con ello, esta alcaldía al sur de la capital mexicana se convierte en
                        un ejemplo de cómo el mundo contemporáneo puede convivir con las raíces más profundas.
                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
