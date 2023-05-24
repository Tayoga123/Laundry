<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
<style>
  p {text-align: center;}
</style>
    <title></title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="proses_tambah_user.php" method="post">
        <p href="https://imgbb.com/"><img src="https://i.ibb.co/jMXX9f4/kulin-resizer.png" alt="kulin-resizer" border="0"></p>
        <h3 align="center">Tambah Karyawan</h3>
        nama user :
        <input type="text" name="nama_user" value="" class="form-control">
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        Role : 
        <select name="role" class="form-control">
            <option></option>
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
        <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
        </select>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
 