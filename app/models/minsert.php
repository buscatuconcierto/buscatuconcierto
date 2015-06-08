<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/

/**
*modelo mInsert
*/
class mInsert extends Model
{
    function __construct(){parent::__construct();}

    /**
    * funcion dni revisa que el dni no exista en la base de datos
    */

     public function dni($dni)
    {
        try {
            $sql   = "SELECT nif FROM usuarios WHERE nif=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $dni);
            $query->execute(); //fetch per rol

            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        
    }

/**
* funcion email revisa que el email no se repita
*/
    public function email($email)
    {
        try {
            $sql   = "SELECT email FROM usuarios WHERE email=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $dni);
            $query->execute(); //fetch per rol

            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        
    }

 /**
   * funcion insert, llama a la funcion de dni y email, si las pasa, hace un insert en usuarios
   */

    function insert($nombre,$apellidos,$email,$dni,$poblacion,$fecha,$nusuario,$password)
    
    {


        if($this->dni($dni) && $this->email($email)){
          return FALSE;

        }else{
        try {
            //
            //('45789971F','test','test 1','test@test.te','Gava','','28/10/1992','test','2','200')
            $rol    = 1;
            $puntos =200;
            $sql    = "INSERT INTO usuarios (nif,nombre,apellidos,email,fecha_nacimiento,poblacion,usuario,contrasenya,rol,puntos) VALUES (";
            $vector = array($dni,$nombre,$apellidos,$email,$fecha,$poblacion,$nusuario,$password,$rol,$puntos);
            $max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "',";
                } else {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "')";
                }
            }
            $query = $this->db->prepare($sql);
            $query->execute();
            // COMPROBAR CONSULTAS
            // Coder::code($sql);
            // die;
            if ($query->rowCount() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

      }

    }

/**
* funcion insertc hace un insert de evento 
*/
        function insertc($evento,$fecha,$hora,$localizacion,$descripcion,$puntos,$imagen)
    {
        try {
            $sql    = "INSERT INTO eventos (nombre,fecha,hora,localizacion,descripcion,puntos,imagen) VALUES (";
            $vector = array($evento,$fecha,$hora,$localizacion,$descripcion,$puntos,$imagen);
            $max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "',";
                } else {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "')";
                }
            }
            $query = $this->db->prepare($sql);
            $query->execute();
            // COMPROBAR CONSULTAS
            // Coder::code($sql);
            // die;
            if ($query->rowCount() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

      }

        /**
        * funcion inserts hace un insert de stock
        */

              function inserts($evento,$cantidad,$precio,$vendidas)
    {
        $evento=$this->spaceout($evento);
        try {

            $sql    = "INSERT INTO stock VALUES (";
            $vector = array($evento,$cantidad,$precio,$vendidas);
            $max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "',";
                } else {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "')";
                }
            }
            $query = $this->db->prepare($sql);
            $query->execute();
            // COMPROBAR CONSULTAS
            // Coder::code($sql);
            // die;
            if ($query->rowCount() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

      }

        /**
        * funcion spaceout cambia el espacio por barrabaja
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
        * funcion insertu hace un insert de ubicacion
        */

    function insertu($nombre,$direccion,$poblacion,$cp,$provincia,$pais,$aforo,$mapa,$parking,$hoteles)
    {
        $nombre=$this->spaceout($nombre);
        $direccion=$this->spaceout($direccion);
        try {

            $sql    = "INSERT INTO ubicacion VALUES (";
            $vector = array($nombre,$direccion,$poblacion,$cp,$provincia,$pais,$aforo,$mapa,$parking,$hoteles);
            $max    = sizeof($vector);
            for ($i = 1; $i <= $max; $i++) {
                if ($i != $max) {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "',";
                } else {
                    $sql .= "'" . utf8_decode($vector[$i - 1]) . "')";
                }
            }
            $query = $this->db->prepare($sql);


            $query->execute();
            if ($query->rowCount() >0) {

                return TRUE;
            } else {

                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }

      }

    }
