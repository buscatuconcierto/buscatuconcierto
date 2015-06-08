<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* Copyright 2015  BuscaTuConcierto
*/
/**
 * Clase Eliminar
 *Gestiona la Parte de eliminación de usuarios
 */
	class Eliminar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();
	        $this->model=new mEliminar;
	        $this->model2=new mEliminare;
            $this->view=new vEliminar;
		}
                function home(){
    }
		/**
		*Función Eliminar.
		*Revisa que la sesión este iniciada, si es asi, manda a la funcion tablaborrar del modelo
		*/
		function eliminar(){
		if(isset($_SESSION['usuario'])){ 
        $user=$this->model->tablaborrar();
         if ($user==TRUE){
               
               header('Location:'.APP_W.'eliminar');
               
         }
         else{
            
               header('Location:'.APP_W.'error');
             }
  		  }
  		  else{
  		  	var_dump('adios');
  		  	die;
  		  }
		}
        /**
    *Función Eliminar2.
    *Revisa que se recibe un id del formulario, si es asi, la manda a la funcion borrar del modelo
    */
    function eliminar2(){
    if(isset($_POST['id'])){ 
        $id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
         var_dump('$id');

        $user=$this->model->eliminar($id);
         if ($user==TRUE){
               
               header('Location:'.APP_W.'eliminar/eliminar');
               
         }
         else{
             // no existe el usuario,error
               header('Location:'.APP_W.'error');
             }
        }
    }

	}
