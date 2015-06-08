<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/

	class Controller {
		protected $model;
		protected $view;
		protected $params;
		protected $conf;
		function __construct($params){
			$this->params=$params;
			$this->conf=Registry::getInstance();
			
		}

		function ajax_set($output){
			ob_clean();
			$resp=json_encode($output);
			echo $resp;
		}
	}

