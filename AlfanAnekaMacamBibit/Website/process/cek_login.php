<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from pengguna where username='$username' and password=md5('$password')");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
  $data = mysqli_fetch_assoc($login);
 
  // cek jika user login sebagai admin
  if($data['level']=="admin"){
 
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
    echo "
        <script type='text/javascript'>
        alert('Anda Berhasil Login Sebagai Admin');
        window.location='../halaman_admin.php'
        </script>";
 
  // cek jika user login sebagai pegawai
  }else if($data['level']=="pengguna"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "pengguna";
    // alihkan ke halaman dashboard pegawai
    echo "
        <script type='text/javascript'>
        alert('Anda Berhasil Login Sebagai Pengguna');
        window.location='../halaman_pengguna.php'
        </script>";
 
  }else{
 
    echo "
        <script type='text/javascript'>
        alert('Password Anda Salah!');
        history.back(self);
        </script>";
  } 
}else{
  echo "
        <script type='text/javascript'>
        alert('Username & Password Anda salah!');
        window.location='../login.php'
        </script>";
}
 
?>