<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username'])) {
  echo '<script language="javascript">alert("Anda harus Login"); document.location="login.php";</script>';
}

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
                            <li class="nav-item"><a class="nav-link" href="list_bibit-pengguna.php">List Bibit</a></li>
                            <li class="nav-item"><a class="nav-link" href="#hubungi_kami">Tentang Kami</a></li>
                            <li class="nav-item active"><a class="nav-link" href="hubungi_kami-pengguna.php">Hubungi Kami</a></li>
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
                    <h2>Hubungi Kami</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="halaman_pengguna.php">Home</a></li>
                        <li class="breadcrumb-item active">Hubungi Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET IN TOUCH</h2>
                        <p style="color: black;">Silahkan tuliskan Saran, Masukan atau Pertanyaan anda pada kolom dibawah ini.</p>
                        <form class="contact100-form validate-form" id="whatsapp">
                            <input class="tujuan" type="hidden" id="noAdmin">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="input100 nama form-control" id="name" name="name" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="Number" placeholder="No Telepon" id="email" class="input100 no_telepon form-control" name="name" required >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="input100 alamat form-control" id="subject" name="name" placeholder="Alamat" required >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input100 pesan form-control" id="message" placeholder="Tuliskan Pesan Anda.." rows="4" required></textarea>
                                    </div>
                                    <div class="submit-button text-center">
                                        <a class="contact100-form-btn submit btn btn-primary btn-lg btn-block" style="color: white;">Kirim</a>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                            <?php

                            $sql_aboutus = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                            $about_us = mysqli_fetch_array($sql_aboutus);
                            ?>

                            <p style="color: black;"><?php echo $about_us['about_us']; ?></p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>
                                    <?php

                                        $sql_alamat = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE level='admin'");
                                        $alamat = mysqli_fetch_array($sql_alamat);
                                        ?>

                                    <p style="color: black;">Alamat : <?php echo $alamat['alamat']; ?></p>
                                 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>
                                    <?php

                                        $sql_no_telepon = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE level='admin'");
                                        $no_telepon = mysqli_fetch_array($sql_no_telepon);
                                        ?>

                                    <p style="color: black;">No Telepon : <?php echo $no_telepon['no_telepon']; ?></p>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

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



<script>
    //no wa admin
    $("#noAdmin").val("082131916101");
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
        alert('Silahkan tulis ' + ph +' Anda');
        $('#whatsapp .nama').focus();
        return false;
      } else if ($('#whatsapp .no_telepon').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .no_telepon').attr('placeholder');
        alert('Silahkan tulis ' + ph + ' Anda');
        $('#whatsapp .no_telepon').focus();
        return false;
      } else if ($('#whatsapp .alamat').val() == '') { // Cek Alamat
        ph = $('#whatsapp .alamat').attr('placeholder');
        alert('Silahkan tulis ' + ph + ' Anda');
        $('#whatsapp .alamat').focus();
        return false;
      } else if ($('#whatsapp .pesan').val() == '') { // Cek Alamat
        ph = $('#whatsapp .pesan').attr('placeholder');
        alert('Silahkan tulis ' + ph + ' Anda');
        $('#whatsapp .pesan').focus();
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
          no_telepon = $('#whatsapp .no_telepon').val(),
          alamat = $('#whatsapp .alamat').val(),
          pesan = $('#whatsapp .pesan').val();

        $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Nama: ' + nama + ' %0ANo. Telepon: ' + no_telepon + '%0AAlamat: ' + alamat + ' %0APesan :  ' + pesan + '%0A======================' + ' %0A%0Avia ' + via_url);
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