<?php
    include 'head.php';
    include 'header.php';
?>
<section>
    <h2>Creacion de Stock</h2>
    <div class="formstock">
                 <form class="registre" name="formregister" method="post" action="<?= APP_W; ?>insert/instock">  
                    <div class="izquierda">
                        <br>
                        <div id="columna1ins">
                        <b><label for="evento">Evento: </label></b>
                        <input type="text" name="evento" value="" placeholder="Introduce un evento" required>
                        <br>
                        <br>
                        <b><label for="cantidad">Cantidad: </label></b>
                        <input type="text" name="cantidad" value="" placeholder="Introduce una cantidad" required>
                        <br>
                        <br>

                        
                        </div>
                        <div id="columna2ins">
                        <b><label for="Precio">Precio: </label></b>
                        <input type="text" placeholder="Precio" name="precio" value="" required><br>
                        <br>
                        <b><label for="Vendidas">Vendidas: </label></b>
                        <input type="text" placeholder="" name="vendidas" value="0" required><label id="a0">Dejar a 0 si es nuevo</label>
                        <br>
                        <br>
                        <input id="event" type="submit" value="Crear" id="eventsend">
                        </div>
                    </div>
                    
                </form>
           
              </div>
  </section>