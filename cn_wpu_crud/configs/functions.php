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
		
		//upload gambar
		$gambar = upload();
		if ( !$gambar ) {
			return false;
		}

		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$jurusan', '$gambar') ";
		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}
	function upload() {
		$namaFile 	= $_FILES['gambar']['name'];
		$ukuranFile	= $_FILES['gambar']['size'];
		$error 		= $_FILES['gambar']['error'];
		$tmpName	= $_FILES['gambar']['tmp_name'];

		//cek apakah tidak ada gambar yg diupload
		if ( $error === 4 ) {
			echo "<script>
				alert('pilih gambar dulu bro');
				</script>";
			return false;
		}
		//cek apakah yang diupload adalah gambar?
		$ekstensiGambarValid 	= ['jpg', 'jpeg', 'png'];
		$ekstensiGambar 		= explode('.', $namaFile);
		$ekstensiGambar 		= strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
			echo "<script>
				alert('yang anda upload bukan gambar bro');
				</script>";
			return false;
		}
		//cek jika ukuran terlalu besar
		if( $ukuranFile	> 1000000 ) {
			echo "<script>
				alert('ukuran terlalu gambar terlalu besar bro');
				</script>";
			return false;
		}
		//lolos pengecekan, gambar siap upload
		//geenerate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;  

		move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
		return $namaFileBaru;
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
	function cari($keyword) {
		$query = "SELECT * FROM mahasiswa WHERE
				nama LIKE '%$keyword%' OR
				npm LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";
		return query($query);
	}
	function registrasi($data) {
		global $koneksi;

		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($koneksi, $data["password"]);
		$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

		// cek konfirmasi password
		if( $password !== $password2 ) {
			echo "
				<script> alert('konfirmasi password tidak sesuai! ') </script>
			     ";
			return false;
		}
		//return 1;
		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//tambahkan userbaru ke database
		mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$username', '$password')");
		return mysqli_affected_rows($koneksi);
	}
?>