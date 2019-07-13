<?php
include 'koneksi.php';
$post = json_decode(file_get_contents('php://input'), true);
$token = $post['token_firebase'];

if(empty($token))
{
	$res['status'] = false;
	$res['code'] = 400;
	$res['message'] = 'Token Firebase Kosong !';
}
else
{
	$data = mysqli_query($koneksi, "select token_firebase from tbl_global");
	$count = mysqli_num_rows($data);
	
	if($count > 0)
	{
		$sql = "UPDATE tbl_global SET token_firebase = '".$token."'";
	}
	else
	{
		$sql = "INSERT INTO tbl_global(token_firebase) values('".$token."')";
	}

	mysqli_query($koneksi, $sql) or die(mysqli_error());

	$res['status'] = true;
	$res['code'] = 200;
	$res['message'] = 'Sukses';
}

echo json_encode($res, true);
?>