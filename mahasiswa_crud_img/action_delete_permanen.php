<?php

//koneksi database
include 'koneksi.php';

$mahasiswa_id = $_GET['mahasiswa_id'];
$tanggal = date("Y-m-d H:i:s");

$sql = "SELECT * FROM mahasiswa WHERE mahasiswa_id = $mahasiswa_id";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
$fetch = mysqli_fetch_assoc($query);
$path = 'mahasiswa_foto/';
unlink($path.$fetch['mahasiswa_foto']);

if (mysqli_query($koneksi, 'delete from mahasiswa where mahasiswa_id = '.$mahasiswa_id)) {
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