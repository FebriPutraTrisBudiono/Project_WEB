<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['username'])) {
  echo '<script language="javascript">alert("Anda harus Login"); document.location="login.php";</script>';
}

else {
if ($_SESSION['level'] != "admin") {
    echo "<script>alert('Anda Tidak Memiliki Akses Admin');window.location='halaman_pengguna.php'</script>";
    }
}

$uid = $_SESSION['username'];
$caricart = mysqli_query($koneksi, "SELECT * from cart where username='$uid' and status='Cart'");
$fetc = mysqli_fetch_array($caricart);
$orderidd = $fetc['orderid'];
$itungtrans = mysqli_query($koneksi, "SELECT count(detailid) as jumlahtrans from detailorder where orderid='$orderidd'");
$itungtrans2 = mysqli_fetch_assoc($itungtrans);
$itungtrans3 = $itungtrans2['jumlahtrans'];

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
                    <a class="navbar-brand" href="halaman_admin.php">
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
                        <li class="nav-item"><a class="nav-link" href="halaman_admin.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="list_bibit.php">List Bibit</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/index.php">Menu Edit</a></li>
                        <li class="nav-item"><a class="nav-link" href="#hubungi_kami">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="hubungi_kami.php">Hubungi Kami</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="nav-item">
                            <a class="nav-link" href="keranjang.php">
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

    <!-- Start Main Top -->
    <div class="main-top">
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
                    <h2>Check-out</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="halaman_admin.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="keranjang.php">Keranjang</a></li>
                        <li class="breadcrumb-item active">Check-out</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <br>

<div class="container" style="background-color: white; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5)">
    <form class="contact100-form validate-form" id="whatsapp">
    <div class="row">
        <div class="col">
          <label style="color: green; font-weight: bold; font-size: 19px;">Alamat Pengiriman</label>
        </div>
        <?php

            if ($_SESSION['username']) {
                $sesi = $_SESSION['username'];
            }

            $sql_profil = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username ='$sesi'");
            $data = mysqli_fetch_array($sql_profil);
        ?>  
    </div>
    <div class="row">
        <div class="col">
            <input class="tujuan" type="hidden" id="noAdmin">
                <div class="wrap-input100">
                    <label>
                        <input class="input100 nama" type="text" style="background-color: white; width: 150px; border-style: none;" value="<?php echo $data['nama']; ?>" disabled>
                    </label>
                </div>
        </div>
        <div class="col">
            <div class="wrap-input100">
                <label>
                    <input class="input100 nowhatsapp" type="text" style="background-color: white; border-style: none;" value="<?php echo $data['no_telepon']; ?>" disabled>
                </label>
            </div>
        </div>
        <div class="col">
            <div class="wrap-input100">
                <label>
                    <textarea class="input100 alamat" style="background-color: white; border-style: none;"><?php echo $data['alamat']; ?></textarea>
                </label>
            </div>
        </div>
        <div class="col">
            <a href="#" style="color: blue;">Ubah</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label style="color: green; font-weight: bold; font-size: 19px;">Produk Dipesan</label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="hidden" id="nama_bibit" value="">
        </div>
    </div>
    <?php
    $brg = mysqli_query($koneksi, "SELECT * from detailorder d, barang p where orderid='$orderidd' and d.idbarang=p.idbarang order by d.idbarang ASC");
    $no = 1;
    $subtotal = 0;
    while ($b = mysqli_fetch_array($brg)) {
        $hrg = $b['harga'];
            $qtyy = $b['qty'];
            $totalharga = $hrg * $qtyy;
            $subtotal += $totalharga
    ?>
    <div class="row">
        <div class="col">
            <img src="foto_brg/<?= $b['foto_barang'] ?>" width="100px" height="100px" />
            <input class="input100 namabarang" type="text" style="background-color: white; border-style: none; position: absolute; color: black;" value=" <?php echo $b['nama_barang'] ?>" disabled>
        </div>
        <div class="col">
            <input class="input100 harga" type="text" style="background-color: white; border-style: none; color: black;" value="Rp<?php echo $b['harga'] ?>/bibit" disabled>
        </div>
        <div class="col">
            <input class="input100 qty" type="text" style="background-color: white; border-style: none; color: black;" value="<?php echo $b['qty'] ?>x" disabled>
        </div>
        <div class="col">
            <input class="input100 subtotal" type="text" style="background-color: white; border-style: none; color: black;" value="Rp<?php echo number_format($subtotal) ?>" disabled>
        </div>
    </div>
    <?php
    }
    ?>
    <div class="row">
        <div class="col">
            <li style="color: #FF0000; font: sans-serif; font-size: 25px; font-weight: 600; text-align: right; padding-right: 15%;">Total<i></i> <span>Rp<?php echo number_format($subtotal) ?></span></li>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <a id="kosongkan-keranjang" class="contact100-form-btn submit btn btn-primary btn-lg btn-block" style="color: white;">Kirim</a><br>
        </div>
    </div>
    </form> 
</div>


    <br>
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
        $("#noAdmin").val("081230232820");
        $('.whatsapp-btn').click(function() {
            $('#whatsapp').toggleClass('toggle');
        });
        // Onclick Whatsapp Sent!
        $('#whatsapp .submit').click(WhatsApp);
        $("#whatsapp input, #whatsapp textarea").keypress(function() {
            if (event.which == 13) WhatsApp();
        });

        //MENGIRIM DATA KE databarang.php
        let formData = new FormData(); //membuat form data baru
        formData.append('orderid', '<?= $orderidd; ?>'); //mengisi form data

        //mengirim form data ke url databarang.php dengan method POST
        fetch('databarang.php', {
                method: "POST",
                body: formData
            }).then(response => {
                //data yang didapatkan dikembalikan dalam format json
                return response.json();
            })
            .then(responseJson => {
                //data json tadi diubah kedalam bentuk string dan di kirim ke elemen HTML dengan id nama_bibit
                document.getElementById('nama_bibit').value = JSON.stringify(responseJson);
            })
            .catch(error => {
                //menghandle jika terjadi eror dalam pengiriman data ke databarang.php
                console.log(error);
            });

        //mengambil element html dengan id kosongkan-keranjang
        let kirim = document.getElementById('kosongkan-keranjang');
        //merequest ke file kosongkan-keranjang.php untuk menjalankan query dengan mengirim orderid
        kirim.addEventListener('click', () => {
            fetch('kosongkan-keranjang.php', {
                method: "POST",
                body: formData
            }).then(() => {
                window.location.replace("keranjang.php");
            })
        })

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
                    namabarang = $('#whatsapp .namabarang').val();

                //mengambil value dari elemen HTML dengan id nama_bibit
                let dete = document.getElementById('nama_bibit').value;
                //ubah ke format json
                let dataBrg = JSON.parse(dete);
                let deteBrg = [...dataBrg];
                let subTotal = 0;
                Array.from(deteBrg, item => parseInt(subTotal += parseInt(item.harga * item.qty)))

                $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Nama: ' + nama + ' %0ANo. Whatsapp: ' + nowhatsapp + '%0AAlamat: ' + alamat + '%0A======================' + Array.from(deteBrg, item => `%0ANama Barang: ${item.nama_barang} %0AHarga: Rp. ${parseInt(item.harga).toLocaleString("id-ID")} %0Aqty: ${item.qty} %0ASubTotal: Rp. ${parseInt(item.harga*item.qty).toLocaleString("id-ID")} %0A`) + `%0ATotal: Rp. ${subTotal.toLocaleString("id-ID")}` + '%0A%0Avia ' + via_url);

                var w = 960,
                    h = 540,
                    left = Number((screen.width / 2) - (w / 2)),
                    tops = Number((screen.height / 2) - (h / 2)),
                    popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
                popupWindow.focus();
                return false;
            };
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