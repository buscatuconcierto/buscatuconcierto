<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
* Controlador Modificars
*/
    class Modificars extends Controller{
        
        function __construct(){
            parent::__construct($this->params);
            $this->conf=Registry::getInstance();

            $this->model=new mModificars;
            $this->view=new vModificars;
        }
                function home(){
    }

/**
* funcion modificars si el campo evento tiene valor, recoge los campos y se los manda al modelo
*/
      function modificars(){//para modificar concierto
    if(isset($_POST['evento'])){ 
    $evento=filter_input(INPUT_POST, 'evento', FILTER_SANITIZE_STRING);
    $cantidad=filter_input(INPUT_POST, 'cantidad', FILTER_SANITIZE_STRING);
    $precio=filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_STRING);          
    $vendidas=filter_input(INPUT_POST, 'vendidas', FILTER_SANITIZE_STRING);
   $stock=$this->model->modificars($evento,$cantidad,$precio,$vendidas);
        if ($stock==TRUE){
               header('Location:'.APP_W.'eliminars/eliminars');//mandara al panel de administracion
         }
         else{
               header('Location:'.APP_W.'error');
             }
        }
    }


    }
