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

	//result error database
	//$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
	//if (!$result) {
	//echo mysqli_error($koneksi);
	//}
?>