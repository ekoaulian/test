<?php
	
	include 'config/koneksi.php';

	$id_mahasiswa = 1;
	$data = mysqli_query($koneksi,"select * from mahasiswa where id_mahasiswa='$id_mahasiswa'");
	while($d = mysqli_fetch_array($data)){
?>

	<?= $d['id_mahasiswa']; ?>
	<?= $d['nama_mahasiswa']; ?>
	<?= $d['jurusan_mahasiswa']; ?>
	<?= $d['alamat_mahasiswa'].'<br/>'; ?>

<?php
}
?>