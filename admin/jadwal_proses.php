<?php
session_start();
include "koneksi.php";
if(isset($_REQUEST['aksi'])) $aksi = $_REQUEST['aksi'];
else $aksi="";

switch($aksi){
case 'Tambah':
$id		 = $_POST['id'];
$tim1	 = $_POST['tim1'];
$tim2	 = $_POST['tim2'];
$tanggal = $_POST['tanggal'];
$waktu	 = $_POST['waktu'];
$liga	 = $_POST['liga'];

$str = "INSERT INTO jadwal VALUES ('$id', '$tim1', '$tim2', '$tanggal', '$waktu', '$liga')";
$query = mysql_query($str) or die (mysql_error());

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}

break;
case "Update":

$id		 = $_POST['id'];
$tim1	 = $_POST['tim1'];
$tim2	 = $_POST['tim2'];
$tanggal = $_POST['tanggal'];
$waktu	 = $_POST['waktu'];
$liga	 = $_POST['liga'];

$str = "UPDATE jadwal SET id_jadwal='$id', tim1='$tim1', tim2='$tim2', tanggal='$tanggal', waktu='$waktu', liga='$liga' WHERE id_jadwal = '$id' ";
$query = mysql_query($str) or die (mysql_error());

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}

break;

case "Hapus":
$id = $_GET['id'];

$query = mysql_query("DELETE FROM jadwal WHERE id_jadwal = '$id'");

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
break;
}
?>
<meta http-equiv="refresh" content="1;URL=jadwal.php">