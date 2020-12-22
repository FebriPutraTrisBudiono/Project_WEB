<?php
session_start();
include_once 'koneksi.php';

$id = $_GET['id'];
$userquery = $koneksi->query("SELECT * FROM barang WHERE idbarang = ".$id);
$row = $userquery->fetch_object();

if(isset($_POST["ubah"])){
$nama_barang = $_POST["nama_barang"];
$jenis_barang = $_POST["jenis_barang"];
$umur = $_POST["umur"];

//upload gambar
$ekstensi_diperbolehkan = array('png','jpg');
$foto_barang = $_FILES['foto_barang']['name'];
            $x = explode('.', $foto_barang);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['foto_barang']['size'];
            $file_tmp = $_FILES['foto_barang']['tmp_name'];

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){          
                    move_uploaded_file($file_tmp, 'foto_barang/'.$foto_barang);
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }

$sql = "UPDATE barang SET nama_barang = '".$nama_barang."', jenis_barang = '".$jenis_barang."', umur = '".$umur."', foto_barang = '".$foto_barang."' WHERE idbarang = ".$id;

if ($koneksi->query($sql) == TRUE) {
	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("d/m/Y h:i:s");
	$kegiatan = "Mengubah nama barang ".$row->nama_barang." menjadi ".$nama_barang." dan mengubah jenis barang ".$row->jenis_barang." menjadi ".$jenis_barang;
	$sqlhistory = "INSERT INTO history (waktu, jenis_barang, nama_barang, kegiatan) 
	VALUES ('".$waktu."','".$row->nama_barang."','".$row->jenis_barang."','".$kegiatan."')";	
    if ($koneksi->query($sqlhistory) == TRUE) {
	header("Location: tab-barang.php");
	} else {
    echo "Error dalam mengubah data: " . $koneksi->error;
	}
} else {
    echo "Error dalam mengubah data: " . $koneksi->error;
}

$koneksi->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AlfanAnekaMacamBibit</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/update_stok.css">

</head>
<body>
<!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container" style="max-width: 1600px">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header" style="margin: auto;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="  navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                        <a class="navbar-brand" href="index.php"><img src="images/logobaru.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->
    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item"><a class="nav-link" href="halaman_admin.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">List Bibit</a></li>
                            <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Menu Edit</a>
                            <ul class="dropdown-menu">
                                <li><a href="edit_informasi.php">Edit Informasi</a></li>
                                <li><a href="update_stok.php">Update Stok Bibit</a></li>
                                <li><a href="cart.html">Sub Menu 3</a></li>
                            </ul>
                        </li>

                            <li class="nav-item"><a class="nav-link" href="about.html">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us.html">Hubungi Kami</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
    
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                            <li class="nav-item active">
                            <a class="nav-link" href="keranjang.php">
                                <i class="fa fa-shopping-bag"> Keranjang</i>
                            </a>
                        </li>
                            <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="view_profil_admin.php">View Profil</a></li>
                                <li><a href="process/logout.php">Logout</a></li>
                            </ul>
                        </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Main Top -->
    <div class="main-top" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Selamat Datang <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 
                                    <?php

                                    $sql_highlight1 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight1 = mysqli_fetch_array($sql_highlight1);
                                    ?>
                                    <?php echo $highlight1['highlight1']; ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>
                                    <?php

                                    $sql_highlight2 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight2 = mysqli_fetch_array($sql_highlight2);
                                    ?>
                                    <?php echo $highlight2['highlight2']; ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>
                                    <?php

                                    $sql_highlight3 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight3 = mysqli_fetch_array($sql_highlight3);
                                    ?>
                                    <?php echo $highlight3['highlight3']; ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>
                                    <?php

                                    $sql_highlight4 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight4 = mysqli_fetch_array($sql_highlight4);
                                    ?>
                                    <?php echo $highlight4['highlight4']; ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>
                                    <?php

                                    $sql_highlight5 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight5 = mysqli_fetch_array($sql_highlight5);
                                    ?>
                                    <?php echo $highlight5['highlight5']; ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>
                                    <?php

                                    $sql_highlight6 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight6 = mysqli_fetch_array($sql_highlight6);
                                    ?>
                                    <?php echo $highlight6['highlight6']; ?>
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i>
                                    <?php

                                    $sql_highlight7 = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $highlight7 = mysqli_fetch_array($sql_highlight7);
                                    ?>
                                    <?php echo $highlight7['highlight7']; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Edit Informasi</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="halaman_admin.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Informasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<br>
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="update_stok.php">Info Bibit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tab-barang.php">Nama Bibit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tab-stok-barang.php">Stok Bibit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tab-history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>

<br><br>

        <div class="container">
        <form method="post">
          <div class="mb-3">
            <p>ID : <?php echo $id; ?></p>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Bibit</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo $row->nama_barang; ?>" placeholder="Nama Bibit" required=>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Jenis Bibit</label>
            <input type="text" name="jenis_barang" class="form-control" value="<?php echo $row->jenis_barang; ?>" placeholder="Jenis Bibit" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Umur</label>
            <input type="text" name="umur" class="form-control" value="<?php echo $row->umur; ?>" placeholder="Umur" required>
          </div>
          <div class="mb-3">
              <label for="formFile" class="form-label">Default file input example</label>
              <input class="form-control" name="foto_barang" type="file" required>
            </div>
          <br>
          <button type="submit" name="ubah" class="btn btn-primary" style="background-color: #008000;">Ubah</button>
        </form>
        </div>

<br>

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

    <!-- Start Footer  -->
    <footer id="hubungi_kami">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Jam Kerja</h3>
                            <ul class="list-time">
                                <?php

                                $sql_business_time = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                $business_time = mysqli_fetch_array($sql_business_time);
                                ?>
                                <li style="font-size: 150%"><?php echo $business_time['business_time']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <?php
                            $sql_logo_bawah = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                            $logo_bawah = mysqli_fetch_array($sql_logo_bawah);
                            ?>
                            <img src="logo/<?php echo $logo_bawah['logo_bawah']?>" class="logo" alt="" style="width: 80%">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Sosial Media</h3><br>
                            <ul>
                                <li style="color: white;"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a> AlfanAnekaMacamBibit</li><br>
                                <li style="color: white;">
                                    <a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a> 
                                    <?php

                                    $sql_whatsapp = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                    $whatsapp = mysqli_fetch_array($sql_whatsapp);
                                    ?>
                                    <?php echo $whatsapp['whatsapp']; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Tentang Kami</h4>
                            <?php

                            $sql_aboutus = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                            $about_us = mysqli_fetch_array($sql_aboutus);
                            ?>

                            <p><?php echo $about_us['about_us']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Hubungi Kami</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>
                                        <?php

                                        $sql_alamat = mysqli_query($koneksi, "SELECT * FROM pengguna");
                                        $alamat = mysqli_fetch_array($sql_alamat);
                                        ?>

                                        <p style="color: white;">Alamat : <?php echo $alamat['alamat']; ?></p>
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>
                                        <?php

                                        $sql_no_telepon = mysqli_query($koneksi, "SELECT * FROM pengguna");
                                        $no_telepon = mysqli_fetch_array($sql_no_telepon);
                                        ?>

                                        <p style="color: white;">No Telepon : <?php echo $no_telepon['no_telepon']; ?></p>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <script>
		function confirmDelete(link) {
			if (confirm("Data ini akan dihapus ?")) {
				doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
			}
			return false;
		}
	</script>
    
    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>