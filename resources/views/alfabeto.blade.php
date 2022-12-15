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
                      <div>
                        <button class="reproductor btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton = document.querySelector(".reproductor")
                            let audioEtiqueta = document.querySelector("audio")

                            boton.addEventListener("click", () => {
                              audioEtiqueta.setAttribute("src", "audios/abecedario/letraA/alt.mp3")
                              audioEtiqueta.play()
                              console.log(`Reproduciendo: ${audioEtiqueta.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor3 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton3 = document.querySelector(".reproductor3")
                          let audioEtiqueta3 = document.querySelector("audio")

                          boton3.addEventListener("click", () => {
                            audioEtiqueta3.setAttribute("src", "audios/abecedario/letraA/amatl.mp3")
                            audioEtiqueta3.play()
                            console.log(`Reproduciendo: ${audioEtiqueta3.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor2 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton2 = document.querySelector(".reproductor2")
                            let audioEtiqueta2 = document.querySelector("audio")

                            boton2.addEventListener("click", () => {
                              audioEtiqueta2.setAttribute("src", "audios/abecedario/letraA/lago.mp3")
                              audioEtiqueta2.play()
                              console.log(`Reproduciendo: ${audioEtiqueta2.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor4 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton4 = document.querySelector(".reproductor4")
                            let audioEtiqueta4 = document.querySelector("audio")

                            boton4.addEventListener("click", () => {
                              audioEtiqueta4.setAttribute("src", "audios/abecedario/letraA/akosamalutl.mp3")
                              audioEtiqueta4.play()
                              console.log(`Reproduciendo: ${audioEtiqueta4.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor5 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton5 = document.querySelector(".reproductor5")
                            let audioEtiqueta5 = document.querySelector("audio")

                            boton5.addEventListener("click", () => {
                              audioEtiqueta5.setAttribute("src", "audios/abecedario/letraCH/chille.mp3")
                              audioEtiqueta5.play()
                              console.log(`Reproduciendo: ${audioEtiqueta5.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor6 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton6 = document.querySelector(".reproductor6")
                          let audioEtiqueta6 = document.querySelector("audio")

                          boton6.addEventListener("click", () => {
                            audioEtiqueta6.setAttribute("src", "audios/abecedario/letraCH/chiche.mp3")
                            audioEtiqueta6.play()
                            console.log(`Reproduciendo: ${audioEtiqueta6.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor7 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton7 = document.querySelector(".reproductor7")
                            let audioEtiqueta7 = document.querySelector("audio")

                            boton7.addEventListener("click", () => {
                              audioEtiqueta7.setAttribute("src", "audios/abecedario/letraCH/cerveza.mp3")
                              audioEtiqueta7.play()
                              console.log(`Reproduciendo: ${audioEtiqueta7.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor8 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton8 = document.querySelector(".reproductor8")
                            let audioEtiqueta8 = document.querySelector("audio")

                            boton8.addEventListener("click", () => {
                              audioEtiqueta8.setAttribute("src", "audios/abecedario/letraCH/fuerte.mp3")
                              audioEtiqueta8.play()
                              console.log(`Reproduciendo: ${audioEtiqueta8.src}`)
                            })
                        </script>
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
                        <h3>Elutl</h3>
                        <div>
                          Elote
                      </div>
                      <div>
                        <button class="reproductor9 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton9 = document.querySelector(".reproductor9")
                            let audioEtiqueta9 = document.querySelector("audio")

                            boton9.addEventListener("click", () => {
                              audioEtiqueta9.setAttribute("src", "audios/abecedario/letraE/elutl.mp3")
                              audioEtiqueta9.play()
                              console.log(`Reproduciendo: ${audioEtiqueta9.src}`)
                            })
                        </script>
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
                      <h3>Exutl</h3>
                      <div>
                        Ejote
                    </div>
                    <div>
                      <button class="reproductor10 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton10 = document.querySelector(".reproductor10")
                          let audioEtiqueta10 = document.querySelector("audio")

                          boton10.addEventListener("click", () => {
                            audioEtiqueta10.setAttribute("src", "audios/abecedario/letraE/ejote.mp3")
                            audioEtiqueta10.play()
                            console.log(`Reproduciendo: ${audioEtiqueta10.src}`)
                          })
                      </script>
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
                        <h3>Ewatl</h3>
                        <div>
                          Cascara de frutas
                      </div>
                      <div>
                        <button class="reproductor11 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton11 = document.querySelector(".reproductor11")
                            let audioEtiqueta11 = document.querySelector("audio")

                            boton11.addEventListener("click", () => {
                              audioEtiqueta11.setAttribute("src", "audios/abecedario/letraE/ewatl.mp3")
                              audioEtiqueta11.play()
                              console.log(`Reproduciendo: ${audioEtiqueta11.src}`)
                            })
                        </script>
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
                        <h3>Ehkahtsolle</h3>
                        <div>
                         Nariz
                      </div>
                      <div>
                        <button class="reproductor12 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton12 = document.querySelector(".reproductor12")
                            let audioEtiqueta12 = document.querySelector("audio")

                            boton12.addEventListener("click", () => {
                              audioEtiqueta12.setAttribute("src", "audios/abecedario/letraE/nariz.mp3")
                              audioEtiqueta12.play()
                              console.log(`Reproduciendo: ${audioEtiqueta12.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor13 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton13 = document.querySelector(".reproductor13")
                            let audioEtiqueta13 = document.querySelector("audio")

                            boton13.addEventListener("click", () => {
                              audioEtiqueta13.setAttribute("src", "audios/abecedario/letraH/camino.mp3")
                              audioEtiqueta13.play()
                              console.log(`Reproduciendo: ${audioEtiqueta13.src}`)
                            })
                        </script>
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
                      <h3>Pahtle</h3>
                      <div>
                       Medicina
                    </div>
                    <div>
                      <button class="reproductor14 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton14 = document.querySelector(".reproductor14")
                          let audioEtiqueta14 = document.querySelector("audio")

                          boton14.addEventListener("click", () => {
                            audioEtiqueta14.setAttribute("src", "audios/abecedario/letraH/medicina.mp3")
                            audioEtiqueta14.play()
                            console.log(`Reproduciendo: ${audioEtiqueta14.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor15 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton15 = document.querySelector(".reproductor15")
                            let audioEtiqueta15 = document.querySelector("audio")

                            boton15.addEventListener("click", () => {
                              audioEtiqueta15.setAttribute("src", "audios/abecedario/letraH/padre.mp3")
                              audioEtiqueta15.play()
                              console.log(`Reproduciendo: ${audioEtiqueta15.src}`)
                            })
                        </script>
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
                        <h3>Mehtolin</h3>
                        <div>
                          Piojo
                      </div>
                      <div>
                        <button class="reproductor16 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton16 = document.querySelector(".reproductor16")
                            let audioEtiqueta16 = document.querySelector("audio")

                            boton16.addEventListener("click", () => {
                              audioEtiqueta16.setAttribute("src", "audios/abecedario/letraH/piojo.mp3")
                              audioEtiqueta16.play()
                              console.log(`Reproduciendo: ${audioEtiqueta16.src}`)
                            })
                        </script>
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
                        <h3>Ixhwin</h3>
                        <div>
                          Nieto
                      </div>
                      <div>
                        <button class="reproductor17 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton17 = document.querySelector(".reproductor17")
                            let audioEtiqueta17 = document.querySelector("audio")

                            boton17.addEventListener("click", () => {
                              audioEtiqueta17.setAttribute("src", "audios/abecedario/letraHW/ichan.mp3")
                              audioEtiqueta17.play()
                              console.log(`Reproduciendo: ${audioEtiqueta17.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor18 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton18 = document.querySelector(".reproductor18")
                          let audioEtiqueta18 = document.querySelector("audio")

                          boton18.addEventListener("click", () => {
                            audioEtiqueta18.setAttribute("src", "audios/abecedario/letraHW/semilhwitl.mp3")
                            audioEtiqueta18.play()
                            console.log(`Reproduciendo: ${audioEtiqueta18.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor19 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton19 = document.querySelector(".reproductor19")
                            let audioEtiqueta19 = document.querySelector("audio")

                            boton19.addEventListener("click", () => {
                              audioEtiqueta19.setAttribute("src", "audios/abecedario/letraHW/yehwatl.mp3")
                              audioEtiqueta19.play()
                              console.log(`Reproduciendo: ${audioEtiqueta19.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor20 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton20 = document.querySelector(".reproductor20")
                            let audioEtiqueta20 = document.querySelector("audio")

                            boton20.addEventListener("click", () => {
                              audioEtiqueta20.setAttribute("src", "audios/abecedario/letraHW/tehwatl.mp3")
                              audioEtiqueta20.play()
                              console.log(`Reproduciendo: ${audioEtiqueta20.src}`)
                            })
                        </script>
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
                        <h3>Ilhwikatl</h3>
                        <div>
                          Cielo
                      </div>
                      <div>
                        <button class="reproductor21 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton21 = document.querySelector(".reproductor21")
                            let audioEtiqueta21 = document.querySelector("audio")

                            boton21.addEventListener("click", () => {
                              audioEtiqueta21.setAttribute("src", "audios/abecedario/letrai/ilhwikatl.mp3")
                              audioEtiqueta21.play()
                              console.log(`Reproduciendo: ${audioEtiqueta21.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor22 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton22 = document.querySelector(".reproductor22")
                          let audioEtiqueta22 = document.querySelector("audio")

                          boton22.addEventListener("click", () => {
                            audioEtiqueta22.setAttribute("src", "audios/abecedario/letrai/ichan.mp3")
                            audioEtiqueta22.play()
                            console.log(`Reproduciendo: ${audioEtiqueta22.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor23 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton23 = document.querySelector(".reproductor23")
                            let audioEtiqueta23 = document.querySelector("audio")

                            boton23.addEventListener("click", () => {
                              audioEtiqueta23.setAttribute("src", "audios/abecedario/letrai/muchacha.m4a")
                              audioEtiqueta23.play()
                              console.log(`Reproduciendo: ${audioEtiqueta23.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor24 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton24 = document.querySelector(".reproductor24")
                            let audioEtiqueta24 = document.querySelector("audio")

                            boton24.addEventListener("click", () => {
                              audioEtiqueta24.setAttribute("src", "audios/abecedario/letrai/ilhwitl.mp3")
                              audioEtiqueta24.play()
                              console.log(`Reproduciendo: ${audioEtiqueta24.src}`)
                            })
                        </script>
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
                        <h3>Konetl</h3>
                        <div>
                          Niño
                      </div>
                      <div>
                        <button class="reproductor25 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton25 = document.querySelector(".reproductor25")
                            let audioEtiqueta25 = document.querySelector("audio")

                            boton25.addEventListener("click", () => {
                              audioEtiqueta25.setAttribute("src", "audios/abecedario/letraK/niño.m4a")
                              audioEtiqueta25.play()
                              console.log(`Reproduciendo: ${audioEtiqueta25.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor26 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton26 = document.querySelector(".reproductor26")
                          let audioEtiqueta26 = document.querySelector("audio")

                          boton26.addEventListener("click", () => {
                            audioEtiqueta26.setAttribute("src", "audios/abecedario/letraK/koyutl.mp3")
                            audioEtiqueta26.play()
                            console.log(`Reproduciendo: ${audioEtiqueta26.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor27 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton27 = document.querySelector(".reproductor27")
                            let audioEtiqueta27 = document.querySelector("audio")

                            boton27.addEventListener("click", () => {
                              audioEtiqueta27.setAttribute("src", "audios/abecedario/letraK/kaktle.mp3")
                              audioEtiqueta27.play()
                              console.log(`Reproduciendo: ${audioEtiqueta27.src}`)
                            })
                        </script>
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
                        <h3>Kultsin</h3>
                        <div>
                          Abuelo
                      </div>
                      <div>
                        <button class="reproductor28 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton28 = document.querySelector(".reproductor28")
                            let audioEtiqueta28 = document.querySelector("audio")

                            boton28.addEventListener("click", () => {
                              audioEtiqueta28.setAttribute("src", "audios/abecedario/letraK/abuelo.mp3")
                              audioEtiqueta28.play()
                              console.log(`Reproduciendo: ${audioEtiqueta28.src}`)
                            })
                        </script>
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
            <h5 class="modal-title" id="exampleModalLabel">Ejemplo de palabras en Náhualt con la letra <strong style="color: red">KW</strong></h5>
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
                          Árbol
                      </div>
                      <div>
                        <button class="reproductor29 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton29 = document.querySelector(".reproductor29")
                            let audioEtiqueta29 = document.querySelector("audio")

                            boton29.addEventListener("click", () => {
                              audioEtiqueta29.setAttribute("src", "audios/abecedario/letraKW/kwawitl.mp3")
                              audioEtiqueta29.play()
                              console.log(`Reproduciendo: ${audioEtiqueta29.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor30 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton30 = document.querySelector(".reproductor30")
                          let audioEtiqueta30 = document.querySelector("audio")

                          boton30.addEventListener("click", () => {
                            audioEtiqueta30.setAttribute("src", "audios/abecedario/letraKW/kwaktlan.mp3")
                            audioEtiqueta30.play()
                            console.log(`Reproduciendo: ${audioEtiqueta30.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor31 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton31 = document.querySelector(".reproductor31")
                            let audioEtiqueta31 = document.querySelector("audio")

                            boton31.addEventListener("click", () => {
                              audioEtiqueta31.setAttribute("src", "audios/abecedario/letraKW/kwalle.mp3")
                              audioEtiqueta31.play()
                              console.log(`Reproduciendo: ${audioEtiqueta31.src}`)
                            })
                        </script>
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
                        <h3>kwascuchtle</h3>
                        <div>
                          Lindero
                      </div>
                      <div>
                        <button class="reproductor32 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton32 = document.querySelector(".reproductor32")
                            let audioEtiqueta32 = document.querySelector("audio")

                            boton32.addEventListener("click", () => {
                              audioEtiqueta32.setAttribute("src", "audios/abecedario/letraKW/kwascuchtle.mp3")
                              audioEtiqueta32.play()
                              console.log(`Reproduciendo: ${audioEtiqueta32.src}`)
                            })
                        </script>
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
                        <h3>Ilpia</h3>
                        <div>
                          Amarrar
                      </div>
                      <div>
                        <button class="reproductor33 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton33 = document.querySelector(".reproductor33")
                            let audioEtiqueta33 = document.querySelector("audio")

                            boton33.addEventListener("click", () => {
                              audioEtiqueta33.setAttribute("src", "audios/abecedario/letraL/ilpia.mp3")
                              audioEtiqueta33.play()
                              console.log(`Reproduciendo: ${audioEtiqueta33.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor34 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton34 = document.querySelector(".reproductor34")
                          let audioEtiqueta34 = document.querySelector("audio")

                          boton34.addEventListener("click", () => {
                            audioEtiqueta34.setAttribute("src", "audios/abecedario/letraL/bosque.mp3")
                            audioEtiqueta34.play()
                            console.log(`Reproduciendo: ${audioEtiqueta34.src}`)
                          })
                      </script>
                    </div>
                  </div></td>
                  <td >
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/L/tierra.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Tlalle</h3>
                        <div>
                          Tierra
                      </div>
                      <div>
                        <button class="reproductor35 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton35 = document.querySelector(".reproductor35")
                            let audioEtiqueta35 = document.querySelector("audio")

                            boton35.addEventListener("click", () => {
                              audioEtiqueta35.setAttribute("src", "audios/abecedario/letraL/tierra.m4a")
                              audioEtiqueta35.play()
                              console.log(`Reproduciendo: ${audioEtiqueta35.src}`)
                            })
                        </script>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="a-box">
                      <div class="img-container">
                        <div class="img-inner">
                          <div class="inner-skew">
                            <img src="{{asset('img/imgAlfabeto/L/temprano.jpg')}}">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <h3>Kwalkan</h3>
                        <div>
                          Temprano
                      </div>
                      <div>
                        <button class="reproductor36 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton36 = document.querySelector(".reproductor36")
                            let audioEtiqueta36 = document.querySelector("audio")

                            boton36.addEventListener("click", () => {
                              audioEtiqueta36.setAttribute("src", "audios/abecedario/letraL/temprano.mp3")
                              audioEtiqueta36.play()
                              console.log(`Reproduciendo: ${audioEtiqueta36.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor37 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton37 = document.querySelector(".reproductor37")
                            let audioEtiqueta37 = document.querySelector("audio")

                            boton37.addEventListener("click", () => {
                              audioEtiqueta37.setAttribute("src", "audios/abecedario/letraM/mistle.mp3")
                              audioEtiqueta37.play()
                              console.log(`Reproduciendo: ${audioEtiqueta37.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor38 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton38 = document.querySelector(".reproductor38")
                          let audioEtiqueta38 = document.querySelector("audio")

                          boton38.addEventListener("click", () => {
                            audioEtiqueta38.setAttribute("src", "audios/abecedario/letraM/michin.mp3")
                            audioEtiqueta38.play()
                            console.log(`Reproduciendo: ${audioEtiqueta38.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor39 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton39 = document.querySelector(".reproductor39")
                            let audioEtiqueta39 = document.querySelector("audio")

                            boton39.addEventListener("click", () => {
                              audioEtiqueta39.setAttribute("src", "audios/abecedario/letraM/mihke.mp3")
                              audioEtiqueta39.play()
                              console.log(`Reproduciendo: ${audioEtiqueta39.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor40 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton40 = document.querySelector(".reproductor40")
                            let audioEtiqueta40 = document.querySelector("audio")

                            boton40.addEventListener("click", () => {
                              audioEtiqueta40.setAttribute("src", "audios/abecedario/letraM/masatl.mp3")
                              audioEtiqueta40.play()
                              console.log(`Reproduciendo: ${audioEtiqueta40.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor41 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton41 = document.querySelector(".reproductor41")
                            let audioEtiqueta41 = document.querySelector("audio")

                            boton41.addEventListener("click", () => {
                              audioEtiqueta41.setAttribute("src", "audios/abecedario/letraN/nakatl.mp3")
                              audioEtiqueta41.play()
                              console.log(`Reproduciendo: ${audioEtiqueta41.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor42 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton42 = document.querySelector(".reproductor42")
                          let audioEtiqueta42 = document.querySelector("audio")

                          boton42.addEventListener("click", () => {
                            audioEtiqueta42.setAttribute("src", "audios/abecedario/letraN/nohpaletl.mp3")
                            audioEtiqueta42.play()
                            console.log(`Reproduciendo: ${audioEtiqueta42.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor43 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton43 = document.querySelector(".reproductor43")
                            let audioEtiqueta43 = document.querySelector("audio")

                            boton43.addEventListener("click", () => {
                              audioEtiqueta43.setAttribute("src", "audios/abecedario/letraN/nuchtle.mp3")
                              audioEtiqueta43.play()
                              console.log(`Reproduciendo: ${audioEtiqueta43.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor44 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton44 = document.querySelector(".reproductor44")
                            let audioEtiqueta44 = document.querySelector("audio")

                            boton44.addEventListener("click", () => {
                              audioEtiqueta44.setAttribute("src", "audios/abecedario/letraN/caminar.mp3")
                              audioEtiqueta44.play()
                              console.log(`Reproduciendo: ${audioEtiqueta44.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor45 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton45 = document.querySelector(".reproductor45")
                            let audioEtiqueta45 = document.querySelector("audio")

                            boton45.addEventListener("click", () => {
                              audioEtiqueta45.setAttribute("src", "audios/abecedario/letraO/oselotl.mp3")
                              audioEtiqueta45.play()
                              console.log(`Reproduciendo: ${audioEtiqueta45.src}`)
                            })
                        </script>
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
                      <h3>Okotl</h3>
                      <div>
                       Ocote
                    </div>
                    <div>
                      <button class="reproductor46 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton46 = document.querySelector(".reproductor46")
                          let audioEtiqueta46 = document.querySelector("audio")

                          boton46.addEventListener("click", () => {
                            audioEtiqueta46.setAttribute("src", "audios/abecedario/letraO/ocote.mp3")
                            audioEtiqueta46.play()
                            console.log(`Reproduciendo: ${audioEtiqueta46.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor47 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton47 = document.querySelector(".reproductor47")
                            let audioEtiqueta47 = document.querySelector("audio")

                            boton47.addEventListener("click", () => {
                              audioEtiqueta47.setAttribute("src", "audios/abecedario/letraO/gusano.mp3")
                              audioEtiqueta47.play()
                              console.log(`Reproduciendo: ${audioEtiqueta47.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor48 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton48 = document.querySelector(".reproductor48")
                            let audioEtiqueta48 = document.querySelector("audio")

                            boton48.addEventListener("click", () => {
                              audioEtiqueta48.setAttribute("src", "audios/abecedario/letraO/madrugar.mp3")
                              audioEtiqueta48.play()
                              console.log(`Reproduciendo: ${audioEtiqueta48.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor49 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton49 = document.querySelector(".reproductor49")
                            let audioEtiqueta49 = document.querySelector("audio")

                            boton49.addEventListener("click", () => {
                              audioEtiqueta49.setAttribute("src", "audios/abecedario/letraP/pahtle.mp3")
                              audioEtiqueta49.play()
                              console.log(`Reproduciendo: ${audioEtiqueta49.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor50 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton50 = document.querySelector(".reproductor50")
                          let audioEtiqueta50 = document.querySelector("audio")

                          boton50.addEventListener("click", () => {
                            audioEtiqueta50.setAttribute("src", "audios/abecedario/letraP/puktle.mp3")
                            audioEtiqueta50.play()
                            console.log(`Reproduciendo: ${audioEtiqueta50.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor51 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton51 = document.querySelector(".reproductor51")
                            let audioEtiqueta51 = document.querySelector("audio")

                            boton51.addEventListener("click", () => {
                              audioEtiqueta51.setAttribute("src", "audios/abecedario/letraP/potsitik.mp3")
                              audioEtiqueta51.play()
                              console.log(`Reproduciendo: ${audioEtiqueta51.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor52 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton52 = document.querySelector(".reproductor52")
                            let audioEtiqueta52 = document.querySelector("audio")

                            boton52.addEventListener("click", () => {
                              audioEtiqueta52.setAttribute("src", "audios/abecedario/letraP/mariposa.mp3")
                              audioEtiqueta52.play()
                              console.log(`Reproduciendo: ${audioEtiqueta52.src}`)
                            })
                        </script>
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
                        <h3>Sihsin</h3>
                        <div>
                          Abuela
                      </div>
                      <div>
                        <button class="reproductor53 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton53 = document.querySelector(".reproductor53")
                            let audioEtiqueta53 = document.querySelector("audio")

                            boton53.addEventListener("click", () => {
                              audioEtiqueta53.setAttribute("src", "audios/abecedario/letraS/sinsin.mp3")
                              audioEtiqueta53.play()
                              console.log(`Reproduciendo: ${audioEtiqueta53.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor54 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton54 = document.querySelector(".reproductor54")
                          let audioEtiqueta54 = document.querySelector("audio")

                          boton54.addEventListener("click", () => {
                            audioEtiqueta54.setAttribute("src", "audios/abecedario/letraS/sokitl.mp3")
                            audioEtiqueta54.play()
                            console.log(`Reproduciendo: ${audioEtiqueta54.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor55 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton55 = document.querySelector(".reproductor55")
                            let audioEtiqueta55 = document.querySelector("audio")

                            boton55.addEventListener("click", () => {
                              audioEtiqueta55.setAttribute("src", "audios/abecedario/letraS/sowatl.mp3")
                              audioEtiqueta55.play()
                              console.log(`Reproduciendo: ${audioEtiqueta55.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor56 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton56 = document.querySelector(".reproductor56")
                            let audioEtiqueta56 = document.querySelector("audio")

                            boton56.addEventListener("click", () => {
                              audioEtiqueta56.setAttribute("src", "audios/abecedario/letraS/codorniz.mp3")
                              audioEtiqueta56.play()
                              console.log(`Reproduciendo: ${audioEtiqueta56.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor57 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton57 = document.querySelector(".reproductor57")
                            let audioEtiqueta57 = document.querySelector("audio")

                            boton57.addEventListener("click", () => {
                              audioEtiqueta57.setAttribute("src", "audios/abecedario/letraT/tuchtle.mp3")
                              audioEtiqueta57.play()
                              console.log(`Reproduciendo: ${audioEtiqueta57.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor58 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton58 = document.querySelector(".reproductor58")
                          let audioEtiqueta58 = document.querySelector("audio")

                          boton58.addEventListener("click", () => {
                            audioEtiqueta58.setAttribute("src", "audios/abecedario/letraT/tahtle.mp3")
                            audioEtiqueta58.play()
                            console.log(`Reproduciendo: ${audioEtiqueta58.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor59 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton59 = document.querySelector(".reproductor59")
                            let audioEtiqueta59 = document.querySelector("audio")

                            boton59.addEventListener("click", () => {
                              audioEtiqueta59.setAttribute("src", "audios/abecedario/letraT/tututl.mp3")
                              audioEtiqueta59.play()
                              console.log(`Reproduciendo: ${audioEtiqueta59.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor60 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton60 = document.querySelector(".reproductor60")
                            let audioEtiqueta60 = document.querySelector("audio")

                            boton60.addEventListener("click", () => {
                              audioEtiqueta60.setAttribute("src", "audios/abecedario/letraT/comida.mp3")
                              audioEtiqueta60.play()
                              console.log(`Reproduciendo: ${audioEtiqueta60.src}`)
                            })
                        </script>
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
                          Comprar algo
                      </div>
                      <div>
                        <button class="reproductor61 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton61 = document.querySelector(".reproductor61")
                            let audioEtiqueta61 = document.querySelector("audio")

                            boton61.addEventListener("click", () => {
                              audioEtiqueta61.setAttribute("src", "audios/abecedario/letraTl/comprar.m4a")
                              audioEtiqueta61.play()
                              console.log(`Reproduciendo: ${audioEtiqueta61.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor62 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton62 = document.querySelector(".reproductor62")
                          let audioEtiqueta62 = document.querySelector("audio")

                          boton62.addEventListener("click", () => {
                            audioEtiqueta62.setAttribute("src", "audios/abecedario/letraTl/tlapalle.mp3")
                            audioEtiqueta62.play()
                            console.log(`Reproduciendo: ${audioEtiqueta62.src}`)
                          })
                      </script>
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
                        <h3>Tlamachtilkalle</h3>
                        <div>
                         Escuela
                      </div>
                      <div>
                        <button class="reproductor63 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton63 = document.querySelector(".reproductor63")
                            let audioEtiqueta63 = document.querySelector("audio")

                            boton63.addEventListener("click", () => {
                              audioEtiqueta63.setAttribute("src", "audios/abecedario/letraTl/escuela.m4a")
                              audioEtiqueta63.play()
                              console.log(`Reproduciendo: ${audioEtiqueta63.src}`)
                            })
                        </script>
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
                        <h3>Tlapaka</h3>
                        <div>
                          Lavar ropa
                      </div>
                      <div>
                        <button class="reproductor64 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton64 = document.querySelector(".reproductor64")
                            let audioEtiqueta64 = document.querySelector("audio")

                            boton64.addEventListener("click", () => {
                              audioEtiqueta64.setAttribute("src", "audios/abecedario/letraTl/lavar.m4a")
                              audioEtiqueta64.play()
                              console.log(`Reproduciendo: ${audioEtiqueta64.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor65 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton65 = document.querySelector(".reproductor65")
                            let audioEtiqueta65 = document.querySelector("audio")

                            boton65.addEventListener("click", () => {
                              audioEtiqueta65.setAttribute("src", "audios/abecedario/letraTS/Tsapotl.mp3")
                              audioEtiqueta65.play()
                              console.log(`Reproduciendo: ${audioEtiqueta65.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor66 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton66 = document.querySelector(".reproductor66")
                          let audioEtiqueta66 = document.querySelector("audio")

                          boton66.addEventListener("click", () => {
                            audioEtiqueta66.setAttribute("src", "audios/abecedario/letraTS/tsiktle.mp3")
                            audioEtiqueta66.play()
                            console.log(`Reproduciendo: ${audioEtiqueta66.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor67 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton67 = document.querySelector(".reproductor67")
                            let audioEtiqueta67 = document.querySelector("audio")

                            boton67.addEventListener("click", () => {
                              audioEtiqueta67.setAttribute("src", "audios/abecedario/letraTS/tsopelik.mp3")
                              audioEtiqueta67.play()
                              console.log(`Reproduciendo: ${audioEtiqueta67.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor68 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton68 = document.querySelector(".reproductor68")
                            let audioEtiqueta68 = document.querySelector("audio")

                            boton68.addEventListener("click", () => {
                              audioEtiqueta68.setAttribute("src", "audios/abecedario/letraTS/cabeza.m4a")
                              audioEtiqueta68.play()
                              console.log(`Reproduciendo: ${audioEtiqueta68.src}`)
                            })
                        </script>
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
                          Cuatro
                      </div>
                      <div>
                        <button class="reproductor69 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton69 = document.querySelector(".reproductor69")
                            let audioEtiqueta69 = document.querySelector("audio")

                            boton69.addEventListener("click", () => {
                              audioEtiqueta69.setAttribute("src", "audios/abecedario/letraW/nawe.mp3")
                              audioEtiqueta69.play()
                              console.log(`Reproduciendo: ${audioEtiqueta69.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor70 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton70 = document.querySelector(".reproductor70")
                          let audioEtiqueta70 = document.querySelector("audio")

                          boton70.addEventListener("click", () => {
                            audioEtiqueta70.setAttribute("src", "audios/abecedario/letraW/wehkapan.mp3")
                            audioEtiqueta70.play()
                            console.log(`Reproduciendo: ${audioEtiqueta70.src}`)
                          })
                      </script>
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
                      <div>
                        <button class="reproductor71 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton71 = document.querySelector(".reproductor71")
                            let audioEtiqueta71 = document.querySelector("audio")

                            boton71.addEventListener("click", () => {
                              audioEtiqueta71.setAttribute("src", "audios/abecedario/letraW/barco.mp3")
                              audioEtiqueta71.play()
                              console.log(`Reproduciendo: ${audioEtiqueta71.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor72 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton72 = document.querySelector(".reproductor72")
                            let audioEtiqueta72 = document.querySelector("audio")

                            boton72.addEventListener("click", () => {
                              audioEtiqueta72.setAttribute("src", "audios/abecedario/letraW/guajolote.mp3")
                              audioEtiqueta72.play()
                              console.log(`Reproduciendo: ${audioEtiqueta72.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor73 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton73 = document.querySelector(".reproductor73")
                            let audioEtiqueta73 = document.querySelector("audio")

                            boton73.addEventListener("click", () => {
                              audioEtiqueta73.setAttribute("src", "audios/abecedario/letraX/Xuchitl.mp3")
                              audioEtiqueta73.play()
                              console.log(`Reproduciendo: ${audioEtiqueta73.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor74 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton74 = document.querySelector(".reproductor74")
                          let audioEtiqueta74 = document.querySelector("audio")

                          boton74.addEventListener("click", () => {
                            audioEtiqueta74.setAttribute("src", "audios/abecedario/letraX/guayaba.mp3")
                            audioEtiqueta74.play()
                            console.log(`Reproduciendo: ${audioEtiqueta74.src}`)
                          })
                      </script>
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
                        <h3>Xuletl</h3>
                        <div>
                         Hongo
                      </div>
                      <div>
                        <button class="reproductor75 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton75 = document.querySelector(".reproductor75")
                            let audioEtiqueta75 = document.querySelector("audio")

                            boton75.addEventListener("click", () => {
                              audioEtiqueta75.setAttribute("src", "audios/abecedario/letraX/hongo.mp3")
                              audioEtiqueta75.play()
                              console.log(`Reproduciendo: ${audioEtiqueta75.src}`)
                            })
                        </script>
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
                        <h3>Xokok</h3>
                        <div>
                          Limón
                      </div>
                      <div>
                        <button class="reproductor76 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton76 = document.querySelector(".reproductor76")
                            let audioEtiqueta76 = document.querySelector("audio")

                            boton76.addEventListener("click", () => {
                              audioEtiqueta76.setAttribute("src", "audios/abecedario/letraX/xokok.mp3")
                              audioEtiqueta76.play()
                              console.log(`Reproduciendo: ${audioEtiqueta76.src}`)
                            })
                        </script>
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
                        <h3>Yehyekatl</h3>
                        <div>
                          Viento
                      </div>
                      <div>
                        <button class="reproductor77 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton77 = document.querySelector(".reproductor77")
                            let audioEtiqueta77 = document.querySelector("audio")

                            boton77.addEventListener("click", () => {
                              audioEtiqueta77.setAttribute("src", "audios/abecedario/letraY/viento.mp3")
                              audioEtiqueta77.play()
                              console.log(`Reproduciendo: ${audioEtiqueta77.src}`)
                            })
                        </script>
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
                    <div>
                      <button class="reproductor78 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                      <audio src=""></audio>
                      <script>
                          let boton78 = document.querySelector(".reproductor78")
                          let audioEtiqueta78 = document.querySelector("audio")

                          boton78.addEventListener("click", () => {
                            audioEtiqueta78.setAttribute("src", "audios/abecedario/letraY/fijol.m4a")
                            audioEtiqueta78.play()
                            console.log(`Reproduciendo: ${audioEtiqueta78.src}`)
                          })
                      </script>
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
                        <h3>Yullotle</h3>
                        <div>
                         Corazón
                      </div>
                      <div>
                        <button class="reproductor79 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton79 = document.querySelector(".reproductor79")
                            let audioEtiqueta79 = document.querySelector("audio")

                            boton79.addEventListener("click", () => {
                              audioEtiqueta79.setAttribute("src", "audios/abecedario/letraY/corazon.mp3")
                              audioEtiqueta79.play()
                              console.log(`Reproduciendo: ${audioEtiqueta79.src}`)
                            })
                        </script>
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
                      <div>
                        <button class="reproductor80 btn"><i class="fa fa-play-circle" aria-hidden="true"></i> Pronunciación</button>
                        <audio src=""></audio>
                        <script>
                            let boton80 = document.querySelector(".reproductor80")
                            let audioEtiqueta80 = document.querySelector("audio")

                            boton80.addEventListener("click", () => {
                              audioEtiqueta80.setAttribute("src", "audios/abecedario/letraY/azul.mp3")
                              audioEtiqueta80.play()
                              console.log(`Reproduciendo: ${audioEtiqueta80.src}`)
                            })
                        </script>
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
