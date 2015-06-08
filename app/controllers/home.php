<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/

/**
*Clase home es la Principal
*/
	final class home extends Controller{
		
		function __construct($params){
			parent::__construct($params);
			$this->conf=Registry::getInstance();
			$this->model=new mHome($params);
			$this->view=new vHome;
		}
    function home(){

    }
		

    /**
    * Funcion login recoge los valors del formulario login y los gaurda en variables que envia la modelo del login
    *si se retorna true, carga la pagina principal
    *si no, envia al formulario de registro
    */
		function login(){
		if(isset($_POST['usuario'])){
         $nusuario=filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
         $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
         $user=$this->model->login($nusuario,$password);
         if ($user== TRUE){
               $_SESSION['usuario']=$nusuario;
               header('Location:'.APP_W.'login/home');
              
         }
         else{
               header('Location:'.APP_W.'reg');
             }
  		  }
		}
/**
* Funcion search es la que guarda los valores de los campos del formulario y los manda al modelo
*/
        function search(){
         $nevento=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
         $localidad=filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);
         $data=filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
         $search=$this->model->seach($nevento,$localidad,$data);
         if ($user== TRUE){
               
               header('Location:'.APP_W.'login/home');
              
         }
         else{
               header('Location:'.APP_W.'reg');
             }
        }
    

    /**
    * Funcio insert es la encargada de recoger los valores del formulario de registro y mandarlos al modelo, a la funcion insert
    */
		function insert(){
		if(isset($_POST['email'])){
         $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $nombre=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
         $password=filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
         $dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);
         $telefono=filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
         $direccion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);
         $poblacion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);
         $nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
         $rpassword=filter_input(INPUT_POST, 'rpassword', FILTER_SANITIZE_STRING);
         $poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
         $user=$this->model->insert($dni,$nombre,$nusuario,$telefono,$direccion,$poblacion,$email,$password,$rpassword);
         if ($user== TRUE){
               header('Location:'.APP_W.'insert/home');
         }
         else{
               header('Location:'.APP_W.'errorcrear');
             }
  		  }
		}

/**
* Funcion salir borra las variables de sesion y vuelve a la pagina principal
*/
       function salir(){
        session_destroy();
         header('Location:'.APP_W.'home/home');
    }
	
}