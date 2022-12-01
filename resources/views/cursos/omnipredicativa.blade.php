@extends('layouts.plantilla4')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="text-align: center;margin-top:30px">
            <h1>Omnipredicativa.</h1>
        </div> 
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6">
            <div class="card" id="omni">
                <div class="card-body">
                    <h4 class="card-title"><u>Definiciones: </u></h4>
                    <br>
                    <br>
                    
                    <h5 class="card-text">Toda palabra en náhuatl 
                        funciona como predicado.</h5>
                    
                    <br>
                    <h5 class="card-text">- El náhuatl es descriptivo y 
                        contextual.
                    </h5> 
                    <br>
                    <h5 class="card-text">- No es abstracto (paz, 
                        libertad).
                        
                    </h5>
                    <br>
                    <h5 class="card-text">- No existen hiperónimos
                        (abrigo, mueble, árbol, etc.). 
                    </h5>      
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" id="omni">
                <div class="card-body">
                    <h4 class="card-title"><u>Ejemplos:</u></h4>
                    <br>
                    <br>
                    <h5 class="card-text"> <strong style="color: green">Sowa</strong><strong style="color: red">tl</strong>
                        <strong style="color: black">= es mujer.</strong>
                    </h5>
                    <br>
                    <h5 class="card-text"><strong style="color: green">Tlaka</strong><strong style="color: red">tl</strong>
                        <strong> = es persona / es señor.</strong>
                    </h5>

                    <br>
                    
                    <h5 class="card-text">
                        <strong style="color: green">Chiche</strong><strong style="color: black"> = es perro</strong>
                    </h5>
                    <br>
                    <h5 class="card-text"><strong style="color: green">Telpola</strong><strong style="color: red">tl</strong>
                        <strong> = es joven.</strong>
                    </h5>
            </div>  
        </div>
    </div>
</div>
@endsection