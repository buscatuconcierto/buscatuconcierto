<?php
    include 'head.php';
    include 'header.php';
?>
<section>
    <h2>Registro</h2>
    <div class="formreg">
                <form class="registre" name="formregister" method="post" action="<?= APP_W; ?>insert/insert">
                    <!--<div id="hello"></div><!-- this is to show Hello name message -->
                    <div class="izquierda">
                        <h1>Datos personales</h1>
                        <br>
                        <div id="columna1">
                        <b><label for="name">Nombre: </label></b>
                        <input type="text" name="name" value="" placeholder="Introduce un nombre" required>
                        <br>
                        <br>
                        <b><label for="apellidos">Apellidos: </label></b>
                        <input type="text" name="apellidos" value="" placeholder="Introduce tus apellidos" required>
                        <br>
                        <br>
                        <b><label for="email">Correo: </label></b>
                        <input type="email" placeholder="aaa@gmail.com" name="email" value="" placeholder="aaa@gmail.com" title="aaa@gmail.com" required>
                        <br>
                        <br>
                        
                        </div>
                        <div id="columna2">
                        <b><label for="dni">DNI: </label></b>
                        <input type="text" name="dni" value="" placeholder="Introduce un dni" required>
                        <br>
                        <br>
                        <b><label for="poblacion">Poblacion: </label></b>
                        <input type="text" name="poblacion" value="" placeholder="Introduce una poblacion" required>
                        <br>
                        <br>
                        <b><label for="fecha">Fecha de nacimiento: </label></b>
                        <input type="text" name="fecha" value="" placeholder="dd/mm/aaaa" required>
                        <br>
                        <br>
                        </div>
                    </div>
                    <div class="derecha">
                        <h1>Datos de usuario</h1>
                        <br>
                        <b><label for="nusuario">Nombre de usuario: </label></b>
                        <input type="text" name="nusuario" value="" placeholder="Introduce un nombre de usuario" required>
                        <br>
                        <br>
                        <b><label for="password">Contraseña: </label></b>
                        <input type="password" name="password" value=""  placeholder="Introduce una contraseña"required>
                        <br>
                        <br>
                        <b><label for="rpassword">Repetir Contraseña: </label></b>
                        <input type="password" name="rpassword" value="" placeholder="Repetir la contraseña" required>
                        <br>
                        <br>
                        <input id="no" type="submit" value="Registro" id="regsend">
                    </div>
                    
                </form>
           
              </div>
  </section>