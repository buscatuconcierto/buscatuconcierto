<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/

    include 'head.php';
    include 'header3.php';
 ?>

  <section>
      <h1 id="tit_eliminar">Gesti&oacute;n de eventos</h1><div id="comillas">
 <?php    echo ($_SESSION['eventos']); ?>
      <div id="nuevo-con">
          <a href="<?= APP_W; ?>insevent">Crear Nuevo evento
            <!-- '.APP_W.'insevent -->
            <img src='<?= APP_W; ?>pub/theme/k/img/concert.png' alt="Logo concierto"/>
          </a>
       </div> 
          
  </section>