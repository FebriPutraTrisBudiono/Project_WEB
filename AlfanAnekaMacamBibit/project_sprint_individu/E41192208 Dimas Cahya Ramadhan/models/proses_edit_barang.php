<?php

require_once('../config/+koneksi.php');
require_once('../models/database.php');
include "../models/m_barang.php";
$connection = new Database($host, $user, $pass, $database);
$brg = new Barang($connection);

$id_brg = $_POST['id_brg'];
$nama_brg = $connection->conn->real_escape_string($_POST['nama_brg']);
$umur_brg = $connection->conn->real_escape_string($_POST['umur_brg']);
$stok_brg = $connection->conn->real_escape_string($_POST['stok_brg']);
$harga_brg = $connection->conn->real_escape_string($_POST['harga_brg']);

$pict = $_FILES['gambar_brg']['name'];                                
$extensi = explode(".", $_FILES['gambar_brg']['name']);
$gambar_brg = "brg-".round(microtime(true)).".".end($extensi);
$sumber = $_FILES['gambar_brg']['tmp_name'];

if($pict == '') {
	$brg->edit("UPDATE stok_barang SET nama_brg = '$nama_brg', umur_brg = '$umur_brg', stok_brg = '$stok_brg', harga_brg = '$harga_brg' WHERE id_brg = '$id_brg'");
	echo "<script>window.location='?page=barang';</script>";
} else {

	$upload = move_uploaded_file($sumber, "../assets/img/barang/".$gambar_brg);
	if($upload) {
		$brg->edit("UPDATE stok_barang SET gambar_brg = '$gambar_brg', nama_brg = '$nama_brg', umur_brg = '$umur_brg', stok_brg = '$stok_brg', harga_brg = '$harga_brg' WHERE id_brg = '$id_brg'");
		echo "<script>window.location='?page=barang';</script>";
	} else {
		echo "<script>alert('Upload Gambar Gagal!!')</script>";
	}
}
?>