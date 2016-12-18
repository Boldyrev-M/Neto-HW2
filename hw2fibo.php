<?php
	$x = $_GET['x'];
	$a = 1;
	$b = 1;
	echo "$a<br>$b<br>";
	
	while ( $a < $x) {
		echo "$a</br>";
		$fibo = $a;
		$a = $a + $b;
		$b = $fibo;
		
	}
	if ($a > $x) {echo "Задуманное число $x НЕ входит в числовой ряд!";}
			else {echo "Задуманное число $x входит в числовой ряд!";}
?>