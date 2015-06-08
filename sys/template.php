<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/
	class Template{
		
		static function load($contents,$data=null){
			if(is_array($data)){
				extract($data);
			}

	include APP.'tpl/head.php';
	/*	
			
		if(isset($_SESSION['user'])){

		include APP.'tpl/header2.php';


		}else {

		
		include APP.'tpl/header.php';		
			

		}
		
		include APP.'tpl/menu.php';
		include APP.'tpl/footer.php';
		*/
        if(isset($_SESSION['user'])){

		//include APP.'tpl/header2.php';
                //include APP.'tpl/menu.php';
		//include APP.'tpl/footer.php';

		}
		include APP.'tpl/'.$contents.'.php';
		}
		
	}
