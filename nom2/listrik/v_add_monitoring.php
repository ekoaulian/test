<!DOCTYPE html>
<html>
<body>

Form Monitoring
    <form action="action_add_monitoring.php" method="post">

    <label for="tanggal">Tanggal</label>
    <input type="text" name="tanggal" readonly value="<?php echo date('d-M-Y'); ?>">

<table border="2">
    <h2>test</h2>
    <label for="teknisi">Nama Teknisi</label>
    <select name="toko_id_menu" required>

    <?php
    include '../config/koneksi.php';
    $data=mysqli_query($koneksi,"select * from toko where is_active = 1");
    while($d=mysqli_fetch_array($data)) { ?>
    <option value="<?php echo $d['toko_id']; ?>"><?php echo $d['nama_toko']; ?></option>
    <?php
    } ?>
    </select>

    <br/>
    <label>Personil Stanby</label>
    <input type="number" name="judul_artikel" id="judul_artikel" required>

    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Tersedia</th>
            <th scope="col">Tidak Tersedia</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    
    <tbody>
        <?php 
            $no = 0;
            $data = mysqli_query($koneksi,"select * from menu where is_active = 1");
            while($d = mysqli_fetch_array($data)){
        ?>

        <tr>
        <th><?php echo $d['nama_menu']; ?></th>
            <td>
                <input type="radio" name="status_<?= $no ?>" id="tersedia" value="<?= $d['menu_id'] ?>:tersedia" >
            </td>
            
            <td>
                <input class="form-check-input" type="radio" name="status_<?= $no ?>" id="tidak tersedia" value="<?= $d['menu_id'] ?>:tidak tersedia">
            </td>

            <td> 
                <input type="text" name="deskripsi_<?= $no ?>" id="deskripsi_<?= $no ?>" required>  
            </td>

        </tr>
        <?php 
            $no++;
            }
        ?>
    </tbody>
</table>
                                        <br/>
        <button type="submit" name="submit" class="btn btn-info">Simpan</button>
        </form>

</body>
</html>
