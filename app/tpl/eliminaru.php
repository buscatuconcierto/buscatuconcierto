<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/

    include 'head.php';
    include 'header3.php';
 ?>

  <section>
      <h1 id="tit_eliminar">Gesti&oacute;n de Ubicacion</h1><div id="comillas">
 <?php    echo ($_SESSION['ubi']); ?>
      <div id="nuevo-ubi">
          <a href="<?= APP_W; ?>insubi">Crear Nueva Ubicacion
            <!-- '.APP_W.'insevent -->
              <img src='<?= APP_W; ?>pub/theme/k/img/mapa.png' alt="logo mapa"/>
          </a>
       </div> 
          
  </section>