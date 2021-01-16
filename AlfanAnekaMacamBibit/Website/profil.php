<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>AlfanAnekaMacamBibit</title>
	<link rel="stylesheet" type="text/css" href="css/profil.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="profile-card">
		<div class="image-container">
			<?php
		    if ($_SESSION['username']) {
		        $sesi = $_SESSION['username'];
		    }

		    $sql_profil = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username ='$sesi'");
		    $data = mysqli_fetch_array($sql_profil);
			?>
			<img src="foto/<?php echo $data['foto']?>" id="profileDisplay" class="tengah">
			<div class="title">
				<h2><?php echo $data['nama']; ?></h2>
			</div>
		</div>
		<div class="main-container">
			<p><i class="fa fa-home info"></i><?php echo $data['alamat']; ?></p>
			<p><i class="fa fa-phone info"></i><?php echo $data['no_telepon']; ?></p>
			<p><i class="fa fa-user info"></i><?php echo $data['username']; ?></p>
			<p><i class="fa fa-key info"></i>********</p>
			<hr>
			
		</div>
	</div>
</body>
</html>