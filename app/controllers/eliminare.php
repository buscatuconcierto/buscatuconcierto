<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
 * Clase Eliminar
 *Gestiona la Parte de borrado de eventos
 */
	class Eliminare extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

	        $this->model=new mEliminare;
            $this->view=new vEliminare;
		}

                function home(){
    }
		/**
		*Función Eliminare.
		*Primero Comprueba que la variable de sesion usuario existe, si es asi llama a la funcion tablaborrare del modelo
		*/

		function eliminare(){
		if(isset($_SESSION['usuario'])){ 
        $user=$this->model->tablaborrare();
         if ($user==TRUE){
               
               header('Location:'.APP_W.'eliminare');
             
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
*Funcion eliminare2
*recibe una referencia de evento de la tabla, y se la manda al modelo eliminare
*/
    function eliminare2(){
    if(isset($_POST['referencia'])){ 
        $ref=filter_input(INPUT_POST, 'referencia', FILTER_SANITIZE_STRING);

        $event=$this->model->eliminare($ref);
         if ($event==TRUE){

               header('Location:'.APP_W.'eliminare/eliminare');
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }
        var_dump('nop');
        die;
    }



	}
