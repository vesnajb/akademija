<?php
if(isset($_GET['action']) && $_GET['action'] === 'new'){
?>

<form action="?" method="post">
	<input type="hidden" name="action" value="insert">
	Firstname : 
	<input type="text" name="firstname" id="firstname">
	<br><br>
	Lastname : 
	<input type="text" name="lastname" id="lastname">
	<br><br>
	Email : 
	<input type="email" name="email" id="email">
	<br><br>
	Password : 
	<input type="password" name="password" id="password">
	<br><br>
	<input type="submit" value="Submit">

</form>

<?php

}else if(isset($_POST['action']) && $_POST['action'] === 'insert'){

	$config = file_get_contents('../../config.json');
	$config_decoded = json_decode($config);

	$conn_string = $config_decoded->database->config;
	$conn_username = $config_decoded->database->username;
	$conn_password = $config_decoded->database->password;

	$db = new PDO($conn_string, $conn_username, $conn_password);


	// print_r($_POST);

	$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]')";
	$result = $db->query($sql);

	if($result){
		header("Location: /akademija/CMS-master/admin/users.php");
	}else{
		echo 'Neuspesen insert';
	}

}
?>