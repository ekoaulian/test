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

		$npm 		= htmlspecialchars($data["npm"]);
		$nama 		= htmlspecialchars($data["nama"]);
		$email 		= htmlspecialchars($data["email"]);
		$jurusan 	= htmlspecialchars($data["jurusan"]);
		$gambar 	= htmlspecialchars($data["gambar"]);
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$jurusan', '$gambar') ";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}
	function hapus($id_mahasiswa) {
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = $id_mahasiswa");
		return mysqli_affected_rows($koneksi);
	}
	function ubah($data) {
		global $koneksi;

		$id_mahasiswa	= $data["id_mahasiswa"];
		$npm 		= htmlspecialchars($data["npm"]);
		$nama 		= htmlspecialchars($data["nama"]);
		$email 		= htmlspecialchars($data["email"]);
		$jurusan 	= htmlspecialchars($data["jurusan"]);
		$gambar 	= htmlspecialchars($data["gambar"]);
		$query = "UPDATE mahasiswa SET 
					npm 		= '$npm',
					nama 		= '$nama',
					email 		= '$email',
					jurusan 	= '$jurusan',
					gambar 		= '$gambar' WHERE id_mahasiswa = $id_mahasiswa";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}

?>