<?php 
$host="localhost";
$user="root";
$pass="";
$dbname="sts_dita";
$koneksi=mysqli_connect($host, $user, $pass, $dbname) or die;
function tampildata($tablename)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi, "select * from $tablename");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;
}

function login($username,$password){
    global $koneksi;
    $uname = $username;
    $upass = $password;

    $hasil = mysqli_query($koneksi,"select * from user where username='$uname' and password=md5('$upass')");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0){
        return true;
    }
    else{
        return false;
    }
}

function editdata($tablename,$id)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi, "select * from $tablename where id = $id");
    return $hasil;
}

function delete($tablename, $id)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi, "delete from $tablename where id='$id'");
    return $hasil; 
} 

function update($tablename, $data, $id)
{
    global $koneksi;
    $sql = "UPDATE $tablename SET 
            kode_barang = '".$data['kode_barang']."',
            nama_barang = '".$data['nama_barang']."',
            kategori = '".$data['kategori']."',
            merk = '".$data['merk']."', 
            jumlah = '".$data['jumlah']."'
            WHERE id = '$id'";
    $hasil=mysqli_query($koneksi,$sql);
    return $hasil; 
} 

function tambahbrg($tablename, $data){
    global $koneksi;
    $id = $data['id'];
    $kode_barang = $data['kode_barang'];
    $nama_barang = $data['nama_barang'];
    $kategori = $data['kategori'];
    $merk = $data['merk'];
    $jumlah = $data['jumlah'];
    $sql = "INSERT INTO $tablename (id,kode_barang, nama_barang,kategori,merk,jumlah)
    VALUES('$id','$kode_barang','$nama_barang','$kategori','$merk','$jumlah')"; 
$hasil=mysqli_query($koneksi,$sql);
return $hasil; 
}

function tambahuser($tablename, $data){
    global $koneksi;
    $id = $data['id'];
    $no_identitas = $data['no_identitas'];
    $nama = $data['nama'];
    $status = $data['status'];
    $username = $data['username'];
    $password = $data['password'];
    $role = $data['role'];

    $sql = "INSERT INTO $tablename (id, no_identitas, nama, status , username, password, role)
    VALUES('$id','$no_identitas','$nama','$status','$username','$password','$role')"; 
$hasil=mysqli_query($koneksi,$sql);
return $hasil; 
}
?>