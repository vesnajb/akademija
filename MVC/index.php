<?php

// print_r($_GET);
$default = [
	"contoller" => "users",
	"method" => "getUsers",
	"input" => ""
	];

//contoller
//metoda od kontrolerot
//dopolnitelni parametri

$params=[];

if(isset($_GET['params'])){
	$params = explode('/',$_GET['params']);
};

switch (count($params)) {
	case 0:
		$controller_name = $default['contoller'];
		$method_name = $default['method'];
		$input = $default['input'];
		break;
	case 1:
		$controller_name = $params[0];
		$method_name = $default['method'];
		$input = $default['input'];
		break;
	case 2:
		$controller_name = $params[0];
		$method_name = $params[1];
		$input = $default['input'];
		break;
	case 3:
		$controller_name = $params[0];
		$method_name = $params[1];
		$input = $params[2];
		break;
	default:
		die("Vnesovte premnogu parametri");
		break;
}

$filename_c = "controllers/{$controller_name}.php";
$filename_m = "models/{$controller_name}.php";

if(file_exists($filename_c) && file_exists($filename_m)){
	
	include($filename_c);
	include($filename_m);

	$object = new $controller_name;

	if (method_exists($object, $method_name)) {
		$object->$method_name($input);
	} else {
		echo 'Povikavte nepostoecka metoda';
	}
} else {
	echo 'Povikavte nepostoecki kontroler ili model';
}

?>