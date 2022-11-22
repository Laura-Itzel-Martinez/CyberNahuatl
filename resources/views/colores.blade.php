@extends('layouts.plantilla3')
@extends('layouts.plantilla2')




@section('content')

<body  id="id_colores">
    <div class="container" id="contenedor_colores">
      <div class="row">
        <div class="col" style="text-align: center">
          <span><p style="color: black"><h1 class="display-1">COLORES NAHUATL</h1></p></span>
        </div>
      </div>
      <br>
        <div class="row">
            <div class="col-md-6">
                <br><br><br>
                <center><h1 STYLE="font-size: 30px;color:#000">Has click sobre el boton</h1> <br>
                   
                    <br><br><br><br>
                    <input type="button" value="Girar" onclick="miRuleta.startAnimation();" class="btn btn-success btn-lg"
                          style="width: 150px;margin-left: 0px;border: 2px solid #ffffff">
                </center>
                <br><br>
            </div>
            <div class="col-sm-2">
                <canvas id="canvas" height="600px" width="600px">
                </canvas>
            </div>
        </div>
    </div>
    
    
    <script>
        var miRuleta = new Winwheel({
    
            'numSegments' : 8,
            'outerRadius' : 270,
            'segments':[
                {'fillStyle': 'red', 'text': 'Color Rojo'},
                {'fillStyle': '#0000FF', 'text': 'Color Azul'},
                {'fillStyle': 'orange', 'text': 'Color Naranja'},
                {'fillStyle': '#00AAE4', 'text': 'Color Azul Cielo'},
                {'fillStyle': '#ffffff', 'text': 'Color Blanco'},
                {'fillStyle': 'yellow', 'text': 'Color Amarillo'},
                {'fillStyle': '#800080', 'text': 'Color Morado'},
                {'fillStyle': '#808080', 'text': 'Color Gris'},
                
    
            ],
            'animation':{
                'type':'spinToStop',
                'duration': 6,
                'callbackFinished':'Mensaje()',
                'callbackAfter':'dibujarIndicador()'
            }
        });
    
        dibujarIndicador();
        function Mensaje() {
            var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
            
            if(SegmentoSeleccionado.text == "Color Rojo"){
                $('#exampleModal').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Azul"){
                $('#exampleModal2').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Naranja"){
                $('#exampleModal3').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Azul Cielo"){
                $('#exampleModal4').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Blanco"){
                $('#exampleModal5').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Amarillo"){
                $('#exampleModal6').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Morado"){
                $('#exampleModal7').modal({backdrop:'static'});
            }
            if(SegmentoSeleccionado.text == "Color Gris"){
                $('#exampleModal8').modal({backdrop:'static'});
            }
    
            miRuleta.stopAnimation(false);
            miRuleta.rotationAngle = 0;
            miRuleta.draw();
            dibujarIndicador();
        }
        function dibujarIndicador() {
            var ctx = miRuleta.ctx;
            ctx.strokeStyle = 'navy';
            ctx.fillStyle = 'black';
            ctx.lineWidth = 2;
            ctx.beginPath();
            ctx.moveTo(300,0);
            ctx.lineTo(320,0);
            ctx.lineTo(300,40);
            ctx.lineTo(280,0);
            ctx.stroke();
            ctx.fill();
        }
    
    
    
    </script>
    
    
    <!-- -->
    <!-- aqui introduccir color rojo-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Color Rojo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" >
              <table class="table table-striped" id="t_colores">
                <thead >
                  <tr>
                    
                    <th>Color en Nahuatl</th>
                    
                    <th >Color en Español</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <td>chichiltik</td>
                    <td>Rojo</td>
                   
                  </tr>
                 
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              
            </div>
          </div>
        </div>
      </div>
    
    
    <!-- aqui introduccir color azul-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Azul</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td>yawitl</td>
                  <td>Azul</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    
    <!-- aqui introduccir color naranja-->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Naranja</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td> tlikosnaltik</td>
                  <td>Naranja</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- aqui introduccir color Azul cielo-->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Azul cielo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td>ilhwikayawitl</td>
                  <td>Azul cielo</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- aqui introduccir color blanco-->
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Blanco</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td> istak</td>
                  <td>Blanco</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    <!-- color amarillo-->
    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Amarillo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td>kostik </td>
                  <td>Amarillo</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    <!--  color morado-->
    <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Morado</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td> kamohtik</td>
                  <td>Morado</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
     <!--  color Gris-->
     <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Color Gris</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" >
            <table class="table table-striped" id="t_colores">
              <thead >
                <tr>
                  
                  <th>Color en Nahuatl</th>
                  
                  <th >Color en Español</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td>nextik</td>
                  <td>Gris</td>
                 
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    
    
    
  
    
    
    </body>





@endsection