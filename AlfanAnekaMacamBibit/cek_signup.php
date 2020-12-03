<?php
require 'koneksi.php';

	if (isset($_POST["register"])) {
		if (registrasi($_POST) > 0 ) {
			echo "<script>
					alert('user baru berhasil ditambahkan!')
				  </script>";
			header("location:login.php");
		}else{
			echo mysqli_error($koneksi);
		}
	}
?>