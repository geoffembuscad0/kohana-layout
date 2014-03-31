<?php defined('SYSPATH') or die('No direct script access.');
/*
	Configuriations for your HTML Head Tags
	
	NOTE: "_assets" is your folder placed on your project directory. Please initialize your configuration only in the 'config' index

*/

return array(
	'config' => array(
		'styles' => array(
			// "_assets/css/bootstrap/css/bootstrap.css" // Example
			// ,"_assets/css/bootstrap/css/bootstrap-theme.css" // Example
		),
		'scripts'=>array(
			"_assets/js/jquery.js" // Example
			,"_assets/js/bootstrap.js" // Example
		),
		'meta_tags'=>array(
			array(
				"name"=>"keywords",
				"content"=>"HTML, PHP, CSS"
			),
			array(
				"charset"=>"UTF-8"
			)
		)
	)
);
