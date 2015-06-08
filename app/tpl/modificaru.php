<?php
    include 'head.php';
    include 'header.php';
?>
<section>
    <h2>Modificar Ubicacion</h2>
    <div class="formreg">
                
                 <form class="registre" name="formmodificar" method="post" action="<?= APP_W; ?>modificaru/modificaru"> 
<div class="izquierda">
                        <br>
                        <div id="columna1ins">
                        <b><label for="nombre">nombre local: </label></b>
                        <input type="text" name="nombre" value="" placeholder="Introduce un nombre" required>
                        <br>
                        <br>
                        <b><label for="direccion">direccion: </label></b>
                        <input type="text" name="direccion" value="" placeholder="Introduce una direccion" required>
                        <br>
                        <br>
                        <b><label for="poblacion">poblacion: </label></b><!-- sera select -->
                        <select  name="poblacion" id="combo-municipios" style="width:204px;" required></select> 
                        <!-- <input type="text" name="poblacion" value="" placeholder="Introduce un poblacion" required>
                         --><br>
                        <br>
                        <b><label for="cp">codigo postal: </label></b>
                        <input type="text" name="cp" value="" placeholder="Introduce una codigo postal" required>
                        <br>
                        <br>
                        <b><label for="provincia">provincia: </label></b><!-- sera select -->
                        <select  name="provincia" id="combo-provincias" required></select> 
                        <!-- <input type="text" name="provincia" value="" placeholder="Introduce una provincia" required>
                         --><br>
                        <br>
<!-- nombre,direccion,poblacion,cp,provincia,pais,aforo,mapa,parking,hoteles -->
                        
                        </div>
                        <div id="columna2ins">
                        <b><label for="pais">pais: </label></b>
                        <input type="text" placeholder="pais" name="pais" value="españa" required><br>
                        <br>
                        <br>
                        <b><label for="aforo">aforo: </label></b>
                        <input type="text" placeholder="200" name="aforo" value="" required>
                        <br>
                        <br>
                        <b><label for="mapa">URL del mapa: </label></b>
                        <input type="text" placeholder="mapa" name="mapa" value="" required><br>
                        <br>
                        <br>
                        <b><label for="parking">URL mapa con parking: </label></b>
                        <input type="text" placeholder="url mapa con filtro parking" name="parking" value="" required>
                        <br><!--  -->
                        <br>
                        <b><label for="hoteles">URL mapa con hoteles: </label></b>
                        <input type="text" placeholder="url mapa con filtro hoteles" name="hoteles" value="" required>
                        <br>
                        <br>
                        <input id="event" type="submit" value="Crear" id="eventsend">
                        </div>
                    </div>
                    
                </form>
           
              </div>
  </section>

