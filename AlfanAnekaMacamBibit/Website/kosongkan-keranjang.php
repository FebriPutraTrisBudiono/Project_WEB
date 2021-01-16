<?php
include "koneksi.php";

$orderid = $_POST['orderid'];

$query = $koneksi->query("UPDATE cart SET cart.status = 'Payment' WHERE orderid='$orderid'");
