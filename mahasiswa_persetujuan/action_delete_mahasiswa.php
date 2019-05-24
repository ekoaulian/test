<?php

//koneksi database
include 'koneksi.php';

$mahasiswa_id = $_GET['mahasiswa_id'];
$tanggal = date("Y-m-d H:i:s");

$sql = "UPDATE mahasiswa_persetujuan SET is_active = 0,updated_at='$tanggal' WHERE mahasiswa_id = $mahasiswa_id";
if (mysqli_query($koneksi, $sql)) {
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php';
		</script>";
}else{
	echo"data gagal dihapus";
	// echo "<script>
	// 			alert('data gagal dihapus');
	// 			document.location.href = 'index.php';
	// 	</script>";
}

mysqli_close($koneksi);

?>