<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
* modelo mHome
*/
final class mHome extends Model
{

    
    function __construct($params)
    {
        parent::__construct($params);
        $this->db       = DB::singleton();
        // a litle prove in--->out
        $this->data_out = $params;
    }
        
        function home(){

    }
    function get_out()
    {
        return $this->data_out;
    }
    
    /**
    *funcion rol guarda el rol del usuario que inicia sesión en una variable de session
    */
    public function rol($nusuario)
    {
        try {
            $sql   = "SELECT rol FROM usuarios WHERE nombre=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $nusuario);
            $query->execute(); //fetch per rol
            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                $_SESSION['rol'] = $fetch;
                return TRUE;
            } else {
                //Session::set('islogged',FALSE);
                $_SESSION['rol'] = "Error";
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
    
      /**
    *funcion puntos guarda los puntos del usuario que inicia sesión en una variable de session
    */
      public function puntos($nusuario)
    {

        try {
            $sql   = "SELECT puntos FROM usuarios WHERE nombre=? ";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $nusuario);
               
            $query->execute(); //fetch per rol

            if ($query->rowCount() == 1) {
                $fetch           = $query->fetchColumn();
                $_SESSION['puntos'] = $fetch;
                return TRUE;
            } else {
                //Session::set('islogged',FALSE);
                $_SESSION['puntos'] = "Error";
                return FALSE;
            }
            
            
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
        
    }
    /**
    * Funcion login hace un select en usuarios y si existe, inicia sesión con ese usuario y guarda variables de sesion
    */
    function login($nusuario, $password)
    {
        try {
            $sql   = "SELECT * FROM usuarios WHERE nombre=? AND contrasenya=?";
            $query = $this->db->prepare($sql);
            $query->bindParam(1, $nusuario);
            $query->bindParam(2, $password);
            $query->execute(); //fetch per rol
            if ($query->rowCount() == 1) {
                
                $_SESSION['user']  = $_REQUEST['usuario'];
                $_SESSION['email'] = $_REQUEST['password'];
                $this->rol($nusuario);
                $this->puntos($nusuario);
               // $_SESSION['puntos'] = $this->puntos($nusuario);

                setcookie("usuario",  $_SESSION['user'],36000,APP_W);
                setcookie("rol", $_SESSION['rol'],36000,APP_W);
                setcookie("puntos", $_SESSION['puntos'],36000,APP_W);
                return TRUE;
                
            } else {
                //Session::set('islogged',FALSE);
                return FALSE;
            }
        }
        catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
    
   
   
    
}