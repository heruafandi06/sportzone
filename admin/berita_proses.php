<?php
session_start();
include "koneksi.php";
if(isset($_REQUEST['aksi'])) $aksi = $_REQUEST['aksi'];
else $aksi="";

switch($aksi){
case 'Tambah':
$id		 	 = $_POST['id'];
$judul		 = $_POST['judul'];
$isi		 = $_POST['isi'];
$liga 		 = $_POST['liga'];
$kategori	 = $_POST['kategori'];
$tanggal	 = $_POST['tanggal'];
$headline	 = $_POST['headline'];

$str = "INSERT INTO berita VALUES ('$id', '$judul', '$isi', '$liga', '$kategori', '$tanggal', '$headline')";
$query = mysql_query($str) or die (mysql_error());

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}

break;
case "Update":

$id		 	 = $_POST['id'];
$judul		 = $_POST['judul'];
$isi		 = $_POST['isi'];
$liga 		 = $_POST['liga'];
$kategori	 = $_POST['kategori'];
$tanggal	 = $_POST['tanggal'];
$headline	 = $_POST['headline'];

$str = "UPDATE berita SET id_berita='$id', judul='$judul', isi='$isi', liga='$liga', kategori='$kategori', tanggal='$tanggal', headline='$headline' WHERE id_berita = '$id' ";
$query = mysql_query($str) or die (mysql_error());

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}

break;

case "Hapus":
$id = $_GET['id'];

$query = mysql_query("DELETE FROM berita WHERE id_berita = '$id'");

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
break;
}
?>
<meta http-equiv="refresh" content="1;URL=berita.php">