<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/ 
/**
* modelo mModificare
*/
	class mModificare extends Model{
  
		function __construct(){
			parent::__construct();
		}


/**
* funcion modificare  hace un update de evento recogiendo variables y filtrando por el nombre de evento
*/
 function modificare($evento,$fecha,$hora,$localizacion,$descripcion,$puntos,$imagen){


  try{
$sql = "UPDATE eventos SET ";
$vector = array($fecha,$hora,$localizacion,$descripcion,$puntos,$imagen);          
$vector2 = array('fecha','hora','localizacion','descripcion','puntos','imagen');
$max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .=  utf8_decode($vector2[$i - 1]) . "="."'";
                    $sql .=  utf8_decode($vector[$i - 1]) ."'".",";
                } else {
                    $sql .=  utf8_decode($vector2[$i - 1]) . "=";
                    $sql .= "'". utf8_decode($vector[$i - 1]) ."'". " WHERE nombre='".$evento."';";
                }
            }

$sentencia2 = $this->db->prepare($sql);

$sentencia2->execute();

if($sentencia2->rowCount() == 1){
//Session::set('usuario',$email);
/*
$_SESSION['usuario']=$_REQUEST[$email];
$_SESSION['clave']=$_REQUEST[$password];
*/
           return TRUE;

     }
     else {
         //Session::set('islogged',FALSE);
          return FALSE;}
    }catch(PDOException $e){
       echo "Error:".$e->getMessage();
     }
  }



  
}