<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* Copyright 2015  BuscaTuConcierto
*/

/**
*Clase Busca Es la que se encarga del buscador de la pagina Principal
*/
	final class Busca extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();
			$this->model=new mBusca;
			$this->view=new vBusca;
		}
                function home(){
    }
/**
* Funcion busca recibe los campos del formulario del buscador y se los manda a la funcion tablabuscar del modelo
*/
		function busca(){
			$nombre=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
			$localidad=filter_input(INPUT_POST, 'localidad', FILTER_SANITIZE_STRING);
        	$fecha=filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
        
        $user=$this->model->tablabuscar($nombre,$localidad,$fecha);
         if ($user==TRUE){
               header('Location:'.APP_W.'busca');
         }
         else{
               header('Location:'.APP_W.'error');
             }

		}
	}