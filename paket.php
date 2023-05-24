<?php 
    include "header.php";
?>
<br>
<h3 align="center" style="color: light-black; font-family:montserrat; font-size: 35px;">Daftar Paket KULIN LAUNDRY.</h3>
<br>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    while($dt_paket=mysqli_fetch_array($qry_paket)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <div class="card-body">
                <h5 style="color: light-black; font-family:montserrat; font-size: 20px;" class="card-title"><?=$dt_paket['jenis']?></h5>
                <br>
                <h5 style="color: grey; font-family:montserrat; font-size: 15px;" class="card-text"><?=substr($dt_paket['deskripsi'], 0,20)?></h5>
                <h5 style="color: grey; font-family:montserrat; font-size: 17px;" class="card-text">Rp.<?=substr($dt_paket['harga'], 0,20)?></h5>
                <br>
                <a href="tambah_paket.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-primary">Tambah</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
