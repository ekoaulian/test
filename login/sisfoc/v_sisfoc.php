<!DOCTYPE html>
	<?php
		session_start();
		if ($_SESSION['username']=='') 
		{
		  header('location:../admin/login.php');

		}
		  else{

		  $user = $_SESSION["username"];
		  $user_id = $_SESSION["user_id"];  
		  $level = $_SESSION["level"];
	?>
<html>
<head>
	<title>home</title>
</head>
<body>
<?php include '../home/sidebar.php'; ?>
Wellcome <b> <?php echo $_SESSION['username'];?> </b><br/>
Menu Sisfo C<br/>

<a href="../admin/logout.php">Keluar</a>
</body>
</html>
<?php
}
?>