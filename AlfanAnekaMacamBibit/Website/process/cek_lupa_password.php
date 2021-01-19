<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$no_telepon = $_POST['no_telepon'];
 
 
// menyeleksi data user dengan username dan no_telepon yang sesuai
$reset = mysqli_query($koneksi,"SELECT * from pengguna where username='$username' and no_telepon='$no_telepon'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($reset);
 
// cek apakah username dan no_telepon di temukan pada database
if($cek > 0){
 
  $data = mysqli_fetch_assoc($reset);
 
  // cek jika user login sebagai admin
  if($data['level']=="admin"){
 
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";
    // alihkan ke halaman dashboard admin
    echo "
        <script type='text/javascript'>
        alert('Silahkan Tulis Password Baru anda');
        window.location='../reset_password.php'
        </script>";
 
  // cek jika user login sebagai pegawai
  }else if($data['level']=="pengguna"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "pengguna";
    // alihkan ke halaman dashboard pegawai
    echo "
        <script type='text/javascript'>
        alert('Silahkan Tulis Password Baru anda');
        window.location='../reset_password.php'
        </script>";
 
  }else{
 
    echo "
        <script type='text/javascript'>
        alert('Username anda belum terdaftar!');
        window.location='../signup.php'
        </script>";
  } 
}else{
  echo "
        <script type='text/javascript'>
        alert('Username anda belum terdaftar!');
        window.location='../signup.php'
        </script>";
}
 
?>