<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['username'])) {
  echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" href="images/logobaru2.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logobaru2.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/list_bibit.css">
</head>
<body>
<!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="  navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                        <a class="navbar-brand" href="halaman_pengguna.php">
                            <?php
                            $sql_logo_atas = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                            $logo_atas = mysqli_fetch_array($sql_logo_atas);
                            ?>
                            <img src="logo/<?php echo $logo_atas['logo_atas']?>" class="logo" alt="">
                        </a>
                    </div>
                    <!-- End Header Navigation -->
    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item"><a class="nav-link" href="halaman_pengguna.php">Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="list_bibit-pengguna.php">List Bibit</a></li>
                            <li class="nav-item"><a class="nav-link" href="#hubungi_kami">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="hubungi_kami-pengguna.php">Hubungi Kami</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
    
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="keranjang-pengguna.php">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <!--<li class="side-menu">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge"></span>
                                <p style="color: black;">Keranjang</p>
                            </a>
                        </li>-->
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"> <?php echo $_SESSION['username']; ?></i><i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu" style="left: -65px; width: 10px;">
                                <li><a href="view_profil_pengguna.php">View Profil</a></li>
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
                    <h2>List Bibit</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="halaman_pengguna.php">Home</a></li>
                        <li class="breadcrumb-item active">List Bibit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<br>
<?php 
//pagination - konfigurasi
$jumlahdataperhalaman = 9;
$hasil = mysqli_query($koneksi, "SELECT * FROM barang");
$jumlahdata = mysqli_num_rows($hasil);
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
$halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;

$query_mysqli = mysqli_query($koneksi,"SELECT * from barang ORDER BY stok_barang DESC LIMIT $awaldata, $jumlahdataperhalaman");

$nomor = 1;

if (isset($_GET['cari'])) {
   $query_mysqli = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang LIKE'%".$_GET['cari']."%'");
   
}
   if(isset($_GET['umur'])){
    $umur=$_GET['umur'];
    $where = "";
    if ($umur==-1){
       $where = "WHERE umur < 6";
    }
    if ($umur==0){
       $where = "WHERE umur = 6";
    }
    if ($umur==1){
       $where = "WHERE umur > 6";
    }
    $query_mysqli = mysqli_query($koneksi, "SELECT * FROM barang $where");
}
    ?>

<!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Produk By</span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                                    <option data-display="">AlfanAnekaMacamBibit</option>
                                </select>
                                </div>
                                <p style="color: black;">List Bibit</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <?php while ($result = mysqli_fetch_array($query_mysqli)) { ?>
                                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Dijual</p>
                                                    </div>
                                                    <img src="foto_brg/<?php echo $result['foto_barang']; ?>" class="card-img-top" alt="..." style="width: 250px; height: 220px;">
                                                    <div class="mask-icon">
                                                        <?php if ($result['stok_barang'] == 0): { 
                                                            echo "<a class='cart' href='#' style='background-color: black;'>Belum Tersedia</a>";
                                                        } elseif ($result['stok_barang'] > 0): {
                                                            echo "<a class='cart' href='#'>Tersedia</a>";
                                                        }
                                                        ?>
                                                            
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4><?php echo $result['nama_barang']; ?></h4>
                                                    <label><?php echo $result['umur']; ?></label>
                                                    <h5>Rp<?php echo $result['harga']; ?></h5>
                                                    <?php if ($result['stok_barang'] == 0): { ?>
                                                        <p class="btn btn-primary" style="width: 213px; background-color: black;">Detail</a>
                                                    <?php } ?> 
                                                    <?php elseif ($result['stok_barang'] > 0): { ?>
                                                        <a href="detail_bibit-pengguna.php?idbarang=<?=$result['idbarang']?>" class="btn btn-primary" style="width: 213px;">Detail</a>
                                                    <?php } ?>
                                                    
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form method="get" action="list_bibit-pengguna.php">
                                <input class="form-control" placeholder="Search here..." type="text" name="cari">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Filter Bibit</h3>
                            </div>
                                        <form method="get" action="">
                                          <input type="radio"  name="umur" value="-1">
                                          <label > kurang dari 6 Bulan</label><br>
                                          <input type="radio"  name="umur" value="0">
                                          <label >6 Bulan</label><br>
                                          <input type="radio"  name="umur" value="1">
                                          <label >lebih dari 6 Bulan</label><br>
                                          <input type="submit" name="button" value="Submit">
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="..." >
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <?php if($halamanaktif > 1) : ?>
                    <a href="?halaman=<?php echo $halamanaktif - 1; ?>" class="page-link" tabindex="-1">&laquo;</a>
                <?php endif; ?>
            </li>
            <?php for($i = 1; $i <= $jumlahhalaman; $i++) : ?>
                        <?php if($i == $halamanaktif) : ?>
            <li class="page-item">
                            <a href="?halaman=<?php echo $i; ?>" class="page-link" style="font-weight: bold; color: red;"><?php echo $i; ?></a>

            </li>
                                    <?php else : ?>
                            <a href="?halaman=<?php echo $i; ?>" class="page-link" style=""><?php echo $i; ?></a>
                        <?php endif; ?>
                <?php endfor; ?>
            <li class="page-item">
              <?php if($halamanaktif < $jumlahhalaman) : ?>
                    <a href="?halaman=<?php echo $halamanaktif + 1; ?>" class="page-link">&raquo;</a>
                <?php endif; ?>
            </li>
          </ul>
        </nav>
    </div>
    <!-- End Shop Page -->

<!--<select name="umur" id="s_jurusan" style="width: 200px;">
    <option value="">Filter Bibit</option>
    <option value="-1" name="umur"> <6 Bulan </option>
    <option value="0" name="umur"> 6 Bulan </option>
    <option value="1" name="umur"> >6 Bulan </option>
    <input type="submit" name="button" value="Submit">
</select>-->



<br>

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <?php 
            $query_mysqli2 = mysqli_query($koneksi,"SELECT * from barang WHERE stok_barang > 0");
            while ($result2 = mysqli_fetch_array($query_mysqli2)) { ?>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="foto_brg/<?php echo $result2['foto_barang']; ?>" class="card-img-top" alt="..." style="width: 400px; height: 350px;">
                    <div class="hov-in">
                        <a href="detail_bibit-pengguna.php?idbarang=<?=$result2['idbarang']?>"><i class="fas fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
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

                                        $sql_alamat = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE level='admin'");
                                        $alamat = mysqli_fetch_array($sql_alamat);
                                        ?>

                                        <p style="color: white;">Alamat : <?php echo $alamat['alamat']; ?></p>
                                    </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>
                                        <?php

                                        $sql_no_telepon = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE level='admin'");
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