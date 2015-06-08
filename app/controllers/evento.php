<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
*Clase Eevento Es la que se encarga de gestionar los eventos.
*/
	final class Evento extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mEvento;
			$this->view=new vEvento;
		}
                function home(){
    }
/**
* Funcion mostrar, recoge una referencia y se la manda al modelo 
*/
    function mostrar(){
    if(isset($_POST['referencia'])){ 
        $referencia=filter_input(INPUT_POST, 'referencia', FILTER_SANITIZE_STRING);

        $user=$this->model->mostrar($referencia);
         if ($user==TRUE){
               header('Location:'.APP_W.'evento/evento');
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }
    }


/**
* revisa si hay una referencia, recoge los valores del formulario y se los manda a la funcion compra del modelo
*/
        function comprar(){
    if(isset($_POST['referencia'])){ 
        $referencia=filter_input(INPUT_POST, 'referencia', FILTER_SANITIZE_STRING);
        $puntos=filter_input(INPUT_POST, 'puntos', FILTER_SANITIZE_STRING);
        $cantidad=filter_input(INPUT_POST, 'cantidad', FILTER_SANITIZE_NUMBER_INT); //verifico que es integer
        $usuario=$_SESSION['usuario'];
        $user=$this->model->compra($referencia,$cantidad,$puntos,$usuario);
         if ($user==TRUE){
              header('Location:'.APP_W.'login/home');
         }
         else{
              header('Location:'.APP_W.'error');
             }
        }
    }



	}