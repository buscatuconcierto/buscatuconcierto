<?php /**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* @Copyright 2015 ~ Busca Tu Concierto
*/

/**
* Clase instock, encargada en la gestión de registros (insertar stock)
*/
	class Instock extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mInstock;
			$this->view=new vInstock;
		}
		function home(){
			
			
		}
	}