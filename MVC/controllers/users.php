<?php

class users {

	function getUsers(){
		$usersModel = new usersModel();
		$users = $usersModel->getAllUsers();
		include "view/users.php";
	}

	function getUser($user_id){  //$user_id = $input od index.php
		$usersModel = new usersModel();
		$users = $usersModel->getUser($user_id);
		include "view/users.php";
	}
	function getWeather(){
		$usersModel = new usersModel();
		$users = $usersModel->getWeather();
	}
}



?>