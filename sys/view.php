<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/
	/**
	 *  class View
	 * 	access to registry and loads
	 *  the corresponding template
	 */
	class View{
		protected $reg;
		
		function __construct($contents){
			$this->reg=Registry::getInstance();
			//access to app_data
			$array_app=(array)$this->reg->app_data;
			ob_start();
			Template::load($contents,$array_app);
				
		}
		
	}