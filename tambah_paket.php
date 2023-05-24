<?php 
    include "header.php";
    include "koneksi.php";
    $qry_detail_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_detail_paket);
?>
<br>
<h2 align="center">PROSES LAUNDRY</h2>
<br>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
        <form action="masuk_cart.php?id_paket=<?=$dt_paket['id_paket']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama paket</td><td><?=$dt_paket['jenis']?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td><td><?=$dt_paket['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pembelian</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="PROSES"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php 
    include "footer.php";
?>
