<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$no_telepon = $_POST['no_telepon'];
$foto = $_POST['foto'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE pengguna set username='$username', password='$password', nama='$nama', no_telepon='$no_telepon', foto='$foto', alamat='$alamat' where username='$username'");

header("location:edit_profil_admin.php");
?>