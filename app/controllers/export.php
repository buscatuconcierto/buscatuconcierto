<?php /**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
* @Version
*/

/**
* Clase export, gestiona la parte de la exportación
*/
	class Export extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mExport;
			$this->view=new vExport;
		}

	}