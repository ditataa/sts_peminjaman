<?php 
require_once('database.php');
$id = $_GET['id'];
$tablename = $_GET['tablename'];

$data = delete($tablename, $id);
if ($data){
    header("location:barang.php");
}
?>