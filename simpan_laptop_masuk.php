<?php
include"koneksidatabase.php";
$nama_laptop	=$_POST['nama_laptop'];
$jenis_laptop	=$_POST['jenis_laptop'];
$spk	=$_POST['spk'];
$harga	=$_POST['harga'];
$stok	=$_POST['stok'];



$simpan=mysqli_query($koneksidatabase,"INSERT INTO datastok VALUES('$nama_laptop','$jenis_laptop','$spk','$harga','$stok')");
if($simpan){
	echo"<script>alert('Formulir Berhasil Di Simpan');window.location='laptop_masuk.php'</script>";
}else{
	echo"<script>alert('Formulir Gagal Di simpan');window.location='laptop_masuk.php'</script>";	
}

?>