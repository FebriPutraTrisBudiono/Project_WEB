<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <a class="navbar-brand" href="index.php">
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
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="list_bibit-guest.php">List Bibit</a></li>
                        <li class="nav-item"><a class="nav-link" href="#hubungi_kami">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="hubungi_kami-guest.php">Hubungi Kami</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="profil"><a href="login.php">Login</a></li>
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
        <div class="container">
            <form method="get" action="list_bibit-guest.php">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Search" name="cari" style="width: 195%;">
                </div>
                <div class="col">
                    <button style="background-color: black; color: white; float: right;">cari</button>
                </div>
            </div>
            </form>
        </div>
    <!-- End Top Search -->

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> Selamat Datang, Selamat Berbelanja
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

<?php
$sql_banner = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
$banner = mysqli_fetch_array($sql_banner);
?>
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="banner/<?php echo $banner['banner1']?>" class="logo" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To</strong></h1>
                            <h1 class="m-b-40" style="font-size: 350%"><strong>AlfanAneka</strong></h1>
                            <h1 class="m-b-40" style="font-size: 300%"><strong>MacamBibit</strong></h1>
                            <p class="m-b-40">Penjualan Bibit Tanaman Terpercaya, Murah dan Berkualitas<br> Menerima Pengiriman secara diantar langsung maupun melalui jasa</p>
                            <p><a class="btn hvr-hover" href="list_bibit-guest.php">Belanja Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="banner/<?php echo $banner['banner2']?>" class="logo" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To</strong></h1>
                            <h1 class="m-b-40" style="font-size: 350%"><strong>AlfanAneka</strong></h1>
                            <h1 class="m-b-40" style="font-size: 300%"><strong>MacamBibit</strong></h1>
                            <p class="m-b-40">Penjualan Bibit Tanaman Terpercaya, Murah dan Berkualitas<br> Menerima Pengiriman secara diantar langsung maupun melalui jasa</p>
                            <p><a class="btn hvr-hover" href="list_bibit.php">Belanja Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="banner/<?php echo $banner['banner3']?>" class="logo" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To</strong></h1>
                            <h1 class="m-b-40" style="font-size: 350%"><strong>AlfanAneka</strong></h1>
                            <h1 class="m-b-40" style="font-size: 300%"><strong>MacamBibit</strong></h1>
                            <p class="m-b-40">Penjualan Bibit Tanaman Terpercaya, Murah dan Berkualitas<br> Menerima Pengiriman secara diantar langsung maupun melalui jasa</p>
                            <p><a class="btn hvr-hover" href="list_bibit.php">Belanja Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation" id="tentang_kami">
            <a href="#" class="next" style="background-color: transparent;"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev" style="background-color: transparent;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/about-us2.jpg" style="width: 60%" alt="" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <?php

                    $sql_aboutus = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                    $about_us = mysqli_fetch_array($sql_aboutus);
                    ?>
                    <p style="font-size: 180%; color: black;"><?php echo $about_us['about_us']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->

<?php

$query_mysqli2 = mysqli_query($koneksi,"SELECT * FROM barang WHERE stok_barang >= 1000 ORDER BY stok_barang DESC");

?>
    <div class="box-add-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produk siap pesan partai</h1>
                        <p>Siap Pesan lebih dari 1000 Bibit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Product</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-12 col-md-6 special-grid best-seller">
                    <div class="row">
                        <?php while ($result2 = mysqli_fetch_array($query_mysqli2)) { ?>
                        <div class="products-single fix" style="margin: 7px; margin-right: auto; margin-left: auto;">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale" style="background-color: black;">New</p>
                                </div>
                                <img src="foto_brg/<?php echo $result2['foto_barang']; ?>" class="card-img-top" alt="..." style="width: 250px; height: 220px;">
                                <div class="mask-icon">
                                    <?php if ($result2['stok_barang'] == 0): { 
                                        echo "<a class='cart' href='#' style='background-color: black;'>Belum Tersedia</a>";
                                    } elseif ($result2['stok_barang'] > 0): {
                                        echo "<a class='cart' href='#'>Tersedia</a>";
                                    }
                                    ?>
                                        
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4><?php echo $result2['nama_barang']; ?></h4>
                                <label><?php echo $result2['umur']; ?></label>
                                <h5>Rp<?php echo $result2['harga']; ?></h5><br>
                                <?php if ($result2['stok_barang'] == 0): { ?>
                                    <p class="btn btn-primary" style="width: 213px; background-color: black;">Detail</a>
                                <?php } ?> 
                                <?php elseif ($result2['stok_barang'] > 0): { ?>
                                    <a href="detail_bibit-guest.php?idbarang=<?=$result2['idbarang']?>" class="btn btn-primary" style="width: 213px;">Detail</a>
                                <?php } ?>
                                
                                <?php endif ?>
                            </div>
                        </div>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

$query_mysqli = mysqli_query($koneksi,"SELECT * FROM `barang` ORDER BY idbarang DESC LIMIT 4");

?>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Produk Baru Ditambahkan</h1>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">New Product</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-12 col-md-6 special-grid best-seller">
                    <div class="row">
                        <?php while ($result = mysqli_fetch_array($query_mysqli)) { ?>
                        <div class="products-single fix" style="margin: 7px; margin-right: auto; margin-left: auto;">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale" style="background-color: black;">New</p>
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
                                <h5>Rp<?php echo $result['harga']; ?></h5><br>
                                <?php if ($result['stok_barang'] == 0): { ?>
                                    <p class="btn btn-primary" style="width: 213px; background-color: black;">Detail</a>
                                <?php } ?> 
                                <?php elseif ($result['stok_barang'] > 0): { ?>
                                    <a href="detail_bibit-guest.php?idbarang=<?=$result['idbarang']?>" class="btn btn-primary" style="width: 213px;">Detail</a>
                                <?php } ?>
                                
                                <?php endif ?>
                            </div>
                        </div>
                        <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

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
                        <a href="detail_bibit-guest.php?idbarang=<?=$result2['idbarang']?>"><i class="fas fa-info-circle"></i></a>
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