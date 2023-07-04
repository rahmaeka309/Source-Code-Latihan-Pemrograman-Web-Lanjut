<?php
	$conn=mysqli_connect('localhost','root','','kepegawaian_ft');
	if (!$conn) {
		die("koneksi gagal :" .mysqli_connect_error());
	}else{
		echo "koneksi berhasil";
	}
?>
