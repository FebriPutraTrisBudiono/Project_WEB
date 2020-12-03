<?php

//mengaktifkan session di php
session_start();

//menghubungkan dengan koneksi/database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

//menyeleksi data user dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
    header("location:index.php?pesan=berhasil");}
else{
	header("location:login.php?pesan=gagal");}
?>