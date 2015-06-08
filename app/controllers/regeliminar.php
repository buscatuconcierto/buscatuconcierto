<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/

/**
* Controlador Regeliminar
*/
	class Regeliminar extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mRegeliminar;
			$this->view=new vRegeliminar;
		}

	}