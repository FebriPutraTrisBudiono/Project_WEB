<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
    <h1>Alfan Aneka Bibit</h1>
</div>
    <form method="get" action="">
    <label for="cari">Cari Produk</label>
    <input type="text" name="cari" placeholder="cari">
</form>


<div class="judul">
<center><h2> List Bibit </h2></center>
</div> 
<br>
<?php 
include "koneksi.php";
$query_mysqli = mysqli_query($koneksi,"select * from tb_bibit");
$nomor = 1;

if (isset($_GET['cari'])) {
   $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_bibit WHERE nama_bibit LIKE'%".$_GET['cari']."%'");
   
}
   if(isset($_GET['umur'])){
    $umur=$_GET['umur'];
    $where = "";
    if ($umur==-1){
       $where = "WHERE umur_bibit < 6";
    }
    if ($umur==0){
       $where = "WHERE umur_bibit = 6";
    }
    if ($umur==1){
       $where = "WHERE umur_bibit > 6";
    }
    var_dump($where);
    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM tb_bibit $where");
}

while ($data = mysqli_fetch_array($query_mysqli)){
    ?>

<!--<div class="w3-card ">-->
<div class="col-md-3">
<div class="list-produk">
<div class="card">
    <center>
    <img src="img/<?php echo $data['gbr_produk']; ?>" width="150px"></center>
    <div class="card-body">
    <p><?php echo $data['nama_bibit']; ?></p>
    <p>Rp<?php echo $data['harga_bibit']; ?></p>
    <p><?php echo $data['umur_bibit']; ?> Bulan</p>
    <a href="default.asp" target="_blank">Beli</a>
</div>
</div>
</div>
</div>
<?php } ?> 
<style>
    </style>

<form method="get" action="">
  <p>Filter Bibit:</p>
  <input type="radio"  name="umur" value="-1">
  <label > kurang dari 6 Bulan</label><br>
  <input type="radio"  name="umur" value="0">
  <label >6 Bulan</label><br>
  <input type="radio"  name="umur" value="1">
  <label >lebih dari 6 Bulan</label><br>
  <input type="submit" name="button" value="Submit"/>
  
</form>
</body>
</html>