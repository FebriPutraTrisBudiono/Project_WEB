<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
          $password = $_POST['password'];
          $login = $_POST['login'];

          if ($login) {
              if ($username == "" || $password == "") {
                  ?> <script type="text/javascript">alert("Username dan Password tidak boleh kosong");</script> <?php
              } else{
                  $sql = mysqli_query($koneksi, "select * from pengguna where username='$username' and password=md5('$password')") or die (mysqli_error());
                  $data = mysqli_fetch_array($sql);
                  $cek = mysqli_num_rows($sql);
                  if ($cek >= 1) {
                      if ($data['level'] == "admin") {
                        $_SESSION['admin'] == $data['id'];
                        header("location:halaman_admin.php");
                      } else if($data['level'] == "pengguna"){
                        $_SESSION['pengguna'] == $data['id'];
                        header("location:halaman_pengguna.php");
                      }
                  } else {
                    echo "Login gagal";
                  }
            } 
          }



?>