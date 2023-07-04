<form method="POST">
    <table>
       <tr>
                <td>Nama<td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
            	<td>Aksi</td>
            	<td>:</td>
            	<td>
            		<input type="radio" name="aksi" value="Melangkah">Melangkah 
        			<input type="radio" name="aksi" value="Melompat"> Melompat 	
            	</td>
            </tr> 
            <tr>
                <td>Jumlah<td>
                <td>:</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            
            <tr>
                <td colspan="3"><center><input type="submit" value="Go" name="go"></center></td>
            </tr>
        </table>
    </form>
<?php
if(isset($_POST['go'])){
    $nama = $_POST['nama'];
    $aksi = $_POST['aksi'];
    $jumlah = $_POST['jumlah'];

	$i = 1;
	while ($i <= $jumlah) {
		echo "$nama $aksi $i kali</br>";
		$i = $i + 1;
	}
	echo "$nama berhenti $aksi";
    }
?>