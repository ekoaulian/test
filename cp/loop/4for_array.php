<?php 

$warna = [

'merah','biru','kuning','merah','hijau',
'oranye','ungu','biru','kuning','merah',
'hijau','oranye','ungu','merah','violet'
];

$jumlah_warna = 0;

for ($i=0; $i < 15; $i++) { 
	if ($warna[$i] == 'violet') {
		$jumlah_warna++;
	}
}
echo "Jumlah warna violet pada array sebanyak $jumlah_warna ";
 ?>