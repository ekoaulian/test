<?php 
	if ($_SESSION['username']=='') {
	    header('location:../admin/login.php');
	}else{
	    $user = $_SESSION["username"];
	  $user_id = $_SESSION["user_id"];  
	  $level = $_SESSION["level"];

	if ($level=='ADMIN') { 
?>

<table border="1">
	<tr>
		<td><a href="#">Home</a></td>
		<td><a href="../sisfoa/v_sisfoa.php">Kelas A</a></td>
		<td><a href="../sisfob/v_sisfob.php">Kelas B</a></td>
		<td><a href="../sisfoc/v_sisfoc.php">Kelas C</a></td>
		<td><a href="../sisfod/v_sisfod.php">Kelas D</a></td>
		<td>Dosen</td>
		<td><a href="../user/v_user.php">Tambah User</a></td>
		<td><a href="../admin/v_ganti_pass.php">Ganti password</a></td>
		<td><a href="../admin/logout.php">Keluar</a></td>
	</tr>
</table>
<?php } 

	elseif($level=='sisfoa') {
?>

	<table border="1">
		<tr>
			<td><a href="#">Home</a></td>
			<td><a href="../sisfoa/v_sisfoa.php">Kelas A</a></td>
			<td>Ganti password</td>
			<td><a href="../admin/logout.php">Keluar</a></td>
		</tr>
	</table>
<?php } 

	elseif($level=='sisfob') {
?>

	<table border="1">
		<tr>
			<td><a href="#">Home</a></td>
			<td><a href="../sisfob/v_sisfob.php">Kelas B</a></td>
			<td>Ganti password</td>
			<td><a href="../admin/logout.php">Keluar</a></td>
		</tr>
	</table>
<?php } 

	elseif($level=='sisfoc') {
?>

	<table border="1">
		<tr>
			<td><a href="#">Home</a></td>
			<td><a href="../sisfoc/v_sisfoc.php">Kelas C</a></td>
			<td>Ganti password</td>
			<td><a href="../admin/logout.php">Keluar</a></td>
		</tr>
	</table>
<?php } 

	elseif($level=='sisfod') {
?>

	<table border="1">
		<tr>
			<td><a href="#">Home</a></td>
			<td><a href="../sisfod/v_sisfod.php">Kelas D</a></td>
			<td>Ganti password</td>
			<td><a href="../admin/logout.php">Keluar</a></td>
		</tr>
	</table>

<?php } } ?>


<br/>