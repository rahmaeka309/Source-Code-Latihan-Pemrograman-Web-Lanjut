<?php
	echo "Hello World!";
?>
<br><br>

<?php
	//Pendeklarasian Variabel
	$nama_lengkap = "Rahma Eka Putri";
	$gaji = 10000000;
	//Menampilkan Variabel
	echo "Nama Lengkap : $nama_lengkap<br>";
	echo "Gaji : Rp. $gaji<br>";

	$gaji = "Sepuluh Juta Rupiah";
	echo "Terbilang : $gaji";
?>
<br><br>

<?php
	$panjang = 10;
	$lebar = 10;
	define("luas_persegi",$panjang*$lebar);
	echo "Luas Persegi Adalah = ".luas_persegi." cm2";
?>
<br><br>
<?php
	define("panjang",10);
	define("lebar",10);
	$luas = panjang*lebar;
	echo "Luas Persegi Adalah = $luas cm2";
?>
<br><br>

<?php
	//Pendeklarasian
	$angka1 = 20;
	$angka2 = 5;
	$jumlah = $angka1 + $angka2;
	$kurang = $angka1 - $angka2;
	$kali = $angka1 * $angka2;
	$bagi = $angka1 / $angka2;

	/*Tampilkan*/
	echo "Nilai Variabel \$angka1 = $angka1 dan \$angka2 = $angka2 <br>";
	echo "Dijumlah : $jumlah <br>";
	echo "Dikurang : $kurang <br>";
	echo "Dikali : $kali <br>";
	echo "Dibagi : $bagi <br>";
?>
<br><br>

<?php
	$a = 7; #Sesuai 2 digit NPM terakhir(202043502687)
	$b = 8;
	echo "$a == $b : ".($a==$b);
	echo "<br>$a != $b : ".($a!=$b);
	echo "<br>$a > $b : ".($a>$b);
	echo "<br>$a < $b : ".($a<$b);
	echo "<br>($a == $b) && ($a>$b) : ".(($a != $b) && ($a>$b));
	echo "<br>($a == $b) || ($a>$b) : ".(($a != $b) || ($a>$b));
?>