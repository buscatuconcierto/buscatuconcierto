<?php /**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* @Copyright 2015 ~ Busca Tu Concierto
*/

/**
* Class insevent, encargada en la gestión de registro de eventos (insertar eventos)
*/
	class Insevent extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mInsevent;
			$this->view=new vInsevent;
		}

	}