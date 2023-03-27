<?php
//PUTRI MARIA CORNELIA PURBA-221510008 
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];

echo" Bilangan 1 =" .$no1. "<br>";
echo" Bilangan 2 =" .$no2. "<br>";

$tambah = $no1 + $no2 ; 
echo " Penjumlahan = ".$tambah. "<br>" ;
//kurang

$kurang = $no1 - $no2 ; 
echo "Pengurangan = ".$kurang. "<br>";
//kali

$kali = $no1 * $no2 ; 
echo " Perkalian = ".$kali. "<br>";
//bagi

$bagi = $no1 / $no2 ; 
echo " Pembagian= ".$bagi. "<br>";
?>