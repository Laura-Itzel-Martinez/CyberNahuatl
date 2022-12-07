<link href="{{asset('css/diccionario.css') }}" rel="stylesheet">


@extends('layouts.plantilla2')
@section('tituloPagina', 'Diccionario')

@section('content')
<br>
<br>
<br>
    <body class="body_diccionario" >


        <h2>DICCIONARIO NAHUATL</h2>
        <p></p>

        <div class="container">
            <div class="header_wrap">
            <div class="num_rows">

                    <div class="form-group">
                        <select class  ="form-control" name="state" id="maxRows" >




                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                <option value="5000">Mostrar todas las palabras</option>
                            </select>

                        </div>
            </div>
        <div class="tb_search">
    <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"  placeholder="Buscar" class="form-control" >
        </div>
        </div>
    <table class="table table-striped table-class" id="table-id">


        <thead>
            <tr>
                <th>Palabra Nahuatl</th>
                <th>Palabra en Español</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($diccionario as $diccionarios)
                <tr>
                    <td>{{$diccionarios->palabra_nahuatl}}</td>
                    <td>{{$diccionarios->palabra_espanol}}</td>

                </tr>
            @endforeach

        <tbody>
        </table>

        <!--		Start Pagination -->
                <div class='pagination-container'>
                    <nav>
                        <ul class="pagination">
                        <!--	Here the JS Function Will Add the Rows -->
                        </ul>
                    </nav>
                </div>



        </div> <!-- 		End of Container -->




<!--  Developed By Yasser Mas -->
<script src="https://rawcdn.githack.com/bramus/scroll-timeline/b59ed75508d7341f97dc25eccf20ab66231c815a/dist/scroll-timeline.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/diccionario.js') }}"></script>
</body>
@endsection
