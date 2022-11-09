$(document).ready(function () {
    $('input[type=checkbox]:checked').each( function () {
       
       if ($(this).val() == 'cuerpo') {
 
          $('#opcion').html(`<select name="humano" id="humano" class="form-control">
          <option>Selecciona una opción</option>
          <option value="humanf" data-img="img/hombref.png" data-img2="img/mujerf.png">Parte frontal</option>
          <option value="humanp" data-img="img/hombrep.jpg" data-img2="img/mujerp.png">Parte posterior</option>
       </select>
       <input type="hidden" value="`+ $(this).val() + `" id="seleccion">`)
 
       }
 
       $("#humano").on("change", function () {
 
          if ($('#seleccion').val() == 'cuerpo') {
             $('#sexo').html(`<div class="form-check form-check-inline mt-2">
             <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre"
             <label class="add-margin" for="hombre">Hombre</label
           </div>
           
           <div class="form-check form-check-inline">
             <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer"
             <label class="add-margin" for="mujer"> Mujer</label>
           </div>`)
          }
 
          $("input[type=radio][name=sexo]").on("change", function () {
             if ($('#seleccion').val() == 'cuerpo') {
                if ($('#humano').val() == 'humanf') {
                   if ($(this).val() == 'hombre') {
                      imagep = $('select[name=humano] option:selected').attr('data-img');
 
                      $('#humanImg').html('<img src="' + imagep + '" id="humanp" height="450" usemap="#myMap" class="map">')
 
                      $('.map').maphilight();
                      
                   }
                   if ($(this).val() == 'mujer') {
                      imagep = $('select[name=humano] option:selected').attr('data-img2');
 
                      $('#humanImg').html('<img src="' + imagep + '" id="humanp" height="450">')
                   }
                }
                if ($('#humano').val() == 'humanp') {
                   if ($(this).val() == 'hombre') {
                      imagep = $('select[name=humano] option:selected').attr('data-img');
 
                      $('#humanImg').html('<img src="' + imagep + '" id="humanp" height="450">')
                   }
                   if ($(this).val() == 'mujer') {
                      imagep = $('select[name=humano] option:selected').attr('data-img2');
 
                      $('#humanImg').html('<img src="' + imagep + '" id="humanp" height="450">')
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
                   <td id="td_cuerpo">Tsonteko o kwaitl, </td>
                  
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
     }
    });
 })