<?php
include '../koneksi.php';

if($_POST['edit']){
			$about_us = $_POST['about_us'];
			$business_time = $_POST['business_time'];
			$nama_facebook = $_POST['nama_facebook'];
			$whatsapp = $_POST['whatsapp'];
			$highlight1 = $_POST['highlight1'];
			$highlight2 = $_POST['highlight2'];
			$highlight3 = $_POST['highlight3'];
			$highlight4 = $_POST['highlight4'];
			$highlight5 = $_POST['highlight5'];
			$highlight6 = $_POST['highlight6'];
			$highlight7 = $_POST['highlight7'];

			
			$ekstensi_diperbolehkan	= array('png','jpg');
			//logo atas
			$logo_atas = $_FILES['logo_atas']['name'];
			$x = explode('.', $logo_atas);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['logo_atas']['size'];
			$file_tmp = $_FILES['logo_atas']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../logo/'.$logo_atas);
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

 			//logo bawah
			$logo_bawah = $_FILES['logo_bawah']['name'];
			$y = explode('.', $logo_bawah);
			$ekstensi2 = strtolower(end($y));
			$ukuran	= $_FILES['logo_bawah']['size'];
			$file_tmp = $_FILES['logo_bawah']['tmp_name'];

			if(in_array($ekstensi2, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../logo/'.$logo_bawah);
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
			
			$query = mysqli_query($koneksi, "UPDATE tentang_kami set about_us='$about_us', business_time='$business_time', nama_facebook='$nama_facebook', whatsapp='$whatsapp', logo_atas='$logo_atas', logo_bawah='$logo_bawah', highlight1='$highlight1', highlight2='$highlight2', highlight3='$highlight3', highlight4='$highlight4', highlight5='$highlight5', highlight6='$highlight6', highlight7='$highlight7'");
		}

header("location:informasi_toko.php?pesan=update");
?>