<?php
    
        require_once('config/database.php');


        foreach($db->get('mahasiswa') as $data)
        {
    ?>
    

<form action="action_edit.php" method="post">
nama : <input type="text" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa'] ?>"> <br/>
jurusan : <input type="text" name="jurusan_mahasiswa" value="<?= $data['jurusan_mahasiswa'] ?>"> <br/>
alamat : <textarea type="text" name="alamat_mahasiswa"><?= $data['alamat_mahasiswa'] ?></textarea> <br/>
<button type="submit">save</button>
</form>
<?php } ?>