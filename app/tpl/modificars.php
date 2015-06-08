<?php
    include 'head.php';
    include 'header.php';
?>
<section>
    <h2>Modificar Stock</h2>
    <div class="formreg">
                
                 <form class="registre" name="formmodificar" method="post" action="<?= APP_W; ?>modificars/modificars"> 
                     <div class="izquierda">
                        <br>
                        <div id="columna1ins">
                        <b><label for="evento">evento: </label></b>
                        <input type="text" name="evento" value="" placeholder="Introduce un evento" required>
                        <br>
                        <br>
                        <b><label for="cantidad">cantidad: </label></b>
                        <input type="text" name="cantidad" value="" placeholder="Introduce una cantidad" required>
                        <br>
                        <br>

                        
                        </div>
                        <div id="columna2ins">
                        <b><label for="Precio">Precio: </label></b>
                        <input type="text" placeholder="precio" name="precio" value="" required><br>
                        <br>
                        <b><label for="Vendidas">Vendidas: </label></b>
                        <input type="text" placeholder="" name="vendidas" value="0" required><p>dejar a 0 si es nuevo</p>
                        <br>
                        <br>
                        <input id="event" type="submit" value="Crear" id="eventsend">
                        </div>
                    </div>
                    
                </form>
           
              </div>
  </section>

