<?php /**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* @Copyright 2015 ~ Busca Tu Concierto
*/

/**
* Classe insert, encargada en la gestión de registros (insertar usuarios, eventos, stock y conciertos a la base de dades)
*/
	final class insert extends Controller{
		
		
		function __construct($params){
			parent::__construct($params);
			$this->conf=Registry::getInstance();
			$this->model=new minsert;
			$this->model2=new minsevent;
			$this->view=new vinsert;
		}

                function home(){
    }
/**
* Funcion insert se encarga de recoger los valores del formulario de registro de usuarios y mandarlos a la funcion insert del modelo
*/
		function insert(){
		if(isset($_POST['email'])){ 

		$nombre=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$apellidos=filter_input(INPUT_POST, 'apellidos', FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$dni=filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);
		$poblacion=filter_input(INPUT_POST, 'poblacion', FILTER_SANITIZE_STRING);
		$fecha=filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
		$nusuario=filter_input(INPUT_POST, 'nusuario', FILTER_SANITIZE_STRING);
        $password=md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
		$rpassword=md5(filter_input(INPUT_POST, 'rpassword', FILTER_SANITIZE_STRING));
		$user=$this->model->insert($nombre,$apellidos,$email,$dni,$poblacion,$fecha,$nusuario,$password);
        if ($user==TRUE){
                        if (($_SESSION['rol'])!=2) {
 							header('Location:'.APP_W.'home');
 							 /*'700'*/;}else{
                             header('Location:'.APP_W.'eliminar/eliminar');
                        }
              

         }
         else{

               header('Location:'.APP_W.'error');
             }
  		  }
		}


/**
* Funcion insevent se encarga de recoger los valores del formulario de registro de evento y mandarlos a la funcion insertc del modelo
*/
			function insevent(){//para insertar concierto

		if(isset($_POST['name'])){

		$evento=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$fecha=filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
        $hora=filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);          
		$localizacion=filter_input(INPUT_POST, 'localizacion', FILTER_SANITIZE_STRING);
		$descripcion=filter_input(INPUT_POST, 'descripcion', FILTER_SANITIZE_STRING);
		$puntos=filter_input(INPUT_POST, 'puntos', FILTER_SANITIZE_STRING);
		$imagen=filter_input(INPUT_POST, 'imagen', FILTER_SANITIZE_STRING);
		$event=$this->model->insertc($evento,$fecha,$hora,$localizacion,$descripcion,$puntos,$imagen);
        if ($event==TRUE){

               header('Location:'.APP_W.'eliminare/eliminare');//mandara al panel de administracion de eventos

         }
         else{

               header('Location:'.APP_W.'error');
             }
  		  }
		}

/**
* Funcion instock se encarga de recoger los valores del formulario de registro de stock y mandarlos a la funcion inserts del modelo
*/
			function instock(){//para insertar stock
		if(isset($_POST['evento'])){ 

		$evento=filter_input(INPUT_POST, 'evento', FILTER_SANITIZE_STRING);
		$cantidad=filter_input(INPUT_POST, 'cantidad', FILTER_SANITIZE_STRING);
        $precio=filter_input(INPUT_POST, 'precio', FILTER_SANITIZE_STRING);          
		$vendidas=filter_input(INPUT_POST, 'vendidas', FILTER_SANITIZE_STRING);
		$stock=$this->model->inserts($evento,$cantidad,$precio,$vendidas);
        if ($stock==TRUE){
               header('Location:'.APP_W.'eliminars/eliminars');//mandara al panel de administracion de stock
         }
         else{
               header('Location:'.APP_W.'error');
             }
  		  }
		}

/**
* Funcion insubi se encarga de recoger los valores del formulario de registro de ubicacion y mandarlos a la funcion insertu del modelo
*/
					function insubi(){//para insertar ubicacion

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
		$ubic=$this->model->insertu($nombre,$direccion,$poblacion,$cp,$provincia,$pais,$aforo,$mapa,$parking,$hoteles);
        if ($ubic==TRUE){
               header('Location:'.APP_W.'eliminaru/eliminaru');//mandara al panel de administracion de ubicacion
         }
         else{
               header('Location:'.APP_W.'error');
             }
  		  }
		}


	}