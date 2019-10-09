<?php 
	include 'config/koneksi.php';
	$data = mysqli_query($koneksi, "select * from saldo where id_saldo = 1 ");
		//apa bila data kosong 
		if (mysqli_num_rows($data) == 0) {
			//jika data kosong akan menampilkan
			echo '<p class="bg-danger text-white">Saldo Belum ada.</p>';
		}else{
		
		while ($d = mysqli_fetch_array($data)) {
    	$saldo_awal		= $d['saldo'];
     } } 

	$id_saldo		= $_POST['id_saldo'];
	$saldo			= $_POST['saldo'];
	$total			= $saldo_awal - $saldo;
	$sql	= "UPDATE saldo SET saldo = '$total' WHERE id_saldo = '$id_saldo' ";
	if (mysqli_query($koneksi, $sql)) {
		echo "<script>
			alert('Saldo berkurang Rp. $saldo');
			document.location.href = 'index.php';
			</script>"; 
	} else {
		echo "gagal";
	}
	mysqli_close($koneksi);
?> 