<?php
    require_once('config/database.php');

    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jurusan_mahasiswa = $_POST['jurusan_mahasiswa'];
    $alamat_mahasiswa = $_POST['alamat_mahasiswa'];

    $update = $db->update('mahasiswa', [
    	'nama_mahasiswa' => $nama_mahasiswa,
    	 'jurusan_mahasiswa' => $jurusan_mahasiswa,
    	 'alamat_mahasiswa' => $alamat_mahasiswa
    	 ]);
    if($update)
    {
    	echo "berhasil";
    }
    else {
    	echo "gagal";
    }



?>