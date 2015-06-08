<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', '2daw01_root');
define('DB_SERVER_PASSWORD', 'root');
define('DB_DATABASE', '2daw01_buscatuconcierto');



$conexion=mysql_connect (DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD) or die ('problema conectando porque :' . mysql_error());
mysql_select_db (DB_DATABASE,$conexion);

	$cont=1;
	$query = "SELECT * FROM provincias";
	$results = mysql_query($query) or die("fallo");
	echo "<option id='0'>Seleccionar provincias...</option>";
	while( $row = mysql_fetch_row($results) ) {
		
		echo "<option id='".$cont."'>".utf8_encode($row[2])."</option>";	
		$cont++;
	}




?>