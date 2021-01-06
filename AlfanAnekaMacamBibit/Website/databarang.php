<?php 
	include "koneksi.php";

	$query = $koneksi->query("SELECT * from detailorder d, barang p where orderid='16ff3tWDAkotU' and d.idbarang=p.idbarang order by d.idbarang ASC");

	$result = array();

	while($rowData = $query->fetch_assoc()){
		$result[] = $rowData;
	}

	echo json_encode($result);
 ?>