@extends('layouts.plantilla2')
@section('tituloPagina', 'Alfabeto Nahuatl')


@section('content')
<br><br>
<h2>Alfabeto Nahualt</h2><br>
  <span style="text-align: center"><h5>El alfabeto es un signo gráfico o conjunto de ellos con que se representa un sonido o una palabra en la escritura.</h5></span>
    <div class="content-all">
        <div class="content-carrousel">


            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalA">
              <img src="{{asset('img/grafias/letraA.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalCH">
              <img src="{{asset('img/grafias/letraCH.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalE">
              <img src="{{asset('img/grafias/letraE.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalH">
              <img src="{{asset('img/grafias/letraH.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalHW">
              <img src="{{asset('img/grafias/letraHW.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalI">
              <img src="{{asset('img/grafias/letraI.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalK">
              <img src="{{asset('img/grafias/letraK.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalKW">
              <img src="{{asset('img/grafias/letraKW.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalL">
              <img src="{{asset('img/grafias/letraL.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalM">
              <img src="{{asset('img/grafias/letraM.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalN">
              <img src="{{asset('img/grafias/letraN.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalO">
              <img src="{{asset('img/grafias/letraO.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalP">
              <img src="{{asset('img/grafias/letraP.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalS">
              <img src="{{asset('img/grafias/letraS.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalT">
              <img src="{{asset('img/grafias/letraT.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalTL">
              <img src="{{asset('img/grafias/letraTL.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalTS">
              <img src="{{asset('img/grafias/letraTS.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalW">
              <img src="{{asset('img/grafias/letraW.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalX">
              <img src="{{asset('img/grafias/letraX.png')}}">
            </button></figure>

            <figure><button class="btn1 " data-toggle="modal" data-target="#exampleModalY">
              <img src="{{asset('img/grafias/letraY.png')}}">
            </button></figure>



        </div>
    </div>
    <div class="alert"  role="alert" style="margin-top: 30%;  background-color:  #ccc">
      <strong>Haz click en la letra descubre palabras en Nàhualt.!!!!</strong>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt de la letra <strong style="color:red">A</strong>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/A/agua.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Atl</h3>
                        <div>
                           Agua
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/A/papel.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Amatl</h3>
                      <div>
                        Papel
                    </div>
                  </div></td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/A/lago.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Atoyatl</h3>
                        <div>
                           Lago
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/A/arcoiris.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Acosamalutl</h3>
                        <div>
                          Arcoiris
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModalCH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt de la letra <strong style="color: red">CH</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/CH/chile.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Chille</h3>
                        <div>
                          Chile
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/CH/perro2.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Chiche</h3>
                      <div>
                       Perro
                    </div>
                  </div></td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/CH/cerveza.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Chichilkatl</h3>
                        <div>
                         Cerveza
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/CH/fuerte.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Chikawak</h3>
                        <div>
                          Fuerte
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">E</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/E/elote.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h2>Elutl</h2>
                        <div>
                          <h3>Elote</h3>
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/E/ejote.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h2>Exutl</h2>
                      <div>
                        <h3> Ejote</h3>
                    </div>
                  </div></td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/E/cascara.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h2>Ewatl</h2>
                        <div>
                          <h3>Cascara de frutas</h3>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/E/nariz.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h2>Ehkahtsolle</h2>
                        <div>
                         <h3> Nariz</h3>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">H</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/H/camino.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Ohtle</h3>
                        <div>
                          Camino
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/H/medicina.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>pendiente</h3>
                      <div>
                       Medicina
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/H/Padre.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tahtle</h3>
                        <div>
                         Padre
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/H/piojo.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Mehtolle</h3>
                        <div>
                          Piojo
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalHW" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">HW</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/HW/nieto.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Ichan</h3>
                        <div>
                          Nieto
                      </div>
                    </div>
                  </td>
                  <td><div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/HW/dia2.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Semilhwitl</h3>
                      <div>
                       Dia
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/HW/el_o_ella.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Yehwatl</h3>
                        <div>
                         El o ella
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/Hw/tu.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tehwatl</h3>
                        <div>
                          Tu
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalI" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">I</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/I/cielo.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Iihwikatl</h3>
                        <div>
                          Cielo
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/I/casa.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Ichan</h3>
                      <div>
                       Su casa
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/I/muchacha.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Ichpokatl</h3>
                        <div>
                         Muchacha
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/I/fiesta.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Ilhwitl</h3>
                        <div>
                          Fiesta
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalK" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">K</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/K/bebe.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Koniatl</h3>
                        <div>
                          Bebe
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/k/coyote.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Koyutl</h3>
                      <div>
                       Coyote
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/K/zapato2.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kaktle</h3>
                        <div>
                         Zapato
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/K/abuelo.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kulle</h3>
                        <div>
                          Abuelo
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalKW" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">kW</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/KW/arbol.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kwawitl</h3>
                        <div>
                          Arbol
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/kW/bosque.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Kwaktlan</h3>
                      <div>
                       Bosque
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/KW/bien.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kwalle</h3>
                        <div>
                         Bien
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/KW/lindero.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kwascuchtl</h3>
                        <div>
                          Lindero
                      </div>
                    </div>
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">L</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/L/amarrar.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Lipia</h3>
                        <div>
                          Amarrar
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/L/bosque.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Kwaktlan</h3>
                      <div>
                       Bosque
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/L/bien.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kwalle</h3>
                        <div>
                         Bien
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/L/lindero.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kwascuchtl</h3>
                        <div>
                          Lindero
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">M</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/M/gato.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Mistle</h3>
                        <div>
                          Gato
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/M/pez2.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Michin</h3>
                      <div>
                       Pez
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/M/muerto2.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Mihke</h3>
                        <div>
                         Muerto
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/M/venado.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Masatl</h3>
                        <div>
                          Venado
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal -->
    <div class="modal fade" id="exampleModalN" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">N</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/N/carne.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Nakatl</h3>
                        <div>
                          Carne
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/N/nopal.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Nohpaletl</h3>
                      <div>
                       Nopal
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/N/tuna.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Nuchtle</h3>
                        <div>
                         Tuna
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/N/caminar.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Nehneme</h3>
                        <div>
                          Caminar
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="exampleModalO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">O</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/O/jaguar.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Oselotl</h3>
                        <div>
                          Jaguar
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/O/Ocote.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Okutl</h3>
                      <div>
                       Ocote
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/O/gusano.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Okwillin</h3>
                        <div>
                         Gusano
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/O/madrugada.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Okokiwalka</h3>
                        <div>
                          Madrugada
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">P</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/P/alcohol.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Pantle</h3>
                        <div>
                          Alcohol
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/P/humo.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Puktle</h3>
                      <div>
                       Humo
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/P/panzon.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Potsitik</h3>
                        <div>
                         Panzón
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/P/mariposa.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Papalutl</h3>
                        <div>
                          Mariposa
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">S</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/S/abuela.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Sihtle</h3>
                        <div>
                          Abuela
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/S/lodo.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Sokitl</h3>
                      <div>
                       Lodo
                    </div>
                  </div></td>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/S/mujer.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Sowatl</h3>
                        <div>
                         Mujer
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/S/codorniz.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Sullin</h3>
                        <div>
                          Cordoniz
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalT" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">T</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/T/conejo.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tuchtle</h3>
                        <div>
                          Conejo
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/T/padre.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Tahtle</h3>
                      <div>
                       Padre
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/T/pajaro.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tututl</h3>
                        <div>
                         Pajaro
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/T/comida.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tlakwalle</h3>
                        <div>
                          Comida
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalTL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">TL</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/TL/compras.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tlakowa</h3>
                        <div>
                          Compras
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/TL/color.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Tlapalle</h3>
                      <div>
                       Color
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/TL/escuela.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tututl</h3>
                        <div>
                         Escuela
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/TL/lavar.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tlakwalle</h3>
                        <div>
                          Lavar ropa
                      </div>
                    </div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalTS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">TS</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/TS/zapote.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tsapotl</h3>
                        <div>
                          Zapote
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/TS/chicle.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Tsiktle</h3>
                      <div>
                       Chicle
                    </div>
                  </div></td>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/TS/dulce.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tsopelik</h3>
                        <div>
                         Dulce
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/TS/cabeza.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tsonteko</h3>
                        <div>
                          Cabeza
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalW" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Nàhualt con la letra <strong style="color: red">W</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/W/cuatro.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Nawe</h3>
                        <div>
                          Cuarto
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/W/alto.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Wehkapan</h3>
                      <div>
                       Alto
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/W/barco.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Weyakalle</h3>
                        <div>
                         Barco
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/W/guajolote.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Wexulutl</h3>
                        <div>
                          Guajolote
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalX" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Nàhualt con la letra <strong style="color: red">X</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/X/flor.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Xuchitl</h3>
                        <div>
                          Flor
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/X/guayaba.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Xalxokotl</h3>
                      <div>
                       Guayaba
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/X/hongo.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Weyakalle</h3>
                        <div>
                         Hongo
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/X/limon.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Wexulutl</h3>
                        <div>
                          Limón
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalY" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Nàhualt con la letra <strong style="color: red">Y</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/Y/viento.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Yehuekatl</h3>
                        <div>
                          Viento
                      </div>
                    </div>
                  </td>
                  <td> <div class="a-box">
                    <div class="img-container">
                      <div class="img-inner">
                        <div class="inner-skew">
                          <img src="{{asset('img/imgAlfabeto/Y/frijol.jpg')}}">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <h3>Yetl</h3>
                      <div>
                       Frijol
                    </div>
                  </div></td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/Y/cora.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Yullotl</h3>
                        <div>
                         Corazón
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/Y/azul.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Yawitl</h3>
                        <div>
                          Azul
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>




@endsection
