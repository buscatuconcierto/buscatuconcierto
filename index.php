<?php
/**
* @Autor Victor Borrego Alex Lopez Carlos Vicente
* Copyright 2015 BuscaTuConcierto
*/
	$time=microtime();
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	include 'constants.php';
	require 'sys/helper.php';
	
	$conf=Registry::getInstance();
	$conf->init();

	// installation first if necessary
	if (!file_exists('.deployed')){
			$conf->deployed='false';
		}
	Session::init();
	
	// setting init time
	$conf->time;
	
	//Coder::code_var($conf);
	Core::init();