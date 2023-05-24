<?php 
    include "header.php";
?>

<h2>PROSES LAUNDRY</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>ID</th><th>Nama Paket</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_paket => $val_paket): ?>
            <tr>
                <td><?=($key_paket+1)?></td>
                <td><?=$val_paket['jenis']?></td>
                <td><?=$val_paket['qty']?></td>
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
 
        <?php endforeach ?>
    </tbody>
</table>
<form action="checkout.php" method="post">
        <select name="member" class="form-control">
            <option></option>
                <?php
                include "koneksi.php";
                $qry_kelas=mysqli_query($conn,"select * from member");
                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_member'].'">'.$data_kelas['nama_member'].'</option>';    
                }
                ?>
        </select>
        <input type="submit" name="simpan" value="Confirm" class="btn btn-primary">
    </form>
<?php 
    include "footer.php";
?>