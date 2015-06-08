<?php 
 
$server = "localhost";
$user = "2daw01_root";
$pass = "root";
$bd = "2daw01_buscatuconcierto";
 
//Creamos la conexión
@$conexion = mysqli_connect($server, $user, $pass,$bd); //quitamos el die porque sino matamos la conexion
 
 
if($conexion==true)
{
	
	//generamos la consulta
	$sql = "SELECT * FROM municipios";
	mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
	 
	if(!$result = mysqli_query($conexion, $sql)) die();
	 
	$localizaciones = array(); //creamos un array
	 
	while($row = mysqli_fetch_array($result)) 
	{ 
		$nombre=$row['municipio'];
		$localizaciones[] = array('nombre'=> $nombre);
	}
		
	//desconectamos la base de datos
	$close = mysqli_close($conexion) 
	or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
	  
	 
	//Creamos el JSON
	$json_string = json_encode($localizaciones);
	
	echo $json_string;
	
}
 
?>