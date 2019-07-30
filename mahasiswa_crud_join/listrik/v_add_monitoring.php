<!DOCTYPE html>
<html>
<body>

Form Monitoring
    <form action="action_add_monitoring.php" method="post">

    <label for="tanggal">Tanggal</label>
    <input type="text" name="tanggal" readonly value="<?php echo date('d-M-Y'); ?>">

<table border="2">
    <h2>Peralatan Listrik Bandar Udara Trunojoyo</h2>
    <label for="teknisi">Nama Teknisi</label>
    <select name="teknisi_id_listrik" required>

    <?php
    include '../config/koneksi.php';
    $data=mysqli_query($koneksi,"select * from teknisi where is_active = 1");
    while($d=mysqli_fetch_array($data)) { ?>
    <option value="<?php echo $d['teknisi_id']; ?>"><?php echo $d['teknisi_name']; ?></option>
    <?php
    } ?>
    </select>

    <br/>
    <label for="listrik">Personil Stanby</label>
    <input type="number" name="listrik_personil" id="listrik_personil" required>

    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Serviceable</th>
            <th scope="col">Unserviceable</th>
            <th scope="col">Keterangan</th>
        </tr>
    </thead>
    
    <tbody>
        <?php 
            $no = 0;
            $data = mysqli_query($koneksi,"select * from listrik where is_active = 1");
            while($d = mysqli_fetch_array($data)){
        ?>

        <tr>
        <th><?php echo $d['listrik_name']; ?></th>
            <td>
                <input type="radio" name="listrik_status_<?= $no ?>" id="serviceable" value="<?= $d['listrik_id'] ?>:serviceable" >
            </td>
            
            <td>
                <input class="form-check-input" type="radio" name="listrik_status_<?= $no ?>" id="unserviceable" value="<?= $d['listrik_id'] ?>:unserviceable">
            </td>

            <td> 
                <input type="text" name="listrik_keterangan_<?= $no ?>" id="listrik_keterangan_<?= $no ?>" required>  
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
