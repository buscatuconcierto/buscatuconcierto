<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/

    include 'head.php';
    include 'header.php';
 ?>

  <section>
      <h1 id="tit_eliminar">Gesti&oacute;n de usuarios</h1><div id="comillas">
 <?php    echo ($_SESSION['usuarios']); ?>
          <a href="<?= APP_W; ?>reg" id="enlace-us"><div id="nuevo-us">
          Crear Nuevo usuario
          <img src='<?= APP_W; ?>pub/theme/k/img/user.png' alt="logo user"/>
          
       </div> </a>
          
  </section>