<?php
/**
* @Author Alex Lopez Victor Borrego Carlos Vicente
* 
* Copyright 2015  BuscaTuConcierto
*/
/**
*Controlador Login, define modelo y vista correspondientes
*/
	class Login extends Controller{
		
		function __construct(){
			parent::__construct($this->params);
			$this->conf=Registry::getInstance();

			$this->model=new mlogin;
			$this->view=new vlogin;
		}
		    
        function home(){

    }

	}