<?php 
require_once('database.php');

$id=$_POST['id'];
$data = array(
    'kode_barang' => $_POST['kode_barang'],
    'nama_barang' => $_POST['nama_barang'],
    'kategori' => $_POST['kategori'],
    'merk' => $_POST['merk'],
    'jumlah' => $_POST['jumlah'],
);

$sql2=update("barang",$data,$id);
if ($sql2) {
    header("location:barang.php");
}
?>