<!DOCTYPE html>
	<?php
		session_start();
		if (@$_SESSION['username']=='') 
		{
		  echo "<script>
				alert('Login Dahulu Brai');
				document.location.href = '../admin/login.php';
				</script>";

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
Menu Home<br/>

<br/>
</body>
</html>
<?php
}

include 'footer.php';
?>