$(document).ready(function () {
      $('input[type=checkbox]:checked').each( function () {
         
         if ($(this).val() == 'cuerpo') {
   
            $('#opcion').html(`
            <input type="checkbox" name="humano" id="humano" value="humanf" checked data-img="img/hombref.png" >
            
         <input type="hidden" value="`+ $(this).val() + `" id="seleccion">`)
   
         }
   
         $("input[type=checkbox]:checked").each( function () {
   
            if ($('#seleccion').val() == 'cuerpo') {
               $('#sexo').html(`
            <input type="checkbox" name="sexo" id="hombre" value="hombre" checked data-img="img/hombref.png" >
            `)
            }
   
            $("input[type=checkbox]:checked").each( function () {
               if ($('#seleccion').val() == 'cuerpo') {
                  if ($('#humano').val() == 'humanf') {
                     if ($(this).val() == 'hombre') {
                        imagep = $('select[name=humano] option:selected').attr('data-img');
                        $('#humanImg').html('<img src="img/hombref.png" id="humanp2" height="450" usemap="#myMap" class="map">')
                        $('.map').maphilight();
                     }
                  }
               }
            })
         })
      })
   
      
      $(".area").on("click", function (e) {
         e.preventDefault();
            
         
         var title = $(this).attr('id');
         
         if (title === "cabeza") {
                  $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
               <thead style="text-align:center">
               <tr>
                     <th>Parte del cuerpo</th>
                     <th>Parte del cuerpo en Nahuatl</th>
                  <th></th>
               </tr>
            </thead>
            
               <tr style="color:#32383e;text-align:center">
                     <td id="td_cuerpo">Cabeza</td>
                     <td id="td_cuerpo">kwaitl, </td>
                     
               </tr>
         
               </table>`);
         }else if (title==="cuello") {
            $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
            <thead style="text-align:center">
            <tr>
                  <th>Parte del cuerpo</th>
                  <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
            </tr>
         </thead>
         
            <tr style="color:#32383e;text-align:center">
                  <td id="td_cuerpo">Cuello</td>
                  <td id="td_cuerpo">Kechkwawkio</td>
                  
            </tr>
      
            </table>`);
         }else if (title == "abdomen") {
            $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
            <thead style="text-align:center">
            <tr>
                  <th>Parte del cuerpo</th>
                  <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
            </tr>
         </thead>
         
            <tr style="color:#32383e;text-align:center">
                  <td id="td_cuerpo">Estomago</td>
                  <td id="td_cuerpo">Ihtetl</td>
                  
            </tr>
      
            </table>`);
         }else if (title == "ojo") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Ojo</td>
               <td id="td_cuerpo">Ixtelolohtle</td>
               
         </tr>
      
         </table>`);
      }else if (title == "oreja") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Oreja</td>
               <td id="td_cuerpo">Nakastle</td>
               
         </tr>
      
         </table>`);
      }else if (title == "boca") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Boca</td>
               <td id="td_cuerpo">Kamaktle</td>
               
         </tr>
      
         </table>`);
      }else if (title == "nariz") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Nariz</td>
               <td id="td_cuerpo">Ekahtsolle</td>
               
         </tr>
      
         </table>`);
      }else if (title == "mano") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Mano</td>
               <td id="td_cuerpo">Maitl</td>
               
         </tr>
      
         </table>`);
      }else if (title == "rodilla") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Rodilla</td>
               <td id="td_cuerpo">Tlankwate</td>
               
         </tr>
      
         </table>`);
      }else if (title == "pie") {
         $('.card-header > span').html(`<table  class="table table-dark"  id="tabla_cuerpo" >
         <thead style="text-align:center">
         <tr>
               <th>Parte del cuerpo</th>
               <th>Parte del cuerpo en Nahuatl</th>
               <th></th>
         </tr>
      </thead>
      
         <tr style="color:#32383e;text-align:center">
               <td id="td_cuerpo">Pie</td>
               <td id="td_cuerpo"></td>
               
         </tr>
      
         </table>`);
      }
      });
   })