<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "login";
$koneksi = mysqli_connect($host, $user, $password, $database);
echo "Koneksi Sukses";
if((strcasecmp($email_saya, $email) == 0)&&($password_saya==$password)){
    {header("location:index.php?pesan=berhasil");}
else{
	{header("location:login.php?pesan=gagal");}
?>