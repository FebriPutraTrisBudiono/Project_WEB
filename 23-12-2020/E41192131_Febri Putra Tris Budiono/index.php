<?php
$pdo = new PDO("mysql:host=localhost;dbname=latihan_pdo", "root", "");
$stat = $pdo->prepare("SELECT * from users");
$stat->execute();

$result = $stat->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);

?>