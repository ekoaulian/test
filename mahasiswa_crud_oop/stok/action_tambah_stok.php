<?php
    require_once('../config/database.php');

    $nama_barang = $_POST['nama_barang'];

    $stok = $_POST['tambah_stok'];
    $stok_ditambah = $_POST['stok_ditambah'];

    $hasil_tambah = $stok + $stok_ditambah ;

    //print_r($hasil_tambah);

    $update = $db -> update ('stok', [
        'nama_barang' => $nama_barang,
        'stok' => $hasil_tambah
        ]);

    if ($update) {
        echo "Berhasil";
    }
    else {
        echo "Gagal";
    }
?>