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
            $('#table-id').DataTable({
                responsive: true,
                autoWidth: false,

                "language": {
                "lengthMenu": "Mostrar    "  +
                `<select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value='10'>10</option>
                    <option value='25'>25</option>
                    <option value='50'>50</option>
                    <option value='100'>100</option>
                    <option value='-1'>Mostrar todos los registros </option>
                </select>  ` +
                "registros por página",
                "zeroRecords": "Palabra no encontrada",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                'search' : 'Buscar:',
                'paginate' : {
                    'next' : 'Siguiente',
                    'previous' : 'Anterior'
                }
                }
            })
        })
    </script>

@endsection
