<?php
session_start();
include_once 'koneksi.php';

$id = $_GET['id'];
$userquery = $koneksi->query("SELECT * FROM barang WHERE idbarang = ".$id);
$row = $userquery->fetch_object();
if(isset($_POST["ubah"])){
$jumlah = $_POST["jumlah"];
$hasil_stok = ($row->stok_barang + $jumlah);
$sql = "UPDATE barang SET stok_barang = '".$hasil_stok."' WHERE idbarang = ".$id;
if ($koneksi->query($sql) == TRUE) {
	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("d/m/Y h:i:s");
	$kegiatan = "Menambah stok barang ".$row->nama_barang." berjulmah ".$row->stok_barang." sebanyak ".$jumlah." sehingga stok barang ".$row->nama_barang." menjadi ".$hasil_stok;
	$sqlhistory = "INSERT INTO history (waktu, jenis_barang, nama_barang, kegiatan) 
	VALUES ('".$waktu."','".$row->nama_barang."','".$row->jenis_barang."','".$kegiatan."')";	
    if ($koneksi->query($sqlhistory) == TRUE) {
	header("Location: tab-stok-barang.php");
	} else {
    echo "Error dalam mengubah data: " . $koneksi->error;
	}
} else {
    echo "Error dalam mengubah data: " . $koneksi->error;
}

$koneksi->close();
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="update_stok.css">
		<title>STOK | STOK BARANG | TAMBAH</title>
	</head>
	
	<body>
		<aside>
			<ul class="side">
				<a href="index.php"><li class="side">Home</li></a>
				<a href="tab-barang.php"><li class="side active">Nama Barang</li></a>
				<a href="tab-stok-barang.php"><li class="side">Stok Barang</li></a>
				<a href="tab-history.php"><li class="side">History</li></a>
			</ul>
		</aside>
		<section class="content">
			<h1 class="content">Tambah Stok Barang</h1>
			<p>Menambah stok barang</p>
			<form method="post">
				<p>ID : <?php echo $id; ?></p>
				<p>Nama Barang : <?php echo $row->nama_barang;?></p>
				<input type="number" name="jumlah" value="0" min="0" placeholder="Jumlah" required/><strong>*Jumlah</strong>
				</br>
				<input type="submit" name="ubah" value="Ubah"/> 
			</form>
		</section>
	</body>
</html>