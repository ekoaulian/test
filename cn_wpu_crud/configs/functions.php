<?php 
	//koneksi data base
	$koneksi	= mysqli_connect("localhost", "root", "", "test_phpdasar");

	function query($query) {
		global $koneksi;
		$result 	= mysqli_query($koneksi, $query);
		$rows		= [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}
	function tambah($data) {
		global $koneksi;
		$npm 		= $data["npm"];
		$nama 		= $data["nama"];
		$email 		= $data["email"];
		$jurusan 	= $data["jurusan"];
		$gambar 	= $data["gambar"];
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$jurusan', '$gambar') ";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}

?>