<?php 
    session_start();
    include"koneksi.php";   


 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Aditii Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="css/detail_bibit.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/detail_bibit2.css" media="all" />
<script type="text/javascript" src="asset/js/jquery.min.js"></script>
<!-- start slider -->       
    <script type="text/javascript" src="asset/js/cloud-zoom.1.0.3.min.js"></script>
    <!--<script type="text/javascript" src="asset/js/productviewgallery.js"></script>-->
    <link href="css/detail_bibit3.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="asset/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="asset/js/jquery.cslider.js"></script>
    <script type="text/javascript">
        
    </script>
            </script>

<!-- Site Icons -->
<link rel="shortcut icon" href="images/logobaru2.png" type="image/x-icon">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

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
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Detail Bibit</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="list_bibit-guest.php">List Bibit</a></li>
                        <li class="breadcrumb-item active">Detail Bibit</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <br>

<!----start-cursual---->
<?php 
    $idbarang = $_GET['idbarang'];
    $sql = $koneksi->query("SELECT*FROM barang WHERE idbarang='$idbarang'");    
    $review = $sql->fetch_array();
 ?>
<div class="wrap">  
    <div class="main">
        <!-- start content -->
        <div class="single">
            <!-- start span1_of_1 -->
            <div class="left_content">
                <div class="span1_of_1">
                    <!-- start product_slider -->
                    <div class="product-view">
                        <div class="product-essential">
                            <div class="product-img-box">
                                <div class="product-image"> 
                                    <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="foto_brg/<?=$review['foto_barang']?>" title="<?=$review['nama_barang']?>" alt="<?=$review['nama_barang']?>">
                                    <img src="foto_brg/<?=$review['foto_barang']?>" style="width: 350px; height: 350px;" alt="<?=$review['nama_barang']?>" title="<?=$review['nama_barang']?>" />
                                    </a>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                    <!-- end product_slider -->
                </div>
            <!-- start span1_of_1 -->
            <div class="span1_of_1_des">
                <div class="desc1">
                    <h3 style="color: black; font-weight: bold;"><?=$review['nama_barang']?></h3>
                    <h4 style="color: black;">* Umur : <?=$review['umur']?> <strong style="color: #C0C0C0;">|</strong> *stok : <?=$review['stok_barang']?></h4><br>               
                    <h5 style="color: red; background-color: #FAFAFA; font-weight: bold;">Rp.<?=number_format($review['harga'])?> (eceran)</h5>
                    <h5 style="color: red;">Rp.<?=number_format($review['harga_partai'])?> (partai)</h5>
                    <h6>*minimal pembelian partai, 1000 bibit</h6><br>
                    
                    <div class="">
                        <span class="span_center"><a href="login.php">login to add in cart </a></span>
                        <div class="clear"></div>
                        <br>
                        <a href="checkout-guest.php?idbarang=<?=$review['idbarang']?>" class="btn btn-success btn-sm fab fa-whatsapp" style="width: 300px; color: white; height: 50px; font-size: 20px; padding-top: 12px;"> Beli Sekarang</a>
                    </div>
                 </div>
                </div>
                <div class="clear"></div>
                <!-- start tabs -->
                    <section class="tabs">
                    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
                    <label for="tab-1" class="tab-label-1">Deskripsi Barang</label>
              
                    <div class="clear-shadow"></div>
                    
                    <div class="content">
                        <div class="content-1">
                            <?=$review['deskripsi']?>
                            <div class="clear"></div>
                        </div>
                        <div class="content-2">
                            <p class="para"><span>WELCOME </span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                            <ul class="qua_nav">
                                <li>Multimedia Systems</li>
                                <li>Digital media adapters</li>
                                <li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
                            </ul>
                        </div>
                        <div class="content-3">
                            <p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                            <ul>
                                <li>Research</li>
                                <li>Design and Development</li>
                                <li>Porting and Optimization</li>
                                <li>System integration</li>
                                <li>Verification, Validation and Testing</li>
                                <li>Maintenance and Support</li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    </section>
                    <!-- end tabs -->
                </div>
                <div class="clear"></div>
           </div>   
    <!-- end content -->
    </div>
</div>

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
