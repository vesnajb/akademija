<?php
	echo 'Uspesna navigacija'.'<br>';

	$val_name = 'asd';
	$val_pass = 'asd';
	
	if($val_name === $_POST['name'] && $val_pass === $_POST['password']){
		echo 'Logiran ste';
	}
?>