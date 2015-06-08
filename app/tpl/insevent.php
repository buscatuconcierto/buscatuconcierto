<?php
    include 'head.php';
    include 'header.php';
?>
<section>
    <h2>Creacion de Evento</h2>
    <div class="formreg">
                <!-- <form class="registre" name="formregister" method="post" action="<?= APP_W; ?>insevent/insevent">
                 --><form class="registre" name="formregister" method="post" action="<?= APP_W; ?>insert/insevent">  
                    <div class="izquierda">
                        <br>
                        <div id="columna1insevent">
                        <b><label for="name">Nombre: </label></b>
                        <select  name="name" id="combo-eventos" required></select> <a style="color:black;" href="<?= APP_W; ?>instock">Agregar</a>
                        <br>
                        <br>
                        <b><label for="fecha">Fecha: </label></b>
                        <input type="text" name="fecha" value="" placeholder="Introduce una fecha" required>
                        <br>
                        <br>
                        <b><label for="hora">Hora: </label></b>
                        <input type="text" placeholder="Hora" name="hora" value="" placeholder="aaa@gmail.com" title="aaa@gmail.com" required>
                        <br>
                        <br>
                        <b><label for="imagen">Imagen: </label></b>
                        <input type="text" name="imagen" value="" placeholder="url de la imagen" required>
                        <br>
                        <br>
                        </div>
                        <div id="columna2insevent">
                        <b><label for="localizacion">Localizacion: </label></b>
                        <select id="combo-localizacion"  name="localizacion" required></select><a style="color:black;" href="<?= APP_W; ?>insubi">Agregar</a>
                        <br>
                        <br>
                        <b><label for="descripcion">Descripcion: </label></b>
                        <input type="text" name="descripcion" value="" placeholder="Descripcion" required>
                        <br>
                        <br>
                        <b><label for="puntos">Puntos: </label></b>
                        <input type="text" name="puntos" value="" placeholder="Puntos" required>
                        <br>
                        <br>
                        
                        <input id="event" type="submit" value="Crear" id="eventsend">
                        </div>
                    </div>
                    
                </form>
           
              </div>
  </section>