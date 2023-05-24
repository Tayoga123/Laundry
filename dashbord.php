<?php
     session_start();
     if($_SESSION['status_login'] != true){
        echo '<script>window.location"login.php"</script';
     }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scalel=1">
    <title>tokoonline</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
   <header>
    <div class="container">
       <h1><a href="dashbord.php">tokoonline</a></h1>
       <ul>
           <li><a href="dashbord.php">Dashbord</a></li>
           <li><a href="profil.php">Profil</a></li>
           <li><a href="data-kategori.php">Data Kategori</a></li>
           <li><a href="data-produk.php">Data Produk</a></li>
           <li><a href="keluar.php">Log Out</a></li>
</ul>
</div>
</header>

<div class="section">
    <div class="container">
        <h3>Dashbord</h3>
        <div class="box">
            <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di tokoonline</h4>
</div>
</div>
</div>
<footer>
    <div class="container">
        <small>Copyright &copy; 2022 - tokoonline.</small>
</div>
</footer>
</body>
</html>