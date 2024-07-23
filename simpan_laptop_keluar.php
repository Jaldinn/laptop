<?php
include"koneksidatabase.php";
$nama_laptop	=$_POST['nama_laptop'];
$jenis_laptop	=$_POST['jenis_laptop'];
$spk	=$_POST['spk'];
$harga	=$_POST['harga'];
$stok	=$_POST['stok'];
$nama_pembeli	=$_POST['nama_pembeli'];
$nohp	=$_POST['nohp'];
$tanggal	=$_POST['tanggal'];
$kode	=$_POST['kode'];


$simpan=mysqli_query($koneksidatabase,"INSERT INTO datakeluar VALUES('$nama_laptop','$jenis_laptop','$spk','$harga','$stok','$nama_pembeli','$nohp','$tanggal','$kode')");

//ini kode untuk merubah data saldo
mysqli_query($koneksidatabase,"UPDATE datastok SET stok=stok-$stok WHERE nama_laptop='$nama_laptop'");
if($simpan){
	echo"<script>alert('Formulir Berhasil Di Simpan');window.location='laptop_keluar.php'</script>";
}else{
	echo"<script>alert('Formulir Gagal Di simpan');window.location='laptop_keluar.php'</script>";	
}

?>