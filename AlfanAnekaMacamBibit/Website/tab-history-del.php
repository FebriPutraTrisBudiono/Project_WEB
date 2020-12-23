<?php

include('koneksi.php');

if (isset($_GET['id']) && is_numeric($_GET['id']))
{

$id = $_GET['id'];

if ($stmt = $koneksi->prepare("DELETE FROM history WHERE idhistory = ? LIMIT 1"))
{
$stmt->bind_param("i",$id);
$stmt->execute();
$stmt->close();
}
else
{
echo "ERROR: could not prepare SQL statement.";
}
$koneksi->close();

header("Location: tab-history.php");
}
else
{
header("Location: tab-history.php");
}

?>