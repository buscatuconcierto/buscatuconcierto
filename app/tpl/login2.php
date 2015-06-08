  <section>
  <p>

 <?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/
/*
echo "<strong>Bienvenido ".$_SESSION['user']."</strong>";*/

include 'head.php';
include 'header.php';

            echo ("hola ".$_SESSION['usuario'].'2');
            $menu = '<div id="menu"><h1>Panel de Administraci&oacute;n</h1><br>';


if($_SESSION['rol']==1){
$menu.= '<div id="puntos">
<div id="punto1">
    <h2>Comprar</h2>
    <br>
    <img src="../pub/theme/k/img/ca.png"></img>
    <p>Busca los mejores eventos en tu ciudad y compra entradas.</p>
</div>
<div id="punto2">
    <h2>Conseguir</h2>
    <br>
    <img src="../pub/theme/k/img/puntos.png"></img>
    <p>Con cada compra consigue puntos.</p>
</div>
<div id="punto3">
    <h2>Utilizar y guardar</h2>
    <br>
    <img src="../pub/theme/k/img/mone.png"></img>
    <p>Una vez obtenidos tus puntos usalos en tu siguiente compra.</p>
</div>
</div>

';

    //imagen de puntos

}else{
    $menu.= '<div id="menu2">'
                . '<a id="enlaceuser" href="'.APP_W.'eliminar/eliminar"><div id="gest-user">'
                    . 'Gesti&oacute;n de usuarios
                     <img src="../pub/theme/k/img/user.png"></img>  
                </div></a> 
        <br><br>
    <a id="enlaceevent" href="'.APP_W.'eliminare/eliminare"><div id="gest-event">
            Gesti&oacute;n de eventos
             <img src="../pub/theme/k/img/concert.png"></img> 
        </div></a>
        <br><br>
    <a id="enlacestock" href="'.APP_W.'eliminars/eliminars"><div id="gest-stock">

                Gesti&oacute;n de Stock
            <img src="../pub/theme/k/img/stock.png"></img>
        </div></a>  
        <br><br>
    <a id="enlaceubi" href="'.APP_W.'eliminaru/eliminaru"><div id="gest-ubi">
            Gesti&oacute;n de ubicaci&oacute;n
                <img src="../pub/theme/k/img/mapa.png"></img>'
        . '</div></a>  
            
        <br><br>
        <a id="enlacexml" href="'.APP_W.'export"><div id="gest-xml">
            Serializar xml
                <img src="../pub/theme/k/img/xml.png"></img>
            </div></a>';


}
echo ($menu);

// echo "<br><br>";
// echo "Bienvenido ";
// echo $_SESSION['user'];

?></p>


  </section>