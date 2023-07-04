<!DOCTYPE html>
<html>
<head>
    <title>FORM TIKET BOLA SEA GAMES 2018</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <style type="text/css">
        h4{text-align: center;}
        form{margin-left: 35%}
    </style>
</head>
<body>
    <h4>FORM TIKET BOLA SEA GAMES 2018</h4>
    <h4>INDONESIA VS MALAYSIA<br>PUKUL 15.00 WIB</h4>
    <form method="POST">
        <table>
            <tr>
                <td>NAMA PEMESAN<td>
                <td>=</td>
                <td colspan="2"><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>TELP<td>
                <td>=</td>
                <td colspan="2"><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>JENIS TIKET</td>
                </td>
                <td>=</td>
                <td colspan="2">
                    <select name="jenis">
                        <option value="VIP">VIP</option>
                        <option value="Cat 1">Cat 1</option>
                        <option value="Cat 2">Cat 2</option>
                        <option value="Cat 3">Cat 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>JUMLAH TIKET<td>
                <td>=</td>
                <td><input type="text" name="jumlah"></td>
                <td>Lembar</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" name="simpan"></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
echo '<br><br><h4 style="margin-left: 0%;">DATA PEMESANAN TIKET</h4>';
echo '<table style="margin-left: 40%;">';
echo '<tr><td>'.'NAMA PEMESAN'.'</td><td>:</td><td>'.$_POST['nama'].'</td></tr>';
echo '<tr><td>'.'TELEPON'.'</td><td>:</td><td>'.$_POST['telp'].'</td></tr>';
echo '<tr><td>'.'JENIS TIKET'.'</td><td>:</td><td>'.$_POST['jenis'].'</td></tr>';
echo '<tr><td>'.'JUMLAH TIKET'.'</td><td>:</td><td>'.$_POST['jumlah'].' Lembar</td></tr>';
echo '</table>';
}
?>