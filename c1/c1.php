<?php
	$ime = 'Stavre';
	echo $ime;

	$ime = 24;
	echo $ime;

	//aritmeticki operatori

	$i = 1;
	$p = 2;
	$rez = $i + $p;
	echo $rez;

	$i = $i + $p;
	$i += $p;
	echo $i;
?>



<div>
	<?php echo $i; ?>
</div>
<p>ova si e html</p>


<?php
	var_dump($i);
	$p = 'ime';
	var_dump($p);

	//ternary operator
	if($i % 2 == 0){
		echo 'paren';
	}else {
		echo 'neparen';
	}

	echo ($i % 2 == 0) ? 'paren' : 'neparen';
	echo '<br>';

	$array = array('string', 132, false); //za postari verzii
	var_dump($array);

	echo '<br>';

	for($i = 1; $i <= 5 ; $i ++ ){
		echo $i.'<br>';
	}
?>