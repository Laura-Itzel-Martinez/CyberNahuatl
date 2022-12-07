@extends('layouts.plantilla2')
@section('tituloPagina', 'Númeración')

@section('content')


  <body class="body_1">
    <form id="cont">
       <!-- Modal numero 1-->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 1</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>sentetl, se </td>
                    <td>Uno</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_uno.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 2-->
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 2</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>summe</td>
                    <td>Dos</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_dos.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 3-->
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 3</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>yeye</td>
                    <td>Tres</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_tres.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 4-->
      <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 4</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>nawe</td>
                    <td>Cuatro</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_cuatro.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 5-->
      <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 5</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>makwille</td>
                    <td>Cinco</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_cinco.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 6-->
      <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 6</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>Chikwase</td>
                    <td>Seis</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_seis.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 7-->
      <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 7</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>Chik umme</td>
                    <td>Siete</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_siete.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 8-->
      <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número  8</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>Chik weye</td>
                    <td>Ocho</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_ocho.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 9-->
      <div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 9</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>Chik nawe</td>
                    <td>Nueve</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_nueve.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 10-->
      <div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 10</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>mahtlaktle</td>
                    <td>Diez</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_diez.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 11-->
      <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 11</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>mahtlaktle wan se</td>
                    <td>Once</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_once.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 12-->
      <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 12</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>mahtlaktle wan umme</td>
                    <td>Doce</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_doce.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 13-->
      <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 13</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>mahtlaktle wan yeye</td>
                    <td>Trece</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_trece.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 14-->
      <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 14</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>mahtlaktle wan nawe</td>
                    <td>Catorce</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_catorce.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 15-->
      <div class="modal fade" id="exampleModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 15</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>kaxtulle</td>
                    <td>Quince</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_quince.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 16-->
      <div class="modal fade" id="exampleModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 16</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>kaxtulle wan se </td>
                    <td>Dieciseis</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_dieciseis.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 17-->
      <div class="modal fade" id="exampleModal17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 17</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>kaxtulle wan umme</td>
                    <td>Diecisiete</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_diecisiete.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 18-->
      <div class="modal fade" id="exampleModal18" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 18</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>kaxtulle wan yeye</td>
                    <td>Dieciocho</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_dieciocho.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 19-->
      <div class="modal fade" id="exampleModal19" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 19</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>kaxtulle wan nawe</td>
                    <td>Diecinueve</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_diecinueve.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal numero 20-->
      <div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Número 20</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table table-striped" style="text-align: center">
                <thead>
                  <tr>

                    <th scope="col">Nahuatl</th>
                    <th scope="col">Español</th>
                    <th scope="col">Pronunciación</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>se powalle </td>
                    <td>Veinte</td>
                    <td>
                      <audio controls>
                        <source src="{{asset('audios/numeros/numero_veinte.mp3')}}" type="audio/mp3">
                      </audio>
                    </td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

            </div>
          </div>
        </div>
      </div>
      <input type="radio" id="step-1" name="step" checked />
      <input type="radio" id="step-2" name="step" />
      <input type="radio" id="step-3" name="step" />
      <input type="radio" id="step-4" name="step" />

      <div id="bubble-1" class="bubble">
        <div>En esta sección aprenderas los numeros en nahuatl</div>
        <label for="step-2">!Has click aqui!</label>
      </div>

      <div id="bubble-2" class="bubble right">
        <div>Empecemos, has click sobre un número para saber su información</div>
        <label for="step-3">Finalizar</label>
      </div>

      <div id="bubble-3" class="bubble">
        <div>!Muy bien!, has aprendido los numeros basicos en la lengua nahuatl!</div>
        <p></p>
        <label for="step-4">Volver a mostrar numeros</label>
      </div>

      <div id="bubble-4" class="bubble right">
        <div>Ok, aqui tienes nuevamente los numeros en nahuatl, recuerda que tienes que dar click sobre un numero para saber su información</div>
        <input type="reset" value="Finalizar" id="reset" />
      </div>

      <div id="magician">

          <div class="box small-12 large-12 columns" style="text-align: center">
              <div class="box-model jagger">
                <div class="inner">
                  <div class="post">
                  </div>
                  <div class="image-holder">
                    <img src="https://icons.iconarchive.com/icons/google/noto-emoji-people-profession/512/10219-man-teacher-light-skin-tone-icon.png" width="280" />
                  </div>
                </div>
              </div>
            </div>


      </div>

      <div class="cards" id="cards-1" style="width:68%">

        <div class="row">
          <div id="card-1" class="card red" data-toggle="modal" data-target="#exampleModal">
              <h2>1</h2>
          </div>

          <div id="card-2" class="card" data-toggle="modal" data-target="#exampleModal2">
              <h2>2</h2>
          </div>
          <div id="card-3" class="card" data-toggle="modal" data-target="#exampleModal3">
              <h2>3</h2>
          </div>
          <div id="card-4" class="card" data-toggle="modal" data-target="#exampleModal4">
              <h2>4</h2>
          </div>
          <div id="card-5" class="card" data-toggle="modal" data-target="#exampleModal5">
              <h2>5</h2>
          </div>
          <div id="card-6" class="card" data-toggle="modal" data-target="#exampleModal6">
              <h2>6</h2>
          </div>
          <div id="card-7" class="card" data-toggle="modal" data-target="#exampleModal7">
              <h2>7</h2>
          </div>
          <div id="card-8" class="card" data-toggle="modal" data-target="#exampleModal8">
              <h2>8</h2>
          </div>
          <div id="card-1" class="card red" data-toggle="modal" data-target="#exampleModal9">
              <h2>9</h2>
          </div>
          <div id="card-2" class="card" data-toggle="modal" data-target="#exampleModal10">
              <h2>10</h2>
          </div>
          <div class="row" style="margin-top: 50px">
              <div id="card-3" class="card" data-toggle="modal" data-target="#exampleModal11">
                  <h2>11</h2>
              </div>
              <div id="card-4" class="card" data-toggle="modal" data-target="#exampleModal12">
                  <h2>12</h2>
              </div>
              <div id="card-5" class="card" data-toggle="modal" data-target="#exampleModal13">
                  <h2>13</h2>
              </div>
              <div id="card-6" class="card" data-toggle="modal" data-target="#exampleModal14">
                  <h2>14</h2>
              </div>
              <div id="card-7" class="card" data-toggle="modal" data-target="#exampleModal15">
                  <h2>15</h2>
              </div>
              <div id="card-8" class="card" data-toggle="modal" data-target="#exampleModal16">
                  <h2>16</h2>
              </div>
              <div id="card-9" class="card" data-toggle="modal" data-target="#exampleModal17">
                  <h2>17</h2>
              </div>
              <div id="card-10" class="card" data-toggle="modal" data-target="#exampleModal18">
                  <h2>18</h2>
              </div>
              <div id="card-11" class="card" data-toggle="modal" data-target="#exampleModal19">
                  <h2>19</h2>
              </div>
              <div id="card-11" class="card" data-toggle="modal" data-target="#exampleModal20">
                  <h2>20</h2>
              </div>
          </div>

        </div>

      </div>


    </form>
  </body>



@endsection
