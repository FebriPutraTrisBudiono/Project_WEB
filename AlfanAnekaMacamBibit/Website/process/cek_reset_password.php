<?php 
session_start();
include '../koneksi.php';


if ($_POST['edit']) {
	$username = $_POST['username'];	
	$password = $_POST['password'];

	$password_md5 = md5($password);

	$query = mysqli_query($koneksi, "UPDATE pengguna set username='$username', password='$password_md5' where username='$username'");
	
	echo "
        <script type='text/javascript'>
        alert('Password telah berhasil diganti');
        window.location='../login.php'
        </script>";
}else{
	var_dump('gagal');
}

 ?>