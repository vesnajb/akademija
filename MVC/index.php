<?php

// print_r($_GET);

$params = explode('/',$_GET['params']);
// print_r($params);

//contoller
//metoda od kontrolerot
//dopolnitelni parametri

$controller_name = $params[0];
$method_name = $params[1];
$input = $params[2];

$filename_c = "controllers/{$controller_name}.php";
$filename_m = "models/{$controller_name}.php";

if(file_exists($filename_c) && file_exists($filename_m)){
	// echo 'yeee';

	include($filename_c);
	include($filename_m);

	$object = new $controller_name;

	if (method_exists($object, $method_name)) {
		$object->$method_name();
	} else {
		echo 'Povikavte nepostoecka metoda';
	}
} else {
	echo 'Povikavte nepostoecki kontroler ili model';
}

?>