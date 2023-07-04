<!DOCTYPE html>
<html>
<head>
    <title>NILAI KHS MAHASISWA</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <style type="text/css">
        table{margin-left: 50px;}
    </style>
</head>
<body>
    <h5>Nama : Rahma Eka Putri NPM : 202043502687 Kelas : R6Z</h5>
    <h4><center>HASIL NILAI KHS MAHASISWA</center></h4>
    <form method="POST">
        <table cellpadding="7">
            <tr>
                <td>Nama Mahasiswa<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Kelas<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Nilai Tugas<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="tugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="uts"></td>
            </tr>
            <tr>
                <td>Nilai UAS<td>
                <td>:</td>
                <td colspan="2"><input type="text" name="uas"></td>
            </tr>
            <tr>
                <td colspan="4"><center><input type="submit" value="Hitung" name="hitung"></center></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['hitung'])){
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $kelas = $_POST['kelas'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $nilai_tugas = $tugas * 0.2;
    $nilai_uts = $uts * 0.3;
    $nilai_uas = $uas * 0.5;
    $nilai_akhir = $nilai_tugas + $nilai_uts + $nilai_uas;

    if ($nilai_akhir>=90){
        $grade = "A";
    }elseif($nilai_akhir>=80){
        $grade = "B";
    }elseif($nilai_akhir>=60){
        $grade = "C";
    }else{
        $grade = "D";
    }
    echo"
    <h4>Hasil Akhir KHS Mahasiswa</h4>
    <table>
            <tr>
                <td>Nama Mahasiswa<td>
                <td>:</td>
                <td>$nama</td>
            </tr>
            <tr>
                <td>NPM<td>
                <td>:</td>
                <td>$npm</td>
            </tr>
            <tr>
                <td>Kelas<td>
                <td>:</td>
                <td>$kelas</td>
            </tr>
            <tr>
                <td>Nilai Tugas<td>
                <td>:</td>
                <td>$tugas</td>
            </tr>
            <tr>
                <td>Nilai UTS<td>
                <td>:</td>
                <td>$uts</td>
            </tr>
            <tr>
                <td>Nilai UAS<td>
                <td>:</td>
                <td>$uas</td>
            </tr>
            <tr>
                <td>Nilai Akhir<td>
                <td>:</td>
                <td>$nilai_akhir</td>
            </tr>
            <tr>
                <td>Grade<td>
                <td>:</td>
                <td>$grade</td>
            </tr>
        </table>
    ";
}
?>