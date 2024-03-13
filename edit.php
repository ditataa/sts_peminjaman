<?php 
require_once('database.php');
$data = editdata('barang', $_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <a class="navbar-brand" href="home.php">Dashboard</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="user.php">User</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="barang.php">Barang</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="peminjaman.php">Peminjaman & Pengembalian</a>
      </li>
    </ul>
            <button class="btn btn-outline-success" type="submit" href="logout.php">Logout</button>
  </div>
</nav>

<div class="container">
          <h1> Edit NOTES </h1>
          <?php while($barang=mysqli_fetch_array($data)):?>
            <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $barang['id'] ;?>">
            <div class="form-group">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control" value="<?php  echo $barang['id'] ; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" value="<?php  echo $barang['kode_barang'] ; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="<?php  echo $barang['nama_barang'] ; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control" value="<?php  echo $barang['kategori'] ; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" name="merk" class="form-control" value="<?php  echo $barang['merk'] ; ?>" aria-describedby="basic-addon1">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" value="<?php  echo $barang['jumlah'] ; ?>" aria-describedby="basic-addon1">
                </div>
                <div>
                    <input type="submit" value="update">
                </div>
            </form>
            <?php endwhile; ?>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>