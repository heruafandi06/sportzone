<?php
session_start();
include "koneksi.php";
if(isset($_REQUEST['aksi'])) $aksi = $_REQUEST['aksi'];
else $aksi="";

switch($aksi){
case 'Tambah':
$id		= $_POST['id'];
$klub	= $_POST['klub'];
$main	= $_POST['main'];
$menang	= $_POST['menang'];
$seri	= $_POST['seri'];
$kalah	= $_POST['kalah'];
$golk	= $_POST['golk'];
$golt	= $_POST['golt'];
$selisih= $_POST['selisih'];
$poin	= $_POST['poin'];
$liga	= $_POST['liga'];

$str = "INSERT INTO klasmen VALUES ('$id', '$klub', '$main', '$menang', '$seri', '$kalah', '$golk', '$golt', '$selisih', '$poin', '$liga')";
$query = mysql_query($str) or die (mysql_error());

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}

break;
case "Update":

$id		= $_POST['id'];
$klub	= $_POST['klub'];
$menang	= $_POST['menang'];
$seri	= $_POST['seri'];
$kalah	= $_POST['kalah'];
$golk	= $_POST['golk'];
$golt	= $_POST['golt'];
$liga	= $_POST['liga'];

$str = "UPDATE klasmen SET id_klasmen='$id', klub='$klub', main = '$menang' + '$seri' + '$kalah', menang = '$menang', seri = '$seri', kalah = '$kalah', gol_kandang = '$golk', gol_tandang = '$golt', selisih_gol = gol_kandang - gol_tandang, poin = 3 * '$menang' + 1 * '$seri' + 0 * '$kalah', liga='$liga' WHERE id_klasmen = '$id' ";
$query = mysql_query($str) or die (mysql_error());

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}

break;

case "Hapus":
$id = $_GET['id'];

$query = mysql_query("DELETE FROM klasmen WHERE id_klasmen = '$id'");

if($query == true){
echo"<script>alert('Berhasil')</script>";
} else{
echo "<script>alert('Gagal')</script>";
}
break;
}
?>
<meta http-equiv="refresh" content="1;URL=klasmen.php">