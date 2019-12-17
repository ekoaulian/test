<?php 

$warna = [

'merah','biru','kuning','merah','hijau',
'oranye','ungu','biru','kuning','merah',
'hijau','oranye','ungu','merah','violet'
];

$jumlah_warna = 0;

foreach ($warna as $nomor => $nilai) {
	echo "Index ke- $nomor berisi nilai $nilai <br>";
	if ($nilai == 'violet') {
		$jumlah_warna++;
	}
}

echo "Jumlah warna violet pada array sebanyak $jumlah_warna ";
 ?>