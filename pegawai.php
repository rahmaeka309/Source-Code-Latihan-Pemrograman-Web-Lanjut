<?php 
include "koneksi.php";

$q = "SELECT*FROM pegawai";
$ex = mysqli_query($conn, $q);
echo "<a href='index.php'>Tambah Pegawai</a>";
echo "<table border=1>";
echo "<tr><th>NIP</th><th>Nama Pegawai</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Jenis Kelamin</th><th>Jabatan</th><th>Alamat</th><th>Aksi</th></tr>";
while ($r = mysqli_fetch_array( $ex)) {
	echo "<tr><td>".$r['NIP']."</td>";
	echo "<td>".$r['nama']."</td>";
	echo "<td>".$r['tempat']."</td>";
	echo "<td>".$r['tgl_lahir']."</td>";
	echo "<td>".$r['jenis_kelamin']."</td>";
	echo "<td>".$r['jabatan']."</td>";
	echo "<td>".$r['alamat']."</td>";
	echo "<td><a href='edit.php?n=".$r['NIP']."'>Ubah</a>";
	echo "<a href='delete.php?n=".$r['NIP']."'>Delete</a>";
	echo "</td></tr>";
}
echo "</table>";
 ?>