<?php /**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* @Copyright 2015 ~ Busca Tu Concierto
*/

/**
* Clase insubi, encargada en la inserción de ubicaciones a la base de datos
*/
	class Insubi extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mInsubi;
			$this->view=new vInsubi;
		}
		function home(){
			
			
		}
	}