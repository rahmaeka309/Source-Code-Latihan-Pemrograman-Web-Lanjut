<!DOCTYPE html>
<html>
<head>
    <title>STATUS GOLONGAN KARYAWAN</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <style type="text/css">
        table{margin-left: 50px;}
    </style>
</head>
<body>
    <h5>Nama : Rahma Eka Putri NPM : 202043502687 Kelas : R6Z</h5>
    <h4><center>CEK STATUS GOLONGAN KARYAWAN</center></h4>
    <form method="POST">
        <table cellpadding="7">
            <tr>
                <td>Nama Karyawan<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gaji Pokok<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="pokok"></td>
            </tr>
            <tr>
                <td>Uang Lembur<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="lembur"></td>
            </tr>
            <tr>
                <td>Tunjangan<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="tunjangan"></td>
            </tr>
            <tr>
                <td>Hutang<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="hutang"></td>
            </tr>            
            <tr>
                <td colspan="4"><center><input type="submit" value="Cek Status" name="cek"></center></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['cek'])){
    $nama = $_POST['nama'];
    $pokok = $_POST['pokok'];
    $lembur = $_POST['lembur'];
    $tunjangan = $_POST['tunjangan'];
    $hutang = $_POST['hutang'];

    $total = $pokok + $lembur + $tunjangan - $hutang;

    if ($total>=10000000){
        $status = "Karyawan Tetap";
    }elseif($total>=5000000){
        $status = "Karyawan Kontrak";
    }else{
        $status = "Karyawan Honor";
    }
    echo"<h4>Status Karyawan</h4>
        <table>
            <tr>
                <td>Nama Karyawan<td>
                <td>:</td>
                <td>$nama</td>
            </tr>
            <tr>
                <td>Gaji Pokok<td>
                <td>:</td>
                <td>$pokok</td>
            </tr>
            <tr>
                <td>Uang Lembur<td>
                <td>:</td>
                <td>$lembur</td>
            </tr>
            <tr>
                <td>Tunjangan<td>
                <td>:</td>
                <td>$tunjangan</td>
            </tr>
            <tr>
                <td>Hutang<td>
                <td>:</td>
                <td>$hutang</td>
            </tr>
            <tr>
                <td>Total Gaji<td>
                <td>:</td>
                <td>$total</td>
            </tr>
            <tr>
                <td>Status Karyawan<td>
                <td>:</td>
                <td>$status</td>
            </tr>
        </table>
    ";
    }
?>