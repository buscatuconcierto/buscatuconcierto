<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/

    include 'head.php';
    include 'header3.php';
 ?>

  <section>
      <h1 id="tit_eliminar">Gesti&oacute;n de Stock</h1><div id="comillas">
 <?php    echo ($_SESSION['stock']); ?>
      <div id="nuevo-s">
          <a href="<?= APP_W; ?>instock">Crear Nuevo stock
            <!-- '.APP_W.'insevent -->
            <img src='<?= APP_W; ?>pub/theme/k/img/stock.png' alt="logo stock"/>
          </a>
       </div> 
          
  </section>