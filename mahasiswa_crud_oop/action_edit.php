<?php
    require_once('config/database.php');
    $id_mahasiswa = $_GET['id_mahasiswa'];

    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jurusan_mahasiswa = $_POST['jurusan_mahasiswa'];
    $alamat_mahasiswa = $_POST['alamat_mahasiswa'];

    $update = $db->update('mahasiswa', [
    	'nama_mahasiswa' => $nama_mahasiswa,
    	 'jurusan_mahasiswa' => $jurusan_mahasiswa,
    	 'alamat_mahasiswa' => $alamat_mahasiswa
    	 ],'id_mahasiswa='.$id_mahasiswa);
    if($update)
    {
    	echo "berhasil";
    }
    else {
    	echo "gagal";
    }



?>