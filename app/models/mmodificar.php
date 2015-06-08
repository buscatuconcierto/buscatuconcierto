<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/ 
/**
* modelo mModificar 
*/
	class mModificar extends Model{
  
		function __construct(){
			parent::__construct();
		}


/**
* funcion modificar hace un update de usuarios con los campos recibidos, menos el nombre, que lo usa como filtro
*/
 function modificar($nombre,$apellidos,$email,$dni,$poblacion,$fecha,$nusuario,$password){

  try{
$sql = "UPDATE usuarios SET ";
$vector = array($nombre,$apellidos,$email,$dni,$poblacion,$fecha,$nusuario,$password);          
$vector2 = array('nombre','apellidos','email','nif','poblacion','fecha_nacimiento','usuario','contrasenya');
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