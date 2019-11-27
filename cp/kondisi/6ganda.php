<?php 

$barang = 'baju';
$luar_daerah = 'no';

$harga = 80000;
$biaya_ongkir = 15000;

//pengecekan untuk pembelian di luar daerah dikenakan biaya onkir

	// if ($barang == 'baju' && $luar_daerah == 'yes') {
	// 	echo "Total harga + ongkir : ".($harga+$biaya_ongkir);
	// } else {
	// 	echo "Total harga : ".$harga;
	// }

	//pengecekan or ||
	if ($barang == 'baju' || $luar_daerah == 'yes') {
		echo "Total harga + ongkir : ".($harga+$biaya_ongkir);
	} else {
		echo "Total harga : ".$harga;
	}
 ?>