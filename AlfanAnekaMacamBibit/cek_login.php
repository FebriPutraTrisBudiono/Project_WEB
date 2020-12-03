<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE username='$username'");
// menghitung jumlah data yang ditemukan
if(mysqli_num_rows($login) === 1 ){

  //cek password
  $data = mysqli_fetch_assoc($login);
  if (password_verify($password, $data["password"])) {
   
    // cek jika user login sebagai admin
    if($data['level']=="admin"){

      // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "admin";

      // alihkan ke halaman dashboard admin
      header("location:halaman_admin.php");

      // cek jika user login sebagai pegawai
      }else if($data['level']=="pengguna"){

      // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "pengguna";

      // alihkan ke halaman dashboard pegawai
      header("location:halaman_pengguna.php");

    }else{

    // alihkan ke halaman login kembali
    header("location:login.php?pesan=gagal");
    } 
  }else{
  header("location:login.php?pesan=gagal");
  }

}



?>