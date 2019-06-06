<?php

	// menghubungkan php dengan koneksi database
	include '../config/koneksi.php';
	session_start();

	if ($_SESSION['username']=='') {
		header('location:login.php');
	}else{
		$user = $_SESSION["username"];
		$user_id = $_SESSION["user_id"];	
		$level = $_SESSION["level"];

		// var_dump($user,$user_id,$level);

		if ($level =='ADMIN') {
			header('location:../home/home.php');
		}
		elseif ($level=='sisfoa') {
			header('location:../home/home.php');
		}
		elseif ($level=='sisfob') {
			header('location:../home/home.php');
		}
		elseif ($level=='sisfoc') {
			header('location:../home/home.php');
		}
		elseif ($level=='sisfod') {
			header('location:../home/home.php');
		}
		elseif ($level=='dosen') {
			header('location:../home/home.php');

		// if ($level =='ADMIN') {
		// 	header('location:../home/home.php');
		// }
		// elseif ($level=='sisfoa') {
		// 	header('location:../sisfoa/v_sisfoa.php');
		// }
		// elseif ($level=='sisfob') {
		// 	header('location:../sisfob/v_sisfob.php');
		// }
		// elseif ($level=='sisfoc') {
		// 	header('location:../sisfoc/v_sisfoc.php');
		// }
		// elseif ($level=='sisfod') {
		// 	header('location:../sisfod/v_sisfod.php');
		// }
		// elseif ($level=='dosen') {
		// 	header('location:../home/home.php');
		}

	}

?>