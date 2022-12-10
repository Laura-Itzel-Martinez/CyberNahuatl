@extends('layouts.plantilla2')
@section('tituloPagina', 'Diccionario')

@section('content')
<br>
<div><h2>Diccionario en Nàhuatl</h2></div>
<div class="container" >
    <div class="row" >
        <div class="col">
            <div class="row">
                <div class="col-sm-11 text-center">
                    <table class="table table-hover" id="table-id">
                        <thead >
                            <tr >
                                <th class="text-center">Nùmero</th>
                                <th class="text-center">Nahuatl</th>
                                <th class="text-center">Español</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($diccionario as $item )

                            <tr>
                                <td>{{ $item->id_diccionario}}</td>
                                <td>{{ $item->palabra_nahuatl}}</td>
                                <td>{{ $item->palabra_espanol}}</td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('dataTable')

    <script>
        $(document).ready(function(){
            $('#table-id').DataTable();
        })
    </script>

@endsection
