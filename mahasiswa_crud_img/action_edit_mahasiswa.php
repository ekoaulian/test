<?php
// koneksi database
// session_start();
include 'koneksi.php';


// menangkap data yang di kirim dari form
$mahasiswa_id = $_POST['mahasiswa_id'];
$mahasiswa_name = $_POST['mahasiswa_name'];
$mahasiswa_jurusan = $_POST['mahasiswa_jurusan'];
$mahasiswa_jk = $_POST['mahasiswa_jk'];
$myDate = date("Y-m-d H:i:s");

// $myUserID = $_SESSION["user_id"];

// menginput data ke database
$sql = "UPDATE mahasiswa SET mahasiswa_name='$mahasiswa_name',mahasiswa_jurusan='$mahasiswa_jurusan',mahasiswa_jk='$mahasiswa_jk',updated_at='$myDate' WHERE mahasiswa_id = $mahasiswa_id";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil diupdate');
				document.location.href = 'index.php';
		</script>";
}else{
	echo "<script>
				alert('data gagal diupdate');
				document.location.href = 'index.php';
		</script>";
}
mysqli_close($koneksi);
?>