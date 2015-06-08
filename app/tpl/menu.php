<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/

    include 'head.php';
    include 'header.php';

if(isset($_SESSION['rol'])){
$menu = '<div id="menu"><div>Inicio</div><br><br>';

if($_SESSION['rol']==1){
	$menu.= '<br><div><a href="'.APP_W.'reg">Insertar</a></div>
	<div><a href="'.APP_W.'modificar">Modificar</a></div>
	<div><a href="'.APP_W.'eliminar/eliminar">Eliminar</a></div>';

	
}else{
	$menu.= '<br><div><a href="'.APP_W.'modificar">Modificar</a></div>
	<div><a href="'.APP_W.'modificar">Reservar</a></div>
	<div><a href="'.APP_W.'modificar">Ver pedido</a></div>';	
}

$menu.= '<div>Bienvenido '.$_SESSION['user'].'&nbsp;<a href="'.APP_W.'home/salir">Cerrar Sesion </a></div></div>';

echo $menu;
}


?>