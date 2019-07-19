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

  include '../home/header.php'; 
?>
<body>
    <?php include '../home/sidebar.php'; ?>
      Tambah User
            <form method="post" action="action_add_user.php">
                    <label>Nama:</label>
                    <input type="text" name="nama" id="usr" required>
                    <br/>
                    <label>Email:</label>
                    <input type="email" name="email" id="email" required>
                    <br/>
                    <label>Username:</label>
                    <input type="text" name="username" id="usrname" required>
                    <br/>
                    <label>Password:</label>
                    <input type="password" name="password" id="pwd" required>
                    <br/>
                    <label>Hak Akses:</label>
                    <select name="level" id="sel1">
                        <option>ADMIN</option>
                        <option>sisfoa</option>
                        <option>sisfob</option>
                        <option>sisfoc</option>
                        <option>sisfod</option>
                    </select> 
                    <br/>
                <button type="submit">Simpan</button>
                <a href="v_user.php">Batal</a>
            </form>
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php
}
?>