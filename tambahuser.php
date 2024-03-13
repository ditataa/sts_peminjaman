<?php 
require_once('database.php');


$data = array(
    'id' => $_POST['id'],
    'no_identitas' => $_POST['no_identitas'],
    'nama' => $_POST['nama'],
    'status' => $_POST['status'],
    'username' => $_POST['username'],
    'password' => $_POST['password'],
    'role' => $_POST['role'],

);

$sql2=tambahuser($_POST['tablename'],$data);
if ($sql2) {
    header("location:user.php");
}
?>