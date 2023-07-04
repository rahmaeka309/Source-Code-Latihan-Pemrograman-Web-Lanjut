<?php 
	echo "<hr>";
	echo "<h3>Nama : Rahma Eka Putri<br> NPM : 202043502687</h3><hr>";

	//Operator Aritmatika
	echo "<h3>Aritmatika</h3>";
	echo "Variabel A = 10 & Variabel B = 3<br>";

	$a = 10;
	$b = 3;

	$c = $a + $b;
	echo "$a + $b = $c <br>";
	$c = $a - $b;
	echo "$a - $b = $c <br>";
	$c = $a * $b;
	echo "$a * $b = $c <br>";
	$c = $a / $b;
	echo "$a / $b = $c <br>";
	$c = $a % $b; //Sisa Bagi
	echo "$a % $b = $c <br>";
	$c = $a ** $b; //Pangkat
	echo "$a^$b = $c <br>";
	echo "<hr>";

	//Operator Penugasan
	echo "<h3>Penugasan</h3>";
	echo "Variabel Nilai = 80<br>";

	$nilai  = 80;
	$nilai += 10;
	echo "Nilai dari +=  adalah $nilai <br>";
	$nilai -= 20;
	echo "Nilai dari -=  adalah $nilai <br>";
	$nilai *= 5;
	echo " Nilai dari *=  adalah $nilai <br>";
	$nilai /= 10;
	echo "Nilai dari /=  adalah $nilai<br>";
	echo "<hr>";

	//Operator Bitwise
	echo "<h3>Bitwise</h3>";
	//Bitwise AND
	$c = $a & $b;
	echo "$a & $b = $c <br>";
	//Bitwise OR
	$c = $a | $b;
	echo "$a | $b = $c <br>";
	//Bitwise XOR
	$c = $a ^ $b;
	echo "$a ^ $b = $c <br>";
	//Bitwise Left
	$c = $a << $b;
	echo "$a << $b = $c <br>";
	//Bitwise Right
	$c = $a >> $b;
	echo "$a >> $b = $c <br>";
	echo "<hr>";

	//Operator Perbandingan
	echo "<h3>Perbandingan</h3>";
	$nilai = 90;
	$lulus = $nilai > 75;
	echo "Nilai {$nilai} > 75 = ";
	if ($nilai > 75) {
		echo"Lulus";
	}else {
		echo "Tidak Lulus";
	}
	echo "<hr>";

	//Operator Logika
	echo "<h3>Logika</h3>";
	$a = true;
	$b = false;

	$c = $a && $b;
	printf("%b && %b = %b <br>", $a, $b, $c);
	$c = $a || $b;
	printf("%b || %b = %b <br>", $a, $b, $c);
	$c = !$a;
	printf("!%b = %b <br>", $a, $c);
 ?>