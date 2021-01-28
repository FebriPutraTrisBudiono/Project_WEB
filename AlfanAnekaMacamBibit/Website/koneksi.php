<?php
$koneksi = mysqli_connect("localhost","root","","db_alfananekamacambibit");

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}

function registrasi($data){
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$nama = mysqli_real_escape_string($koneksi, $data["nama"]);
	$no_telepon = mysqli_real_escape_string($koneksi, $data["no_telepon"]);
	$alamat = mysqli_real_escape_string($koneksi, $data["alamat"]);
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
	$password = md5($password);

	//tambahkan userbaru ke database
	mysqli_query($koneksi, "INSERT INTO pengguna VALUES('$username','$password','pengguna','$nama','$no_telepon','','$alamat')");

	return mysqli_affected_rows($koneksi);
}


//function tambah - edit data
function tambah($data){
	global $koneksi;

	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);
	$password_md5 = md5($password);

	$nama = htmlspecialchars($data['nama']);
	$no_telepon = htmlspecialchars($data['no_telepon']);
	$alamat = htmlspecialchars($data['alamat']);

	//upload gambar
	$gambar = upload(); 
	if (!$gambar) {
		return false;
	}

	$query = mysqli_query($koneksi, "UPDATE pengguna set username='$username', password='$password_md5', nama='$nama', no_telepon='$no_telepon', foto='$gambar', alamat='$alamat' where username='$username'");

	return mysqli_affected_rows($koneksi);
}

function upload() {
	$namaFile = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmpName = $_FILES['foto']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, 'foto/' . $namaFileBaru);

	return $namaFileBaru;
}

function ubah($data){
	global $koneksi;

 	$username = htmlspecialchars($data['username']);
	$passwordLama = htmlspecialchars($data['passwordLama']);
	$passwordBaru = htmlspecialchars($data['password']);

	$nama = htmlspecialchars($data['nama']);
	$no_telepon = htmlspecialchars($data['no_telepon']);
	$alamat = htmlspecialchars($data['alamat']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	//cek apakah user pilih gambar baru atau tidak
	if ($_FILES['foto']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
		$image=$gambarLama;
   		unlink("foto/" . $image); 
	}

	//cek password_md5 sudah ada atau tidak
	if ($passwordLama != $passwordBaru) {
		$password = md5($passwordBaru);
	}else{
		$password = $passwordLama;
	}

	$query = mysqli_query($koneksi, "UPDATE pengguna set username='$username', password='$password', nama='$nama', no_telepon='$no_telepon', foto='$gambar', alamat='$alamat' where username='$username'");

	return mysqli_affected_rows($koneksi);
}


//ADMIN
//Edit Produk
function edit($data){
	global $koneksi;

	$id = $data['id'];
 	$nama_barang = htmlspecialchars($data['nama_barang']);
	$jenis_barang = htmlspecialchars($data['jenis_barang']);
	$umur = htmlspecialchars($data['umur']);
	$harga = htmlspecialchars($data['harga']);
	$deskripsi = htmlspecialchars($data['deskripsi']);
	$gambarLama = htmlspecialchars($data['gambarLama']);

	//cek apakah user pilih gambar baru atau tidak
	if ($_FILES['foto_barang']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload_brg();
		$image=$gambarLama;
   		unlink("../foto_brg/" . $image); 
	}

	$sql = mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', umur='$umur', foto_barang='$gambar', harga='$harga', deskripsi='$deskripsi' WHERE idbarang='$id'");

	return mysqli_affected_rows($koneksi);
}

function upload_brg() {
	$namaFile = $_FILES['foto_barang']['name'];
	$ukuranFile = $_FILES['foto_barang']['size'];
	$error = $_FILES['foto_barang']['error'];
	$tmpName = $_FILES['foto_barang']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../foto_brg/' . $namaFileBaru);

	return $namaFileBaru;
}

//Edit Informasi Toko
function edit_info_toko($data){
	global $koneksi;

 	$about_us = htmlspecialchars($data['about_us']);
	$nama_facebook = htmlspecialchars($data['nama_facebook']);
	$whatsapp = htmlspecialchars($data['whatsapp']);
	$business_time = htmlspecialchars($data['business_time']);
	$highlight1 = htmlspecialchars($data['highlight1']);
	$highlight2 = htmlspecialchars($data['highlight2']);
	$highlight3 = htmlspecialchars($data['highlight3']);
	$highlight4 = htmlspecialchars($data['highlight4']);
	$highlight5 = htmlspecialchars($data['highlight5']);
	$highlight6 = htmlspecialchars($data['highlight6']);
	$highlight7 = htmlspecialchars($data['highlight7']);
	$logo_atasLama = htmlspecialchars($data['logo_atasLama']);
	$logo_bawahLama = htmlspecialchars($data['logo_bawahLama']);
	$banner1Lama = htmlspecialchars($data['banner1Lama']);
	$banner2Lama = htmlspecialchars($data['banner2Lama']);
	$banner3Lama = htmlspecialchars($data['banner3Lama']);

	//logo
	if ($_FILES['logo_atas']['error'] === 4) {
		$logo_atas = $logo_atasLama;
	} else {
		$logo_atas = upload_logo_atas();
		$image=$logo_atasLama;
   		unlink("../logo/" . $image); 
	}

	if ($_FILES['logo_bawah']['error'] === 4) {
		$logo_bawah = $logo_bawahLama;
	} else {
		$logo_bawah = upload_logo_bawah();
		$image=$logo_bawahLama;
   		unlink("../logo/" . $image); 
	}	
	//banner
	if ($_FILES['banner1']['error'] === 4) {
		$banner1 = $banner1Lama;
	} else {
		$banner1 = upload_banner1();
		$image=$banner1Lama;
   		unlink("../banner/" . $image); 
	}
	if ($_FILES['banner2']['error'] === 4) {
		$banner2 = $banner2Lama;
	} else {
		$banner2 = upload_banner2();
		$image=$banner2Lama;
   		unlink("../banner/" . $image); 
	}
	if ($_FILES['banner3']['error'] === 4) {
		$banner3 = $banner3Lama;
	} else {
		$banner3 = upload_banner3();
		$image=$banner3Lama;
   		unlink("../banner/" . $image); 
	}

	$query = mysqli_query($koneksi, "UPDATE tentang_kami set about_us='$about_us', business_time='$business_time', nama_facebook='$nama_facebook', whatsapp='$whatsapp', logo_atas='$logo_atas', logo_bawah='$logo_bawah', highlight1='$highlight1', highlight2='$highlight2', highlight3='$highlight3', highlight4='$highlight4', highlight5='$highlight5', highlight6='$highlight6', highlight7='$highlight7', banner1='$banner1', banner2='$banner2', banner3='$banner3'");

	return mysqli_affected_rows($koneksi);
}
//logo
function upload_logo_atas() {
	$namaFile = $_FILES['logo_atas']['name'];
	$ukuranFile = $_FILES['logo_atas']['size'];
	$error = $_FILES['logo_atas']['error'];
	$tmpName = $_FILES['logo_atas']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../logo/' . $namaFileBaru);

	return $namaFileBaru;
}
function upload_logo_bawah() {
	$namaFile = $_FILES['logo_bawah']['name'];
	$ukuranFile = $_FILES['logo_bawah']['size'];
	$error = $_FILES['logo_bawah']['error'];
	$tmpName = $_FILES['logo_bawah']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../logo/' . $namaFileBaru);

	return $namaFileBaru;
}

//banner
function upload_banner1() {
	$namaFile = $_FILES['banner1']['name'];
	$ukuranFile = $_FILES['banner1']['size'];
	$error = $_FILES['banner1']['error'];
	$tmpName = $_FILES['banner1']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../banner/' . $namaFileBaru);

	return $namaFileBaru;
}
function upload_banner2() {
	$namaFile = $_FILES['banner2']['name'];
	$ukuranFile = $_FILES['banner2']['size'];
	$error = $_FILES['banner2']['error'];
	$tmpName = $_FILES['banner2']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../banner/' . $namaFileBaru);

	return $namaFileBaru;
}
function upload_banner3() {
	$namaFile = $_FILES['banner3']['name'];
	$ukuranFile = $_FILES['banner3']['size'];
	$error = $_FILES['banner3']['error'];
	$tmpName = $_FILES['banner3']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo 
			"<script>
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo 
			"<script>
				alert('yg anda upload bukan gambar');
			</script>";
	return false;
	}

	if ($ukuranFile > 2000000) {
		echo 
			"<script>
				alert('ukuran file terlalu besar');
			</script>";
	return false;
	}

	//lolos pengecekan, gambar siap diupload
	//generate nama gambar
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	move_uploaded_file($tmpName, '../banner/' . $namaFileBaru);

	return $namaFileBaru;
}
?>