@extends('layouts.plantilla4')
@section('tituloPagina', ' Videos explicativos.')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 >

                    <a class="btn" style="float: right; color:#691C32 " href="{{ route('video5')}}">Siguiente <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    <a class="btn" style="float: right; color:#10312B"  href="{{ route('video3')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Atras</a>

                </h2>
                <br>
                <h2> VIDEO EXPLICATIVO PARTE 4</h2>

            </div>
        </div>
        <div class="row mt-4">
           
            <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6 video" style="background-color: transparent"> 
                    
                    <iframe width="650" height="520" src="https://www.youtube.com/embed/f-s3E0KD2Ks" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                
              </div>
        </div>
    </div>
@endsection



