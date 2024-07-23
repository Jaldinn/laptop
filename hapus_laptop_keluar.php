<?php
include"koneksidatabase.php";
$kode=$_GET['kode'];

$hapus=mysqli_query($koneksidatabase,"DELETE FROM datakeluar WHERE kode='$kode'");

if($hapus){
	echo"<script>alert('berhasil dihapus');
	window.location='laporan_laptop_keluar.php'</script>";
}else{
	echo"<script>alert('Gagal Dihapus');
	window.location='laporan_laptop_keluar.php'</script>";	
}




?>