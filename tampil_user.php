<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Daftar Karyawan KULIN LAUNDRY.</h3>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_user=mysqli_query($conn,"select * from user");
    $no=0;
    while($data_user=mysqli_fetch_array($qry_user)){
    $no++;?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_user['nama_user']?></h5>
                <br>
                <h5 style="color: light-black; font-family:montserrat; font-size: 15px;" class="card-text"><?=substr($data_user['username'], 0,20)?></h5>
                <br>
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-text">Posisi : <?=substr($data_user['role'], 0,20)?></h5>
                <br>
                <td></td><td></td><td></td><td> <a href="ubah_user.php?id_user=<?=$data_user['id_user']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_user=<?=$data_user['id_user']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
              </div>
            </div>
        </div>
        <?php

    }
    ?>
    <style>
        p {text-align: center;}
    </style>
</div>
<br>
<br>
<p><a href="tambah_user.php" class="btn btn-primary"><b>Tambah Karyawan</b></a></p>
<?php 
    include "footer.php";
?>

