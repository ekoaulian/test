<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
}else{

  $user = $_SESSION["username"];
  $user_id = $_SESSION["user_id"];  
  $level = $_SESSION["level"];

include '../home/sidebar.php';
?>
<body>
<center>	
	
	Ganti Password<br/><br/>	
	<form method="post" action="action_ganti_pass.php">
		<label>Masukkan Password Lama</label><br/>
		<input type="password" name="password" required><br/><br/>

		<label>Masukkan Password Baru</label><br/>
		<input type="password" name="password_baru" required><br/><br/>

		<label>konfirmasi Password</label><br/>
		<input type="password" name="konfirmasi_password" required><br/><br/>
	
		<input type="submit" name="submit" value="Ganti Password">				
	</form>
</center>	
</body>
</html>
<?php
}
?>