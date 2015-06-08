<?php
    include 'head.php';
    include 'header.php';
?>
<section>
    <h2>Creacion de Ubicacion</h2><!--En proceso-->
    <div class="formreg">
                 <form class="registre" name="formregister" method="post" action="<?= APP_W; ?>insert/insubi">  
                    <div class="izquierda">
                        <br>
                        <div id="columna1ubi">
                        <b><label for="nombre">Nombre local: </label></b>
                        <input type="text" name="nombre" value="" placeholder="Introduce un nombre" required>
                        <br>
                        <br>
                        <b><label for="direccion">Direccion: </label></b>
                        <input type="text" name="direccion" value="" placeholder="Introduce una direccion" required>
                        <br>
                        <br>
                        <b><label for="poblacion">Poblacion: </label></b>
                        <select  name="poblacion" id="combo-municipios" required></select> 
                        <!-- <input type="text" name="poblacion" value="" placeholder="Introduce un poblacion" required>
                         --><br>
                        <br>
                        <b><label for="cp">Codigo postal: </label></b>
                        <input type="text" name="cp" value="" placeholder="Introduce una codigo postal" required>
                        <br>
                        <br>
                        <b><label for="provincia">Provincia: </label></b>
                        <select  name="provincia" id="combo-provincias" required></select> 
                        <!-- <input type="text" name="provincia" value="" placeholder="Introduce una provincia" required>
                         --><br>
                        <br>
                        <b><label for="pais">Pais: </label></b>
                        <input type="text" placeholder="Pais" name="pais" value="España" required><br>
<!-- nombre,direccion,poblacion,cp,provincia,pais,aforo,mapa,parking,hoteles -->
                        
                        </div>
                        <div id="columna2ubi">
                        
                        <br>
                        <br>
                        <b><label for="aforo">Aforo: </label></b>
                        <input type="text" placeholder="200" name="aforo" value="" required>
                        <br>
                        <br>
                        <b><label for="mapa">URL del mapa: </label></b>
                        <input type="text" placeholder="Mapa" name="mapa" value="" required><br>
                        <br>
                        <b><label for="parking">URL mapa con parking: </label></b>
                        <input type="text" placeholder="Url mapa con filtro parking" name="parking" value="" required>
                        <br><!--  -->
                        <br>
                        <b><label for="hoteles">URL mapa con hoteles: </label></b>
                        <input type="text" placeholder="Url mapa con filtro hoteles" name="hoteles" value="" required>
                        <br>
                        <br>
                        <input id="event" type="submit" value="Crear" id="eventsend">
                        </div>
                    </div>
                    
                </form>
           
              </div>
  </section>