<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
      <a href="https://imgbb.com/"><img src="https://i.ibb.co/jMXX9f4/kulin-resizer.png" alt="kulin-resizer" border="0"></a>
        <a class="navbar-brand" href="home.php">KULIN LAUNDRY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn-outline-primary rounded-pill px-3" aria-current="page" href="paket.php">Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-primary rounded-pill px-3" aria-current="page" href="histori.php">Histori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-primary rounded-pill px-3" aria-current="page" href="tampil_member.php">Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-primary rounded-pill px-3" aria-current="page" href="tampil_user.php">Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-outline-primary rounded-pill px-3" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">