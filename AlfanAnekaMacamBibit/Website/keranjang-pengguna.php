<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username'])) {
  echo '<script language="javascript">alert("Anda harus Login!"); document.location="login.php";</script>';
} else {
    
};
    
    $uid = $_SESSION['username'];
    $caricart = mysqli_query($koneksi,"SELECT * from cart where username='$uid' and status='Cart'");
    $fetc = mysqli_fetch_array($caricart);
    $orderidd = $fetc['orderid'];
    $itungtrans = mysqli_query($koneksi,"SELECT count(detailid) as jumlahtrans from detailorder where orderid='$orderidd'");
    $itungtrans2 = mysqli_fetch_assoc($itungtrans);
    $itungtrans3 = $itungtrans2['jumlahtrans'];
    
if(isset($_POST["update"])){
    $kode = $_POST['idbarangnya'];
    $jumlah = $_POST['jumlah'];
    $q1 = mysqli_query($koneksi, "UPDATE detailorder set qty='$jumlah' where idbarang='$kode' and orderid='$orderidd'");
    if($q1){
        echo '<script language="javascript">alert("Berhasil Update Keranjang"); document.location="keranjang-pengguna.php";</script>';
    } else {
        echo "Gagal update cart
        <meta http-equiv='refresh' content='1; url= keranjang-pengguna.php'/>";
    }
} else if(isset($_POST["hapus"])){
    $kode = $_POST['idbarangnya'];
    $q2 = mysqli_query($koneksi, "DELETE from detailorder where idbarang='$kode' and orderid='$orderidd'");
    if($q2){
        echo '<script language="javascript">alert("Berhasil di hapus");</script>';
    } else {
        echo "Gagal Hapus";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>AlfanAnekaMacamBibit</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tokopekita, Richard's Lab" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/logobaru2.png" type="image/x-icon">
<link rel="apple-touch-icon" href="images/logobaru2.png">

<link href="css/keranjang.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
</head>
<!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="  navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                        <a class="navbar-brand" href="halaman_pengguna.php"><img src="images/logobaru.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->
    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item"><a class="nav-link" href="halaman_pengguna.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="list_bibit-pengguna.php">List Bibit</a></li>
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

    <!-- Start Top Search -->
        <div class="container">
            <form method="get" action="list_bibit-pengguna.php">
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
                    <h2>Keranjang</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="halaman_pengguna.php">Home</a></li>
                        <li class="breadcrumb-item active">Keranjang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->


<body>
<!-- checkout -->
    <div class="checkout">
        <div class="container">
            <h2 style="font-size: 20px; font-weight: bold;">Dalam keranjangmu ada : <span><?php echo $itungtrans3 ?> barang</span></h2>
            <div class="checkout-right">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>No.</th>    
                            <th>Produk</th>
                            <th>Nama Produk</th>
                            <th>Umur</th>
                            <th>Jumlah</th>
                            
                        
                            <th>Harga Satuan</th>
                            <th>Sub Total</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    
                    <?php 
                        $brg=mysqli_query($koneksi,"SELECT * from detailorder d, barang p where orderid='$orderidd' and d.idbarang=p.idbarang order by d.idbarang ASC");
                        $no=1;
                        while($b=mysqli_fetch_array($brg)){

                    ?>
                    <tr class="rem1"><form method="post">
                        <td class="invert"><?php echo $no++ ?></td>
                        <td class="invert"><a href="detail_bibit-pengguna.php?idbarang=<?php echo $b['idbarang'] ?>"><img src="foto_brg/<?=$b['foto_barang'] ?>" width="100px" height="100px" /></a></td>
                        <td class="invert"><?php echo $b['nama_barang'] ?></td>
                        <td class="invert"><?php echo $b['umur']?></td>
                        <td class="invert">
                             <div class="quantity"> 
                                <div class="quantity-SELECT">                     
                                    <input type="number" name="jumlah" class="form-control" height="100px" value="<?php echo $b['qty'] ?>" \>
                                </div>
                            </div>
                        </td>
                
                        <td class="invert">Rp<?php echo number_format($b['harga']) ?></td>
                        <td class="invert">
                            <?php
                            $hrg = $b['harga'];
                            $qtyy = $b['qty'];
                            $totalharga = $hrg * $qtyy;
                            ?>
                            Rp<?php echo number_format($totalharga) ?></td>
                        <td class="invert">
                            <div class="rem">
                            
                                <input type="submit" name="update" class="form-control" value="Update" \>
                                <input type="hidden" name="idbarangnya" value="<?php echo $b['idbarang'] ?>" \>
                                <input type="submit" name="hapus" class="form-control" value="Hapus" \>
                            </form>
                            </div>
                            <script>$(document).ready(function(c) {
                                $('.close1').on('click', function(c){
                                    $('.rem1').fadeOut('slow', function(c){
                                        $('.rem1').remove();
                                    });
                                    });   
                                });
                           </script>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                                <!--quantity-->
                                    <script>
                                    $('.value-plus').on('click', function(){
                                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus').on('click', function(){
                                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
                                        if(newVal>=1) divUpd.text(newVal);
                                    });
                                    </script>
                                <!--quantity-->
                </table>
            </div>
            <div class="checkout-left"> 
                <div class="checkout-left-basket">
                    <h4>Total Harga</h4>
                    <ul>
                        <?php 
                        $brg=mysqli_query($koneksi,"SELECT * from detailorder d, barang p where orderid='$orderidd' and d.idbarang=p.idbarang order by d.idbarang ASC");
                            $no=1;
                            $subtotal = 0;
                        while($b=mysqli_fetch_array($brg)){
                        $hrg = $b['harga'];
                        $qtyy = $b['qty'];
                        $totalharga = $hrg * $qtyy;
                        $subtotal += $totalharga
                        ?>
                        <?php
                        }
                        ?>
                        <li>Total<i></i> <span>Rp<?php echo number_format($subtotal) ?></span></li>
                    </ul>
                </div>
                <div class="checkout-right-basket">
                    <a href="list_bibit-pengguna.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
                    <a href="checkout-pengguna.php"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //checkout -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <?php 
            $query_mysqli2 = mysqli_query($koneksi,"SELECT * from barang");
            while ($result2 = mysqli_fetch_array($query_mysqli2)) { ?>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="foto_brg/<?php echo $result2['foto_barang']; ?>" class="card-img-top" alt="..." style="width: 400px; height: 350px;">
                    <div class="hov-in">
                        <a href="detail_bibit-penngguna.php?idbarang=<?=$result2['idbarang']?>"><i class="fas fa-info-circle"></i></a>
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

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 4000,
                easingType: 'linear' 
                };
            
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->

<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
                        
            jQuery('#responsive').change(function(){
              $('#responsive_wrapper').width(jQuery(this).val());
            });
            
        });
</script>   
<!-- //main slider-banner --> 
</body>
</html>