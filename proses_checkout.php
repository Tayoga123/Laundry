<?php 
    include "header.php";
?>
<h2>PEMROSESAN PAKET</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>ID</th><th>Nama Paket</th><th>Deskripsi</th><th>Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['process'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_paket']?></td><td><?=$val_produk['harga']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
 
        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php 
    include "footer.php";
?>
