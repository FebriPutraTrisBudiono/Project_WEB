<?php 
	session_start();
	include 'koneksi.php';
	$email = $_POST['email'];
	$password = $_POST['password']; 
	$querySql = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE email='$email' AND password='$password'");
	$data = mysqli_fetch_array($querySql);
	
	if($data > 0){
	session_start();
	$_SESSION['email'] = $email;
    header("location:index.php?pesan=berhasil");}
	else{
	header("location:login.php?pesan=gagal");}
 ?>