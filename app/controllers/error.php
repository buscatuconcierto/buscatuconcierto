<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
*Clase Error Es la que se  encarga siempre que da error cualquier clase.
*/
	final class Error extends Controller{
		function __construct($params=null){
			parent::__construct($params);
			$this->conf=Registry::getInstance();

			$this->model=new mError;
			$this->view=new vError;
		}
		function home(){
			
			
			
		}
	}