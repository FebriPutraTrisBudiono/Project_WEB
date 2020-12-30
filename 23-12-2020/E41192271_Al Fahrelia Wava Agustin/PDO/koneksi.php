<?php

$server ="localhost";
$user = "root";
$pass = "";
$db = "koneksi";

// koneksi ke database menggunakan PDO

try{
    $koneksi = new PDO("mysql:host=$server; dbname=$db", $user, $pass);
    //PDO error Mode
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi Berhasil";
} catch(PDOException $e) {
    echo "Koneksi Gagal : " . $e->getMessage();
}