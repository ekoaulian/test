<?php
// koneksi database
session_start();
include '../config/koneksi.php';

//set time zone
date_default_timezone_set("Asia/Jakarta");
 
// menangkap data yang di kirim dari form
$myDate = date('Y-m-d H:i:s');
$myUser = 1;

//Generate monitoring id
$sqlmon = "SELECT id FROM artikel ORDER BY id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlmon);
$data = mysqli_fetch_assoc($select);
$id = (empty($data)) ? 1 : intval($data['id']) + 1;

if(isset($_POST))
{
	//menu
	$sqlelb = "SELECT count(*) as jumlah FROM menu";
	$selectelb = mysqli_query($koneksi, $sqlelb);
	$dataelb = mysqli_fetch_assoc($selectelb);
	//personil menu
	$menuPerso = $_POST['judul_artikel'];
	//toko menu
	$tokomenu = $_POST['toko_id_menu'];
	//validasi_date
	$date_validasi = "SELECT tanggal FROM artikel where date(tanggal) = date('$myDate')";
	$query_dv = mysqli_query($koneksi,$date_validasi) or die (msql_error());
	if (mysqli_num_rows($query_dv) >0) {
		echo "<script>
				alert('Tanggal sekarang sudah pernah di input, silahkan hubungi ADMIN!!');
				document.location.href = 'v_add_monitoring.php';
		</script>";
	}
			
	for($b = 0; $b < $dataelb['jumlah']; $b++)
	{
		if(!empty($_POST['status_'.$b]))
		{
			$menu = explode(':', $_POST['status_'.$b]);
			$menu_ket = $_POST['deskripsi_'.$b];

			mysqli_query($koneksi, "INSERT INTO artikel(id,menu_id,tanggal,judul_artikel,toko_id,status,deskripsi) values($id, $menu[0], '$myDate', $menuPerso,$tokomenu, '$menu[1]','$menu_ket')");
		}
	}

	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_add_monitoring.php';
		</script>";
}
?>