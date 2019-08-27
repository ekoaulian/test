<?php
	require_once('../config/database.php');

	$id_stok = $_GET['id_stok'];

	$delete = $db -> delete('stok', 'id_stok= '. $id_stok );

    if($delete)
    {
    	echo "berhasil";
    }
    else {
    	echo "gagal";
    }
?>