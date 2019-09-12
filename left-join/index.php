<table border="2">
<th>id</th>
<th>Matakuliah</th>
<th>Dosen</th>
<?php

include 'koneksi.php';

$query = "SELECT m.id_matakuliah,m.nama_matakuliah,d.nama_dosen FROM matakuliah as m LEFT JOIN dosen as d ON m.id_dosen = d.id_dosen";
$sql = mysqli_query ($koneksi, $query);
while($d = mysqli_fetch_array($sql)) {

?>
<tr>
<td>
    <?php echo $d['id_matakuliah']; ?>
</td>
<td>
    <?php echo $d['nama_matakuliah']; ?>
</td>
<td>
    <?php echo $d['nama_dosen']; ?>
</td>
</tr>
<?php } ?>
</table>

<!-- ALTER TABLE `matakuliah` ADD CONSTRAINT fk_latihan_matakuliah_id_dosen FOREIGN KEY(id_dosen)
REFERENCES dosen(id_dosen)
ON UPDATE CASCADE ON DELETE CASCADE -> membuat foreign key ditabel matakuliah -->