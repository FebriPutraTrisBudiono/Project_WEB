<?php
session_start();
include 'koneksi.php';

?>

<!DOCTYPE html>

<head>
    <title>AlfanAnekaMacamBibit</title>
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <br>
    <?php 
       $idbarang = $_GET['idbarang'];
       $sql = $koneksi->query("SELECT*FROM barang WHERE idbarang='$idbarang'");    
       $review = $sql->fetch_array();
    ?>


<div class="container" style="background-color: white; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5)">
    <form class="contact100-form validate-form" id="whatsapp">
    <div class="row">
        <div class="col">
          <label style="color: green; font-weight: bold; font-size: 19px;">Alamat Pengiriman</label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input class="tujuan" type="hidden" id="noAdmin">
                <div class="wrap-input100">
                    <label>
                        <input class="input100 nama" type="text" placeholder="Masukkan Nama Anda">
                    </label>
                </div>
        </div>
        <div class="col">
            <div class="wrap-input100">
                <label>
                    <input class="input100 nowhatsapp" type="text" placeholder="Masukkan No Whatsapp Anda">
                </label>
            </div>
        </div>
        <div class="col">
            <div class="wrap-input100">
                <label>
                    <textarea class="input100 alamat" placeholder="Masukkan Alamat Anda"></textarea>
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label style="color: green; font-weight: bold; font-size: 19px;">Produk Dipesan</label>
        </div>
    </div>
    <input type="hidden" id="nama_bibit" value="">
    <div class="row">
        <div class="col">
            <img src="foto_brg/<?= $review['foto_barang'] ?>" width="100px" height="100px" />
            <input class="input100 namabarang" type="text" style="background-color: white; border-style: none; position: absolute; color: black;" value=" <?php echo $review['nama_barang'] ?>" disabled>
        </div>
        <div class="col">
            <input class="input100 harga" type="text" style="background-color: white; border-style: none; color: black;" value="Rp<?php echo $review['harga'] ?>/bibit" disabled>
        </div>
        <div class="col">
            <input class="input100 qty" type="text" style="background-color: white; border-style: none; color: black;" value="1x" disabled>
        </div>
        <div class="col">
            <input class="input100 subtotal" type="text" style="background-color: white; border-style: none; color: black;" value="Rp<?php echo $review['harga'] ?>" disabled>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input class="input100 total" type="text" style="background-color: white; border-style: none; color: black; color: #FF0000; font: sans-serif; font-size: 25px; font-weight: 600; width: 300px; float: right;" value="Total : Rp<?php echo $review['harga'] ?>" disabled>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <a class="contact100-form-btn submit btn btn-primary btn-lg btn-block" style="color: white;">Kirim</a>
        </div>
    </div>
    <br>
    </form> 
</div>

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
                            <img src="logo/<?php echo $logo_bawah['logo_bawah'] ?>" class="logo" alt="" style="width: 80%">
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



<script>
    //no wa admin
    $("#noAdmin").val("081230232820");
    $('.whatsapp-btn').click(function () {
      $('#whatsapp').toggleClass('toggle');
    });
    // Onclick Whatsapp Sent!
    $('#whatsapp .submit').click(WhatsApp);
    $("#whatsapp input, #whatsapp textarea").keypress(function () {
      if (event.which == 13) WhatsApp();
    });
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    function WhatsApp() {
      var ph = '';
      if ($('#whatsapp .nama').val() == '') { // Cek Nama
        ph = $('#whatsapp .nama').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nama').focus();
        return false;
      } else if ($('#whatsapp .nowhatsapp').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .nowhatsapp').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nowhatsapp').focus();
        return false;
      } else if ($('#whatsapp .alamat').val() == '') { // Cek Alamat
        ph = $('#whatsapp .alamat').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .alamat').focus();
        return false;
      } else if ($('#whatsapp .namabarang').val() == '') { // Cek Alamat
        ph = $('#whatsapp .namabarang').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .namabarang').focus();
        return false;
      } else if ($('#whatsapp .harga').val() == '') { // Cek Alamat
        ph = $('#whatsapp .harga').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .harga').focus();
        return false;
      } else if ($('#whatsapp .qty').val() == '') { // Cek Alamat
        ph = $('#whatsapp .qty').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .qty').focus();
        return false;
      } else if ($('#whatsapp .subtotal').val() == '') { // Cek Alamat
        ph = $('#whatsapp .subtotal').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .subtotal').focus();
        return false;
      } else if ($('#whatsapp .total').val() == '') { // Cek Alamat
        ph = $('#whatsapp .total').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .total').focus();
        return false;
      } else {
        // Check Device (Mobile/Desktop)
        var url_wa = 'https://web.whatsapp.com/send';
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          url_wa = 'whatsapp://send/';
        }
        // Get Value
        var tujuan = $('#whatsapp .tujuan').val(),
          via_url = location.href,
          nama = $('#whatsapp .nama').val(),
          nowhatsapp = $('#whatsapp .nowhatsapp').val(),
          alamat = $('#whatsapp .alamat').val(),
          namabarang = $('#whatsapp .namabarang').val(),
          harga = $('#whatsapp .harga').val(),
          qty = $('#whatsapp .qty').val(),
          subtotal = $('#whatsapp .subtotal').val(),
          total = $('#whatsapp .total').val();

        $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Nama: ' + nama + ' %0ANo. Whatsapp: ' + nowhatsapp + '%0AAlamat: ' + alamat + '%0A======================' + ' %0ANama Barang :  ' + namabarang + ' %0AHarga :  ' + harga + ' %0Aqty :  ' + qty + ' %0ASubTotal :  ' + subtotal + ' %0A' + total + '%0A======================' + ' %0A%0Avia ' + via_url);
        var w = 960,
          h = 540,
          left = Number((screen.width / 2) - (w / 2)),
          tops = Number((screen.height / 2) - (h / 2)),
          popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
        popupWindow.focus();
        return false;
      }
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