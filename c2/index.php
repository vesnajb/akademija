<?php

	// $arr1 = [];  //vp php ova e dovolno
	// $arr1 = array(); //poveke za vo drugi jazici

	$array = [];// nepotrebno vo php

	$array[] = 'asd';
	var_dump($array);
	print_r($array);
	echo '<br>';
	$array = 'asd'; //stanuva string
	echo $array;

	$filmovi = [
		'godfather' => '1987',
		'alien' => '1982',
	];

	$knigi = [
		'gospodar na zloto' => '2015',
		'gospodar na dobroto' => '2020',
		'gospodar' => $filmovi
		];
	echo '<pre>';
	var_dump($knigi);
	echo '</pre>';
	echo '<br>';

	echo '<pre>';
	print_r($knigi);
	echo '</pre>';

	echo  $knigi['gospodar']['alien'];

	$pr = '123';
	echo 'aasd $pr';
	echo '<br>';
	echo "asd {$knigi['gospodar']['alien']}"; // mora da bidat dupli navodnici, vo golemi zagradi se stava array za da go isprinta


	// ovie se identicni nizi poinaku zapisani
	$pr1 = ['eden', 'dva', 'tri'];
	$pr2 = [0 => 'eden', 1 => 'dva', 2 => 'tri']; //asocijativni

	$pr_break = ['eden', 'dva', 'tri', 'cetiri', 'pet', 'sest'];

	echo '<hr>';

	for($i = 0; $i < count($pr_break); $i++){//inicijalizacija, uslov, brojac		sizeof e identicno so count
		echo $pr_break[$i].'<br>';
	}
	foreach ($pr_break as $value) {
		echo $value.'<br>';
	}

	$b = 0;
	foreach ($pr_break as $value) {
		echo $value . '<br>';
		$b ++;
		if($b == 2){
			break; //skros iskaca od foreach ciklusot
		}

	}

	$b = 0;
	foreach ($pr_break as $value) {
		$b ++;
		if($b % 2 == 0){
			continue; //go skoka ostatokot od toj proces i odi na sleden element
		}
		echo $value . '<br>';

	}
	

?>