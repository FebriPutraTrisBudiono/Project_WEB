<?php
include '../koneksi.php';

if($_POST['edit']){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$password_md5 = md5($password);

			$nama = $_POST['nama'];
			$no_telepon = $_POST['no_telepon'];
			$alamat = $_POST['alamat'];

			
			$ekstensi_diperbolehkan	= array('png','jpg');
			//logo atas
			$foto = $_FILES['foto']['name'];
			$x = explode('.', $foto);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto']['size'];
			$file_tmp = $_FILES['foto']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../foto/'.$foto);
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
			
			$query = mysqli_query($koneksi, "UPDATE pengguna set username='$username', password='$password_md5', nama='$nama', no_telepon='$no_telepon', foto='$foto', alamat='$alamat' where username='$username'");
		}

echo "
        <script type='text/javascript'>
        alert('Pengeditan Berhasil');
        window.location='../view_profil_admin.php'
        </script>";
?>