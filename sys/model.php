<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/
	class Model {
			protected $db;
			protected $params_in;
			protected $data_out;
			protected $conf;

		function __construct($params=null){
			$this->conf=Registry::getInstance();

			$this->params_in=$params;
			if($this->conf->deployed!='false'){
				$this->db=DB::singleton();
       			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
		}
	}