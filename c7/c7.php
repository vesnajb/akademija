<?php

$iminja = [ 
	'Mia' => 'Koluci',
	'Stavre' => 'Stavrov',
	'Vesna' => 'Zmijanacnbnghbfngnhg',
	'Dragan' => 'Nikolov',
	'Kristijan' => 'Nevenov'
];
$max_chars = 0;
foreach ($iminja as $ime => $prezime) {
	if(strlen($ime) + strlen($prezime) > $max_chars){
		$max_chars = strlen($ime) + strlen($prezime);
		$max_name = "$ime $prezime e najgolemiot covek";
	}
}
echo $max_name. ", a brojot na karakteri e $max_chars."."<br>"."<br>";

$range = range(0,10);
var_dump($range);

$sum = 0;
foreach ($range as $i)  {
	$sum = $sum + $i;
}
echo $sum;

//mvc model view controler
?>