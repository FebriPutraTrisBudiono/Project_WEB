<?php
include "koneksi.php";

$orderid = $_POST['orderid'];

$query = $koneksi->query("SELECT * from detailorder d, barang p where orderid='$orderid' and d.idbarang=p.idbarang order by d.idbarang ASC");

$result = array();

while ($rowData = $query->fetch_assoc()) {
	$result[] = $rowData;
}

echo json_encode($result);
 ?>