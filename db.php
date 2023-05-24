<?php
     $hostname = 'localhost';
     $ussername = 'root';
     $password = '';
     $dbname = 'tokoonline';

     $conn = mysqli_connect($hostname, $ussername, $password, $dbname) or die ('Gagal terhubung ke database');
?>     