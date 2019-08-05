<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_menu = $_POST['nama_menu'];
$myDate = date("Y-m-d H:i:s");
$myUserID = 1;
$isactive = 1;
 
//generated listrik id
$sqlID = "SELECT menu_id FROM menu ORDER BY menu_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['menu_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO menu values($myID,'$nama_menu','$myDate','$myDate',$myUserID,$myUserID,$isactive)";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_listrik.php';
		</script>";
}else{
	echo "Gagal meyimpan";
}

mysqli_close($koneksi);
?>