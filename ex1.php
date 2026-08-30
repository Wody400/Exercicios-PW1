<?php
	echo "ola mundo<br>";
	$a=2+5;
	echo "$a<br>";
	$nome = "paulin";
	$idade = 33;
	echo "<p>$nome tem $idade anos</p><br>";
	$i = 1;
	$result1 = 7*1;
	$result2 = 7*2;
	$result3 = 7*3;
	$result4 = 7*4;
	$result5 = 7*5;
	$result6 = 7*6;
	$result7 = 7*7;
	$result8 = 7*8;
	$result9 = 7*9;
	echo "<h1>Tabuada do 7 Manual</h1><br>X1=$result1<br>X2=$result2<br>X3=$result3<br>X4=$result4<br>X5=$result5<br>X6=$result6<br>X7=$result7<br>X8=$result8<br>X9=$result9<br>";
	echo "<h1>Tabuada do 7 com For</h1>";
	$numero = 0;
	for($i = 1; $i < 10; $i++){
		$numero = $numero+7;
		echo "X$i=$numero<br>";
	}
?>