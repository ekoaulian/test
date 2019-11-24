<?php

$panjang = 14; 	// atau diameter lingkaran
$lebar = 5;
$tinggi = 4;	// tinggi bangun ruang

if(isset($tinggi) && $tinggi > 0) {
    echo "Luas selimut balok: ". $panjang * $lebar * $tinggi ."<br>";
    echo "Luas selimut tabung: " . 2 * 22/7 * $panjang/2 * ( $panjang/2 + $tinggi );
} else {
	echo "Luas persegi: ". $panjang * $lebar ."<br>";
	echo "Luas lingkaran: " . 1/4 * 22/7 * $panjang**2;
}
?>