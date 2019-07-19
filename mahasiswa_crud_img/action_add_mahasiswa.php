<?php
include'koneksi.php';
// session_start();

//tangkap data
$mahasiswa_name = $_POST['mahasiswa_name'];
$mahasiswa_jurusan = $_POST['mahasiswa_jurusan'];
$mahasiswa_jk = $_POST['mahasiswa_jk'];
$mahasiswa_foto = $_FILES['mahasiswa_foto']['name'];
$tmp = $_FILES['mahasiswa_foto']['tmp_name'];
$foto_new = date('dmYHis').$mahasiswa_foto;
$path = "mahasiswa_foto/".$foto_new;

move_uploaded_file($tmp, $path);

$tanggal = date("Y-m-d H:i:s");
// $myUserId = $_SESSION[""];
$IsActive = 1;



//generate mahasiswa id
$sqlID = "SELECT mahasiswa_id FROM mahasiswa ORDER BY mahasiswa_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['mahasiswa_id'] + 1;

//input ke database
$sql = "INSERT INTO mahasiswa values($myID,'$mahasiswa_name','$mahasiswa_jurusan','$mahasiswa_jk','$foto_new','$tanggal','$tanggal',$IsActive)";
if (mysqli_query($koneksi, $sql)){
	echo "<script>
			alert('data berhasil disimpan');
			document.location.href = 'index.php';
			</script>";
}else{
	echo "data gagal disimpan";
}

mysqli_close($koneksi);
?>