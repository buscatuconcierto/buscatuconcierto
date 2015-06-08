<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/

/**
* Controlador Modificaru
*/
    class Modificaru extends Controller{
        
        function __construct(){
            parent::__construct($this->params);
            $this->conf=Registry::getInstance();

            $this->model=new mModificaru;
            $this->view=new vModificaru;
        }

                function home(){
    }

/**
* funcion modificaru si el campo nobmre tiene valor, recoge los campos y se los manda al modelo
*/

      function modificaru(){//para modificar concierto
    if(isset($_POST['nombre'])){ 
    
$nombre=filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $direccion=filter_input(INPUT_POST, 'direccion', FILTER_SANITIZE_STRING);
    $poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);    
    $cp=filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING);          
    $provincia=filter_input(INPUT_POST, 'provincia', FILTER_SANITIZE_STRING);
    $pais=filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_STRING);
    $aforo=filter_input(INPUT_POST, 'aforo', FILTER_SANITIZE_STRING);
    $mapa=filter_input(INPUT_POST, 'mapa', FILTER_SANITIZE_STRING);
    $parking=filter_input(INPUT_POST, 'parking', FILTER_SANITIZE_STRING);
    $hoteles=filter_input(INPUT_POST, 'hoteles', FILTER_SANITIZE_STRING);
   $stock=$this->model->modificaru($nombre,$direccion,$poblacion,$cp,$provincia,$pais,$aforo,$mapa,$parking,$hoteles);
        if ($stock==TRUE){
               header('Location:'.APP_W.'eliminaru/eliminaru');//mandara al panel de administracion
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }
    }
    
    }
