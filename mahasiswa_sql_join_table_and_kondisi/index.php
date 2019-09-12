				<center>
				Table Nilai
				<table border="2">
                        <thead>
						<th>Id_nilai</th>
						<th>Id mahasiswa</th>
						<th>id mata kuliah</th>
						<th>nilai</th>
						<th>Keterangan</th>
						</thead>
					<tbody>
						<?php 
						include 'koneksi.php';
						// $no = 1;
						$data = mysqli_query($koneksi,"select * from nilai");
						while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $d['id_nilai']; ?></td>
							<td><?php echo $d['id_mahasiswa']; ?></td>
							<td><?php echo $d['id_matakuliah']; ?></td>
							<td><?php echo $d['nilai']; ?></td>
							<td>
								<?php if($d['nilai'] > '70' ){ ?>
			                      <mark>Lulus dengan nilai <?php echo $d['nilai']; ?> </mark>
			                      <?php }else{ ?>
			                      Gagal dengan nilai <?php echo $d['nilai']; ?>
			                    
			                    <?php 
			                    };
			                	}
			                    ?>
							</td>
						</tr>
						
					</tbody>
					</table>
					</center>
					<br/>
					<br/>
					<center>
					Join Table
				<table border="2">
                        <thead>
						<th>Nama Mahasiswa</th>
						<th>Nama matakuliah</th>
						<th>Nilai</th>
						<th>Keterangan</th>
						</thead>
					<tbody>
						<?php 
						include 'koneksi.php';
						$data = mysqli_query($koneksi,"
						select mhs.nama_mahasiswa,matkul.nama_matakuliah,n.nilai 
						from nilai as n 
						inner join matakuliah as matkul on matkul.id_matakuliah=n.id_matakuliah 
						inner join mahasiswa as mhs on mhs.id_mahasiswa=n.id_mahasiswa"
						);
						while($d = mysqli_fetch_array($data)){
						?>
						<tr>
							<td><?php echo $d['nama_mahasiswa']; ?></td>
							<td><?php echo $d['nama_matakuliah']; ?></td>
							<td><?php echo $d['nilai']; ?></td>
							<td>
								<?php if($d['nilai'] > '70' ){ ?>
			                      <mark>Lulus dengan nilai <?php echo $d['nilai']; ?> </mark>
			                      <?php }else{ ?>
			                      Gagal dengan nilai <?php echo $d['nilai']; ?>
			                    
			                    <?php 
			                    };
			                	}
			                    ?>
							</td>
						</tr>
						
					</tbody>
					</table>
					</center>