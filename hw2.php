<?php
	$x = $_GET['x'];
	//$x=(int)$x;
	//var_dump($x);
	/* if (preg_match('/\D+/',$x)) {
	//if (!is_numeric($x)) {
		var_dump($x);
		echo "<br>Некорректный ввод: - введите целое число";
		die();
	}
	else  */
	{
	$a = 1;
	$b = 1;
	$flag=true;
	//echo "$a<br>$b<br>";
	while ($flag)
	{
	if ($a > $x) 
		{
			echo "Задуманное число $x НЕ входит в числовой ряд!"; 
			break;
		}
	else
	{
		if ($a == $x) // === не работает!!!!!
		{
			//var_dump($x); // это string
			//var_dump($a); // это int 
			echo "Задуманное число $x входит в числовой ряд!"; 
			break;
		}
		else
		{
			$fibo = $a;
			$a = $a + $b;
			$b = $fibo;
			//echo "$a<br>";
		}
	}
	}
	}
?>