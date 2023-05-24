<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $telp=$_POST['telp'];
    if(empty($nama_member)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('Nomor telepon tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";  
        $update=mysqli_query($conn,"update member set nama_member='".$nama_member."',
             alamat='".$alamat."',jk='".$jk."',telp='".$telp."' where id_member = '".$id_member."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member="
                .$id_member."';</script>";
            }
        }
        
    } 
?>