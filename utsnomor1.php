<?php
$d1 = 3; $d2 = 4; $p1 = 1; $p2 = 2; $j1 = 1; $j2 = 1;
$dinding = $d1 * $d2;
$pintu = $p1 * $p2;
$jendela = $j1 * $j2; 
$luas = $dinding - $pintu - $jendela;
$biaya = $luas * 25000;
echo "Menghitung Luas Dinding Dan Biaya Yang Akan Di Cat"; echo "</br></br>";
echo "Luas Dinding = ".$d1." x ".$d2." = ".$dinding." cm"; echo "</br>";
echo "Luas Pintu = ".$p1." x ".$p2." = ".$pintu." cm"; echo "</br>";
echo "Luas Jendela = ".$j1." x ".$j2." = ".$jendela." cm"; echo "</br></br>";
echo "Biaya Pembelian Cat Rp. 25.000"; echo "</br></br>";
echo "Luas Dinding Yang Di Cat? ".$luas." cm2"; echo "</br></br>";
echo "Biaya Keseluruhan Untuk Pengecetan Dinding Tersebut = Rp.".$biaya;
 ?>