<?php 
function cetakSlipGaji($nama, $gaji, $terlambat){
	$potong = $terlambat * 15000;
	$total = $gaji - $potong;

	echo "Besaran Honor yang didapat oleh : <b>$nama</b></br>";
	echo "Gaji = $gaji</br>";
	echo "Potongan Keterlambatan = $potong</br>";
	echo "Total Diterima = $total</br>";
}
cetakSlipGaji("Gus Samsudin", 4500000, 10);
 ?>
