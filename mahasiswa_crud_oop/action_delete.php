<?php
    require_once('config/database.php');

    $id_mahasiswa = $_GET['id_mahasiswa'];

    $delete = $db->delete('mahasiswa', 'id_mahasiswa= '. $id_mahasiswa );

    if($delete)
    {
    	echo "berhasil";
    }
    else {
    	echo "gagal";
    }
?>