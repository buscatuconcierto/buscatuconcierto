<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
 * Clase Eliminar
 *Gestiona la Parte de control de usuarios
 */
	class Eliminars extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

	        $this->model=new mEliminars;
            $this->view=new vEliminars;
		}
                function home(){
    }
		/**
		*Funcion Eliminar.
		*Primero comprueba si el usuario ha iniciado sesion, si es asi, llama a la funcion tablaborrars del modelo
		*si el modelo retorna true, carga la pagina de borrar stock, si no, envia a la pagina de error.
		*/

		function eliminars(){
		if(isset($_SESSION['usuario'])){ 
        $user=$this->model->tablaborrars();
         if ($user==TRUE){
               header('Location:'.APP_W.'eliminars');
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
    *Funcion Eliminar2.
    *Primero comprueba que recibe del formulario un stock, si es asi lo guarda en una variable que manda a la funcion del modelo eliminars
    *si el modelo retorna true, carga una pagina, si no, envia a la pagina de error.
    */
    function eliminars2(){
    if(isset($_POST['stock'])){ 
        $ref=filter_input(INPUT_POST, 'stock', FILTER_SANITIZE_STRING);

        $event=$this->model->eliminars($ref);
         if ($event==TRUE){

               header('Location:'.APP_W.'eliminars/eliminars');
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }

    }



	}
