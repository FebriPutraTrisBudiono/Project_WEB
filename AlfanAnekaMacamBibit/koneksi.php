<?php
$koneksi = mysqli_connect("localhost","root","","db_alfananekamacambibit");

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}

function registrasi($data){
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$no_telepon = mysqli_real_escape_string($koneksi, $data["no_telepon"]);
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

	//cek username sudah ada apa belum
	$result = mysqli_query($koneksi, "SELECT username FROM pengguna WHERE username='$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar')
			 </script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('password tidak sesuai!');
			  </script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan userbaru ke database
	mysqli_query($koneksi, "INSERT INTO pengguna VALUES('','','$username','$password','','$no_telepon','','')");

	return mysqli_affected_rows($koneksi);
}


?>