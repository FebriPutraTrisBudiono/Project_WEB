<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_telepon = $_POST['no_telepon'];
$foto = $_POST['foto'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE pengguna set nama='$nama', username='$username', password='$password', no_telepon='$no_telepon', foto='$foto', alamat='$alamat' where id='$id'");

header("location:index.php?pesan=update");
?>