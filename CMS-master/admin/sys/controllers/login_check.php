<?php

$file_content = file_get_contents('../../test.txt');
$login_content = json_decode($file_content, true); //array
$login_content_obj = json_decode($file_content); //object

print_r($login_content_obj);

//so object
$username = $login_content_obj->admin->username;
$password = $login_content_obj->admin->password;

//so array
// $username = $login_content['admin']['username'];
// $password = $login_content['admin']['password'];

if($username == $_POST['loginEmail'] && 
	$password == $_POST['loginPassword']){
	header('location: ../../index.php');
} else{
	header('location: ../../login.php?login=error');
}

echo $file_content;

?>

