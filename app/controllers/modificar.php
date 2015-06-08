<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/

/**
* Controlador Modificar
*/
	class Modificar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mModificar;
			$this->view=new vModificar;
		}
                function home(){
    }
/**
* funcion modificar  si el campo email esta completo, recoge los valores del formulario de modificacion de usuarios y se los madna al modelo 
*/
		function modificar(){
		if(isset($_POST['email'])){ 
        $nombre=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $apellidos=filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);          
        $poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
        $fecha=filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
        $nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        $rpassword=md5(filter_input(INPUT_POST, 'rpassword', FILTER_SANITIZE_STRING));
        $user=$this->model->modificar($nombre,$apellidos,$email,$dni,$poblacion,$fecha,$nusuario,$password);
         
         if ($user==TRUE){
               header('Location:'.APP_W.'eliminar/eliminar');
         }
         else{
               header('Location:'.APP_W.'error');
             }
  		  }
		}


	}
