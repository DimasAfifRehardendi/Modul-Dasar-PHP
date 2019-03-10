<?php 

$arrNilai = array ("Ani" => 80, "Otim"  =>90, "Ana" => 75, "Budi" => 85);
echo $arrNilai['Ana']." "; //75
echo $arrNilai['Ani']." "; //80

$arrNilai = array();//("Ani" => 80, "Asma" => 95, "Sri" => 77, "Otim" =>90);
$arrNilai['Ani'] = 80;
$arrNilai['Asma'] = 95;
$arrNilai['Sri'] = 77;
$arrNilai['Otim'] = 90;
echo $arrNilai['Otim']." "; // 90
echo $arrNilai['Asma']; //95
?>