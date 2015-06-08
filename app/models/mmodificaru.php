<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/ 

/**
* modelo mModificaru
*/
	class mModificaru extends Model{
  
		function __construct(){
			parent::__construct();
		}

/**
* funcion spaceout cambia espacio en blanco por barrabaja
*/
 function spaceout($string){

    $string = str_replace(
        array(' '),
        array('_'),
        $string
    );
    return $string;
 }

/**
* funcion modificaru modifica ubicacion filtrando por el nombre
*/
 function modificaru($nombre,$direccion,$poblacion,$cp,$provincia,$pais,$aforo,$mapa,$parking,$hoteles){
   $nombre=$this->spaceout($nombre);
   $direccion=$this->spaceout($direccion);
  try{
$sql = "UPDATE ubicacion SET ";
$vector = array($direccion,$poblacion,$cp,$provincia,$pais,$aforo,$mapa,$parking,$hoteles);          
$vector2 = array('direccion','poblacion','codigo_postal','provincia','pais','aforo','mapa','parking','hoteles');
$max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .=  utf8_decode($vector2[$i - 1]) . "="."'";
                    $sql .=  utf8_decode($vector[$i - 1]) ."'".",";
                } else {
                    $sql .=  utf8_decode($vector2[$i - 1]) . "=";
                    $sql .= "'". utf8_decode($vector[$i - 1]) ."'". " WHERE nombre='".$nombre."';";
                }
            }

$sentencia2 = $this->db->prepare($sql);

$sentencia2->execute();

if($sentencia2->rowCount() == 1){

           return TRUE;

     }
     else {

          return FALSE;}
    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
     }
  }



  
}