<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JUAL BELI LAPTOP JALDIN</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  h1 {
    font-size: 40px;
    color: #ff5733;
    text-align: center;
    margin-bottom: 10px;
    font-family: Arial, sans-serif;
  }
  p {
    font-weight: bold;
    font-size: 20px;
    text-align: center;
    margin-top: 0;
    color: #333;
  }
  hr {
    border: none;
    border-top: 2px solid #ff5733;
    margin: 20px 0;
  }
  nav {
    text-align: center;
    margin-bottom: 20px;
  }
  nav a {
    text-decoration: none;
    color: #555;
    font-weight: bold;
    padding: 10px 20px;
    margin: 0 5px;
    border-radius: 5px;
    background-color: #ddd;
    transition: background-color 0.3s ease;
  }
  nav a:hover {
    background-color: #bbb;
  }
  form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
  }
  form label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
  }
  form input[type="text"],
  form input[type="date"],
  form input[type="submit"],
  form input[type="reset"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
  }
  form input[type="submit"],
  form input[type="reset"] {
    background-color: #ff5733;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  form input[type="submit"]:hover,
  form input[type="reset"]:hover {
    background-color: #e5472f;
  }
</style>
</head>
<body>
<div class="container">
  <h1>JUAL BELI LAPTOP JALDIN</h1>
  <p>RESPON CEPAT, RAMAH, CUSTOMER NO 1</p>
  <hr>
  <nav>
    <a href="laptop_masuk.php">Laptop Masuk</a>
    <a href="laptop_keluar.php">Laptop Keluar</a>
  </nav>
  <hr>
  <a href="index.php">Beranda</a><br>
  <a href="laporan_laptop_keluar.php">Laporan Laptop Keluar >></a>
  <br><br>
  <form action="simpan_laptop_keluar.php" method="POST">
    <label for="kode">Kode Pembelian:</label><br>
    <input type="text" id="kode" name="kode"><br><br>
    
    <label for="nama_laptop">Nama Laptop:</label><br>
    <input type="text" id="nama_laptop" name="nama_laptop"><br><br>
    
    <label for="jenis_laptop">Jenis Laptop:</label><br>
    <input type="text" id="jenis_laptop" name="jenis_laptop"><br><br>
    
    <label for="spk">Spesifikasi:</label><br>
    <input type="text" id="spk" name="spk"><br><br>
    
    <label for="harga">Harga:</label><br>
    <input type="text" id="harga" name="harga"><br><br>
    
    <label for="stok">Stok:</label><br>
    <input type="text" id="stok" name="stok"><br><br>
    
    <label for="nama_pembeli">Nama Pembeli:</label><br>
    <input type="text" id="nama_pembeli" name="nama_pembeli"><br><br>
    
    <label for="nohp">No Handphone:</label><br>
    <input type="text" id="nohp" name="nohp"><br><br>
    
    <label for="tanggal">Tanggal:</label><br>
    <input type="date" id="tanggal" name="tanggal"><br><br>
    
    <input type="submit" value="Simpan">
    <input type="reset" value="Batal">
  </form>
</div>
</body>
</html>
