<?php
$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "abadanwahyu21@gmail.com.com";
$password_saya = 12345678;
if((strcasecmp($email_saya, $email) == 0)&&($password_saya==$password))
    {header("location:index.php?pesan=berhasil");}
else
    {header("location:login.php?pesan=gagal");}
?>