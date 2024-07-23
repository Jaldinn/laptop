<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JUAL BELI LAPTOP JALDIN - Laporan Data Pembelian Laptop</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 20px;
  }
  h1, p {
    text-align: center;
    color: red;
  }
  h1 {
    font-size: 40px;
    font-family: Arial, sans-serif;
    margin-bottom: 10px;
  }
  p {
    font-weight: bold;
    font-size: 20px;
    margin-top: 0;
  }
  hr {
    border: none;
    border-top: 2px solid red;
    margin: 20px 0;
  }
  a {
    text-decoration: none;
    color: blue;
  }
  a:hover {
    text-decoration: underline;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  table, th, td {
    border: 1px solid black;
    text-align: center;
    padding: 8px;
  }
  th {
    background-color: cyan;
    color: red;
  }
  .jumlah-data {
    background-color: cyan;
    color: red;
    width: 210px;
    padding: 10px;
    text-align: center;
    margin-top: 20px;
  }
</style>
</head>
<body>
<h1>JUAL BELI LAPTOP JALDIN</h1>
<p>RESPON CEPAT, RAMAH, CUSTOMER NO 1</p>
<hr>
<b>
<a href="laptop_masuk.php" title="">Laptop Masuk</a> ||
<a href="laptop_keluar.php" title="">Laptop Keluar</a>
<hr>

<h1 align="center">LAPORAN DATA PEMBELIAN LAPTOP</h1>
<a href="index.php">Beranda</a><br>

<table border="1" style="border-collapse: collapse; width: 100%;">
	<tr style="background-color: cyan; color: red; text-align: center;">
		<th>No</th>
		<th>Tanggal</th>
		<th>Kode</th>
		<th>Nama Laptop</th>
		<th>Jenis Laptop</th>
		<th>Spesifikasi</th>
		<th>Harga</th>
		<th>Stok</th>
		<th>Nama Pembeli</th>
		<th>No Handphone</th>
		<th>Action</th>
	</tr>
	<?php
	include "koneksidatabase.php"; // Pastikan file koneksidatabase.php ada dan sudah sesuai dengan konfigurasi database Anda

	$no = 1;
	$query = mysqli_query($koneksidatabase, "SELECT * FROM datakeluar");
	$jumlah = mysqli_num_rows($query);

	while ($data = mysqli_fetch_array($query)) {
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['tanggal']; ?></td>
		<td><?php echo $data['kode']; ?></td>
		<td><?php echo $data['nama_laptop']; ?></td>
		<td><?php echo $data['jenis_laptop']; ?></td>
		<td><?php echo $data['spk']; ?></td>
		<td>Rp. <?php echo $data['harga']; ?></td>
		<td><?php echo $data['stok']; ?></td>
		<td><?php echo $data['nama_pembeli']; ?></td>
		<td><?php echo $data['nohp']; ?></td>
		<td>
			<a href="hapus_laptop_keluar.php?kode=<?php echo $data['kode']; ?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>

<p class="jumlah-data">Jumlah Data Laptop: <?php echo $jumlah; ?> Laptop</p>

</body>
</html>
