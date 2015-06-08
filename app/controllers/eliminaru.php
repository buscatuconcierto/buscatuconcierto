<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
 * Clase Eliminar
 *Gestiona la Parte de borrado de ubicaciones
 */
	class Eliminaru extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

	        $this->model=new mEliminaru;
            $this->view=new vEliminaru;
		}
	
                function home(){
    }
		/**
		*Función  Eliminaru.
	  * Revisa que haya una sesion iniciada y va a la funcion tablaborraru del modelo
		*/

		function eliminaru(){
		if(isset($_SESSION['usuario'])){ 
        $user=$this->model->tablaborraru();
         if ($user==TRUE){
               header('Location:'.APP_W.'eliminaru');
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
    *Función  Eliminaru2.
    * Revisa que haya un valor en el campo ubi del formulario, si es asi lo guarda en una variable que envia a la funcion eliminaru del modelo
    */
    function eliminaru2(){

    if(isset($_POST['ubi'])){ 

        $ubi=filter_input(INPUT_POST, 'ubi', FILTER_SANITIZE_STRING);

        $ubicacion=$this->model->eliminaru($ubi);
         if ($ubicacion==TRUE){

               header('Location:'.APP_W.'eliminaru/eliminaru');
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }

    }



	}
