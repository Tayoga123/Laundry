<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Para Member KULIN LAUNDRY.</h3>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_member=mysqli_query($conn,"select * from member");
    $no=0;
    while($data_member=mysqli_fetch_array($qry_member)){
    $no++;?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$data_member['nama_member']?></h5>
                <br>
                <h5 style="color: light-black; font-family:montserrat; font-size: 15px;" class="card-text"><?=substr($data_member['telp'], 0,20)?></h5>
                <br>
                <?php if($data_member['jk']== "L" ){ ?>
                <h5 style="color: blue; font-family:montserrat; font-size: 20px;" class="card-text">Jenis Kelamin : <?=substr($data_member['jk'], 0,20)?></h5>
                <br>
                <?php }elseif($data_member['jk'] == "P"){ ?>
                <h5 style="color: red; font-family:montserrat; font-size: 20px;" class="card-text">Jenis Kelamin : <?=substr($data_member['jk'], 0,20)?></h5>
                <br>
                <?php } ?>
                <td></td><td></td><td></td><td> <a href="ubah_member.php?id_member=<?=$data_member['id_member']?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_member=<?=$data_member['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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

<p><a href="tambah_member.php" class="btn btn-primary"><b>Tambah Member</b></a></p>
<?php 
    include "footer.php";
?>

