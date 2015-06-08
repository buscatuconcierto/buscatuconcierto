<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
*Controlador Modificare
*/
    class Modificare extends Controller{
        
        function __construct(){
            parent::__construct($this->params);
            $this->conf=Registry::getInstance();

            $this->model=new mModificare;
            $this->view=new vModificare;
        }
                function home(){
    }
/**
* funcion modificare si el campo nombre tiene valor, recoge los campos y se los manda al modelo
*/

      function modificare(){//para modificar concierto
    if(isset($_POST['name'])){ 

    $evento=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $fecha=filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
    $hora=filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);          
    $localizacion=filter_input(INPUT_POST, 'localizacion', FILTER_SANITIZE_STRING);
    $descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
    $puntos=filter_input(INPUT_POST, 'puntos', FILTER_SANITIZE_STRING);
    $imagen=filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
    $event=$this->model->modificare($evento,$fecha,$hora,$localizacion,$descripcion,$puntos,$imagen);
        if ($event==TRUE){
               header('Location:'.APP_W.'eliminare/eliminare');//mandara al panel de administracion
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }
    }


    }
