<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/ 

/**
* modelo mModificars
*/
	class mModificars extends Model{
  
		function __construct(){
			parent::__construct();
		}

/**
* funcion spaceout quita los espacios y pone barrabaja
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
* funcion modificars a partir del nombre, modifica los valores del stock
*/
 function modificars($evento,$cantidad,$precio,$vendidas){
  $evento=$this->spaceout($evento);

  try{
$sql = "UPDATE stock SET ";
$vector = array($cantidad,$precio,$vendidas);          
$vector2 = array('cantidad','precio','vendidas');
$max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .=  utf8_decode($vector2[$i - 1]) . "="."'";
                    $sql .=  utf8_decode($vector[$i - 1]) ."'".",";
                } else {
                    $sql .=  utf8_decode($vector2[$i - 1]) . "=";
                    $sql .= "'". utf8_decode($vector[$i - 1]) ."'". " WHERE evento='".$evento."';";
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