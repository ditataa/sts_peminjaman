<?php 
require_once('database.php');


$data = array(
    'id' => $_POST['id'],
    'kode_barang' => $_POST['kode_barang'],
    'nama_barang' => $_POST['nama_barang'],
    'kategori' => $_POST['kategori'],
    'merk' => $_POST['merk'],
    'jumlah' => $_POST['jumlah'],
);

$sql2=tambahbrg($_POST['tablename'],$data);
if ($sql2) {
    header("location:barang.php");
}
?>