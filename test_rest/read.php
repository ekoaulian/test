<?php
	
	include 'config/koneksi.php';

	$data = mysqli_query($koneksi,"select * from mahasiswa");
	while($d = mysqli_fetch_array($data)){
?>

	<?= $d['id_mahasiswa']; ?>
	<?= $d['nama_mahasiswa']; ?>
	<?= $d['jurusan_mahasiswa']; ?>
	<?= $d['alamat_mahasiswa'].'<br/>'; ?>

<?php
}
?>