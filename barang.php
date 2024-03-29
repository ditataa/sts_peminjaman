<?php 
require_once('database.php');
$data=tampildata('barang');
$nomor=0;
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
  <?php 
    session_start();
    if($_SESSION['status']!="login"){
      header("location:login.php?msg=belum_login");
    }
    ?>
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

<div class="container mt-3">
<center><h1>Data Barang</h1></center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Tambah Data Barang</button>
<table class="table">
  <thead>
  <tr>
    <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Merk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $item) : ?>
    <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['id']; ?></td>
      <td><?php echo $item['kode_barang']; ?></td>
      <td><?php echo $item['nama_barang']; ?></td>
      <td><?php echo $item['kategori']; ?></td>
      <td><?php echo $item['merk']; ?></td>
      <td><?php echo $item['jumlah']; ?></td>
      <td><?php echo "<a href='edit.php?id=$item[id]'>EDIT</a> | <a href='javascript:hapusData(".$item['id'].")'>Delete</a>"; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="tambahbrg.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="tablename" value="barang">
          <div class="form-group">
              <label>ID</label>
              <input type="text" name="id" class="form-control" value="" aria-describedby="basic-addon1">
          </div>
          <div class="form-group">
              <label>Kode Barang</label>
              <input type="text" name="kode_barang" class="form-control" value="" aria-describedby="basic-addon1">
          </div>
          <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="nama_barang" class="form-control" value="" aria-describedby="basic-addon1">
          </div>
          <div class="form-group">
              <label>Kategori</label>
              <input type="text" name="kategori" class="form-control" value="" aria-describedby="basic-addon1">
          </div>
          <div class="form-group">
              <label>Merk</label>
              <input type="text" name="merk" class="form-control" value="" aria-describedby="basic-addon1">
          </div>
          <div class="form-group">
              <label>Jumlah</label>
              <input type="text" name="jumlah" class="form-control" value="" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script language="JavaScript" type="text/JavaScript">
    function hapusData(id){
      if (confirm("Apakah anda yakin akan menghapus data ini?")){
        window.location.href = 'delete.php?tablename=barang&id=' + id;
      }
    }
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>