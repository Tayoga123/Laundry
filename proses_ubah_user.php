<?php
if($_POST){
    $id=$_POST['id_user'];
    $nama=$_POST['nama_user'];
    $role=$_POST['role'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
 
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama_user ='".$nama."', 
            role='".$role."',  username='".$username."'
            where id_user = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user="
                .$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama_user='".$nama."',
             role='".$role."', username='".$username."', 
            password='".md5($password)."'where id_user = '".$id."'")
             or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user="
                .$id."';</script>";
            }
        }
        
    } 
}
?>
                                                