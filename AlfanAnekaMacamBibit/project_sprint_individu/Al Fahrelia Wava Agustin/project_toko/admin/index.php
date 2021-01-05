<?php 
	session_start();
	include"../lib/koneksi.php";
	if(!isset($_SESSION['user'])){
		include"login.php";
	}else{
		$usr = $_SESSION['user'];
		$sqlusr = $con->query("SELECT*FROM tbuser WHERE username='$user'");
		$vusr = $sqlusr->fetch_array();
		$lvl = $vusr['level'];
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" >
    <link rel="stylesheet" href="asset/css/all.css" >
    <title>Halaman Admin</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
	  <ul class="navbar-nav">
		<li class="nav-item active">
		  <a class="nav-link" href="?page=home"><i class="fas fa-home"></i> Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="?page=menu"><i class="fas fa-archive"></i> Data Kategori</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="?page=barang"><i class="fas fa-shopping-basket"></i> Data Barang</a>
		</li>
	  </ul>
	   <ul class="nav navbar-nav navbar-right">
	   	<li class="nav-item"><a class="nav-link" href="#"><i class="far fa-user-circle"></i>
	   <?php 
	   		if($lvl=='admin'){
	   			echo"Admin";
	   		}elseif ($lvl=='user') {
	   			echo"User";
	   		}
	    ?>
	   </a></li>
      	<li class="nav-item"><a class="nav-link" href="?page=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
  </div>
</nav>
<br>
<?php
	$page = $_GET['page'];
	switch($page){
		case"menu";
			include"menu.php";
		break;
		case"barang";
			include"barang.php";
		break;
		case"home";
			include"home.php";
		break;
		case"logout";
			include"logout.php";
		break;
	}
 ?>
    </body>
</html>
<?php } ?>