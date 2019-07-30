<?php
    include 'config/koneksi.php';
    $sqlid = mysqli_query($koneksi, "SELECT id FROM mon_listrik WHERE app_status = 1 order by id DESC LIMIT 1") ;
    $dataid = mysqli_fetch_assoc($sqlid);
    $genID = (empty($dataid)) ? 0 : $dataid['id'];
?> 

  <?php
    $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_listrik as me inner join teknisi as t on 
    t.teknisi_id = me.teknisi_id where me.id = $genID");
    $d = mysqli_fetch_assoc($data);
  ?>

  <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>
  <br/>
  <?php
      $data = mysqli_query($koneksi, "SELECT DISTINCT listrik_personil,tanggal FROM mon_listrik where id = $genID");
      $d = mysqli_fetch_assoc($data);
  ?>

  <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['listrik_personil'] ;?></a></font>
  <br/>

  <?php if($d['tanggal'] != ''){ ?>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>

  <?php }else{ ?>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
  <?php } ?>

  <br/>
  <span>Unservicable</span>

  <?php
    $data = mysqli_query($koneksi, "select count(listrik_id) as el_mon from mon_listrik where listrik_status = 'unserviceable' and id = $genID") ;
    $d = mysqli_fetch_assoc($data);
    echo $d['el_mon'] ;
  ?>

  <span>Serviceable</span>

  <?php
    $data = mysqli_query($koneksi, "select count(listrik_id) as el_mon from mon_listrik 
    where listrik_status = 'serviceable' and id = $genID") ;
    $d = mysqli_fetch_assoc($data);
    echo $d['el_mon'] ;
  ?>

  <?php
    include 'config/koneksi.php';
    $sqlID = mysqli_query($koneksi, "SELECT id FROM mon_listrik WHERE app_status = 1 order by id DESC LIMIT 1") ;
    $dataID = mysqli_fetch_assoc($sqlID);
    $id = (empty($dataID)) ? 0 : $dataID['id'];
  ?>

  <?php
    $data = mysqli_query($koneksi, "SELECT DISTINCT t.teknisi_name FROM mon_listrik as me inner join teknisi as t on 
    t.teknisi_id = me.teknisi_id where me.id = $id");
    $d = mysqli_fetch_assoc($data);
  ?>
  <br/>

  <font face="Britannic Bold" size="5">Teknisi : <a href="#"><?php echo $d['teknisi_name'] ;?></a></font>

  <?php
    $data = mysqli_query($koneksi, "SELECT DISTINCT listrik_personil,tanggal FROM mon_listrik where id = $id");
    $d = mysqli_fetch_assoc($data);
  ?>

  <br/>
  <font face="Britannic Bold" size="5">Personil standby : <a href="#"><?php echo $d['listrik_personil'] ;?></a></font>

  <?php if($d['tanggal'] != ''){ ?>
  
  <br/>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"><?php echo date("d-M-Y H:i:s", strtotime ($d['tanggal'])) ;?></a></font>

  <?php }else{ ?>
  <font face="Britannic Bold" size="5">Tanggal : <a href="#"></a></font>
  <?php } ?>

  <br/>
  <br/>
  <table border="2">

  <tbody>

  <?php 
    $sql = "select e.listrik_name,me.listrik_status,me.listrik_keterangan from mon_listrik as me inner join listrik as e ON e.listrik_id = me.listrik_id where me.id = $id";
    $data = mysqli_query($koneksi,$sql);
    while($d = mysqli_fetch_array($data))
    {
  ?>
  <?php 
    if($d['listrik_status'] == 'serviceable')
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
  <?php echo $d['listrik_name']; ?>
  </td>

  <td width="20%">
  <?php if($d['listrik_status'] == 'serviceable')
  { ?>
  <button><?php echo $d['listrik_status']; ?></button>
                <?php }else{ ?>
  <button><?php echo $d['listrik_status']; ?></button>

  <?php 
  }; ?>
  
  </td>
  <td width="30%"><center><?php echo $d['listrik_keterangan']; ?></center></td>
  </tr>
  <?php 
  }
  ?>