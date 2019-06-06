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

?>
    <?php include '../home/sidebar.php'; ?>

    Master User
                <a href="../user/v_add_user.php">Tambah</a><br/><br/>
                    <table>
                        <thead>
                            <th>User Id</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Hak Akses</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                                include '../config/koneksi.php';
                                $data = mysqli_query($koneksi,"select * from user where is_active = 1");
                                while($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $d['user_id']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['level']; ?></td>
                                <td>
                                    <a href="v_edit_user.php?user_id=<?php echo $d['user_id']; ?> ">Edit</a> ||
                                    <a href="action_delete_user.php?user_id=<?php echo $d['user_id']; ?> ">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
</html>
<?php
}
?>