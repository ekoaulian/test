<?php
    include 'config/koneksi.php';
    $sqlid = mysqli_query($koneksi, "SELECT id FROM artikel WHERE app_status = 1 order by id DESC LIMIT 1") ;
    $dataid = mysqli_fetch_assoc($sqlid);
    $genID = (empty($dataid)) ? 0 : $dataid['id'];
?> 

  <?php
    $data = mysqli_query($koneksi, "SELECT DISTINCT t.nama_toko FROM artikel as me inner join toko as t on 
    t.toko_id = me.toko_id where me.id = $genID");
    $d = mysqli_fetch_assoc($data);
  ?>

  <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['nama_toko'] ;?></a></font>
  <br/>
  <?php
      $data = mysqli_query($koneksi, "SELECT DISTINCT judul_artikel,tanggal FROM artikel where id = $genID");
      $d = mysqli_fetch_assoc($data);
  ?>

  <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['judul_artikel'] ;?></a></font>
  <br/>

  <?php if($d['tanggal'] != ''){ ?>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>

  <?php }else{ ?>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
  <?php } ?>

  <br/>
  <span>Unservicable</span>

  <?php
    $data = mysqli_query($koneksi, "select count(menu_id) as el_mon from artikel where status = 'Tidak tersedia' and id = $genID") ;
    $d = mysqli_fetch_assoc($data);
    echo $d['el_mon'] ;
  ?>

  <span>Serviceable</span>

  <?php
    $data = mysqli_query($koneksi, "select count(menu_id) as el_mon from artikel 
    where status = 'Tersedia' and id = $genID") ;
    $d = mysqli_fetch_assoc($data);
    echo $d['el_mon'] ;
  ?>

  <?php
    include 'config/koneksi.php';
    $sqlID = mysqli_query($koneksi, "SELECT id FROM artikel WHERE app_status = 1 order by id DESC LIMIT 1") ;
    $dataID = mysqli_fetch_assoc($sqlID);
    $id = (empty($dataID)) ? 0 : $dataID['id'];
  ?>

  <?php
    $data = mysqli_query($koneksi, "SELECT DISTINCT t.nama_toko FROM artikel as me inner join toko as t on 
    t.toko_id = me.toko_id where me.id = $id");
    $d = mysqli_fetch_assoc($data);
  ?>
  <br/>

  <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['nama_toko'] ;?></a></font>

  <?php
    $data = mysqli_query($koneksi, "SELECT DISTINCT judul_artikel,tanggal FROM artikel where id = $id");
    $d = mysqli_fetch_assoc($data);
  ?>

  <br/>
  <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['judul_artikel'] ;?></a></font>

  <?php if($d['tanggal'] != ''){ ?>
  
  <br/>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>

  <?php }else{ ?>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
  <?php } ?>

  <br/>
  <br/>
  <table border="2">

  <tr>
    <th>Nama Menu</th>
    <th>Ketersediaan</th>
    <th>Harga</th>
  </tr>

  <tbody>

  <?php 
    $sql = "select e.nama_menu,me.status,me.deskripsi from artikel as me inner join menu as e ON e.menu_id = me.menu_id where me.id = $id";
    $data = mysqli_query($koneksi,$sql);
    while($d = mysqli_fetch_array($data))
    {
  ?>
  <?php 
    if($d['status'] == 'serviceable')
    { 
  ?>

  <?php 
    }
    else
    { 
  ?>
  <?php 
    }; 
  ?>
  <td width="50%">
  <?php echo $d['nama_menu']; ?>
  </td>

  <td width="20%">
  <?php if($d['status'] == 'serviceable')
  { ?>
  <button><?php echo $d['status']; ?></button>
                <?php }else{ ?>
  <button><?php echo $d['status']; ?></button>

  <?php 
  }; ?>
  
  </td>
  <td width="30%"><center><?php echo $d['deskripsi']; ?></center></td>
  </tr>
  <?php 
  }
  ?>