<?php
include"koneksidatabase.php";
$nama_laptop=$_GET['nama_laptop'];

$hapus=mysqli_query($koneksidatabase,"DELETE FROM datastok WHERE nama_laptop='$nama_laptop'");

if($hapus){
	echo"<script>alert('berhasil dihapus');
	window.location='laporan_laptop_masuk.php'</script>";
}else{
	echo"<script>alert('Gagal Dihapus');
	window.location='laporan_laptop_masuk.php'</script>";	
}




?>