<?php 
  include "koneksi.php";
?>
<form action="pegawai.php" method="POST">
  <table>
    <tr>
      <th>NIP</th>
      <td>:</td>
      <td><input type="text" name="nip"></td>
    </tr>
    <tr>
      <th>Nama Karyawan</th>
      <td>:</td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <th>Tempat Lahir</th>
      <td>:</td>
      <td><input type="text" name="tmpt"></td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>:</td>
      <td><input type="date" name="tgl"></td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>:</td>
      <td><label><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</label>
        <label><input type="radio" name="jk" value="Perempuan">Perempuan</label></td>
    </tr>
    <tr>
      <th>Jabatan</th>
      <td>:</td>
      <td><input type="text" name="jbtn"></td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>:</td>
      <td><textarea name="almt"></textarea></td>
    </tr>
    <tr>
      <td></td><td></td>
      <td><input type="submit" name="simpan" value="SIMPAN"><input type="submit" name="kembali" value="Kembali" a href="pegawai.php">
      </td>
    </tr>
  </table>
</form>
<?php 
  if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tempat = $_POST['tmpt'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $jbtn = $_POST['jbtn'];
    $thn = $_POST['thn'];
    $q = "INSERT INTO pegawai (NIP,nama,tempat,tgl_lahir,jenis_kelamin,jabatan,alamat)";
    $q .="VALUES ('$nip','$nama','$tempat','$tgl','$jk','$jbtn','$thn')";
    mysqli_query($q);
    echo "Data Tersimpan";
  }
 ?>