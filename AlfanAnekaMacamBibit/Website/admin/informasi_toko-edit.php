<?php 
    session_start();
    include '../koneksi.php';

    if(isset($_POST['edit'])){
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

            
            $ekstensi_diperbolehkan = array('png','jpg');
            //logo atas
            $logo_atas = $_FILES['logo_atas']['name'];
            $x = explode('.', $logo_atas);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['logo_atas']['size'];
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
            $ukuran = $_FILES['logo_bawah']['size'];
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
            
            //banner1
            $banner1 = $_FILES['banner1']['name'];
            $a = explode('.', $banner1);
            $ekstensi3 = strtolower(end($a));
            $ukuran = $_FILES['banner1']['size'];
            $file_tmp = $_FILES['banner1']['tmp_name'];

            if(in_array($ekstensi3, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){          
                    move_uploaded_file($file_tmp, '../banner/'.$banner1);
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }

            //banner2
            $banner2 = $_FILES['banner2']['name'];
            $b = explode('.', $banner2);
            $ekstensi4 = strtolower(end($b));
            $ukuran = $_FILES['banner2']['size'];
            $file_tmp = $_FILES['banner2']['tmp_name'];

            if(in_array($ekstensi4, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){          
                    move_uploaded_file($file_tmp, '../banner/'.$banner2);
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }            

            //banner3
            $banner3 = $_FILES['banner3']['name'];
            $c = explode('.', $banner3);
            $ekstensi5 = strtolower(end($c));
            $ukuran = $_FILES['banner3']['size'];
            $file_tmp = $_FILES['banner3']['tmp_name'];

            if(in_array($ekstensi5, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){          
                    move_uploaded_file($file_tmp, '../banner/'.$banner3);
                }else{
                    echo 'UKURAN FILE TERLALU BESAR';
                }
            }else{
                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            }
            $query = mysqli_query($koneksi, "UPDATE tentang_kami set about_us='$about_us', business_time='$business_time', nama_facebook='$nama_facebook', whatsapp='$whatsapp', logo_atas='$logo_atas', logo_bawah='$logo_bawah', highlight1='$highlight1', highlight2='$highlight2', highlight3='$highlight3', highlight4='$highlight4', highlight5='$highlight5', highlight6='$highlight6', highlight7='$highlight7', banner1='$banner1', banner2='$banner2', banner3='$banner3'");
            
            header("location:informasi_toko.php");
        }
    ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Produk - Tokopekita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="index.php"><span>Home</span></a></li>
                            <li><a href="../halaman_admin.php"><span>Kembali ke Toko</span></a></li>
                            <li>
                                <a href="manageorder.php"><i class="ti-dashboard"></i><span>Kelola Pesanan</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout"></i><span>Kelola Toko
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="produk.php">Produk</a></li>
                                    <li><a href="stok.php">Stok</a></li>
                                    <li><a href="informasi_toko.php">Informasi Toko</a></li>
                                </ul>
                            </li>
                            <li><a href="customer.php"><span>Kelola Pelanggan</span></a></li>
                            <li>
                                <a href="logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
                                <script type='text/javascript'>
                        <!--
                        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                        var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth();
                        var thisDay = date.getDay(),
                            thisDay = myDays[thisDay];
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);        
                        //-->
                        </script></b></div></h3>

                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
            <!-- page title area end -->
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Informasi Toko</h2>
                                    <a href="informasi_toko.php" style="margin-bottom:20px" class="btn btn-info col-md-2">Kembali</a>
                                </div>
                                <?php

                                $sql_about_us = mysqli_query($koneksi, "SELECT * FROM tentang_kami");
                                $data = mysqli_fetch_array($sql_about_us);
                                ?>
                                    <br>
                                    <form method="post" enctype="multipart/form-data">
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">About Us</label>
                                        <textarea name="about_us" class="form-control"><?php echo $data['about_us']; ?></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nama Facebook</label>
                                        <input type="text" name="nama_facebook" class="form-control" value="<?php echo $data['nama_facebook']; ?>" placeholder="Jenis Bibit" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Nomor Whatsapp</label>
                                        <input type="text" name="whatsapp" class="form-control" value="<?php echo $data['whatsapp']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Jam Kerja</label>
                                        <input type="text" name="business_time" class="form-control" value="<?php echo $data['business_time']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                          <label class="name">Logo Atas</label><br>
                                        <input class="nama" type="file" name="logo_atas" required>
                                      </div>
                                      <div class="mb-3">
                                          <label class="name">Logo Bawah</label><br>
                                        <input class="nama" type="file" name="logo_bawah" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 1</label>
                                        <input type="text" name="highlight1" class="form-control" value="<?php echo $data['highlight1']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 2</label>
                                        <input type="text" name="highlight2" class="form-control" value="<?php echo $data['highlight2']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 3</label>
                                        <input type="text" name="highlight3" class="form-control" value="<?php echo $data['highlight3']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 4</label>
                                        <input type="text" name="highlight4" class="form-control" value="<?php echo $data['highlight4']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 5</label>
                                        <input type="text" name="highlight5" class="form-control" value="<?php echo $data['highlight5']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 6</label>
                                        <input type="text" name="highlight6" class="form-control" value="<?php echo $data['highlight6']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Highlight 7</label>
                                        <input type="text" name="highlight7" class="form-control" value="<?php echo $data['highlight7']; ?>" placeholder="Umur" required>
                                      </div>
                                      <div class="mb-3">
                                          <label class="name">Banner1</label><br>
                                        <input class="nama" type="file" name="banner1" required>
                                      </div>
                                      <div class="mb-3">
                                          <label class="name">Banner2</label><br>
                                        <input class="nama" type="file" name="banner2" required>
                                      </div>
                                      <div class="mb-3">
                                          <label class="name">Banner3</label><br>
                                        <input class="nama" type="file" name="banner3" required>
                                      </div>
                                      <br>
                                      <button type="submit" name="edit" class="btn btn-primary" style="background-color: #008000;">Ubah</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- modal input -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Produk</h4>
                        </div>
                        
                        <div class="modal-body">
                        <form action="produk.php" method="post" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input name="namabarang" type="text" class="form-control" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Barang</label>
                                    <input name="jenis_barang" type="text" class="form-control" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>umur</label>
                                    <input name="umur" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input name="harga" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input name="deskripsi" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input name="uploadgambar" type="file" class="form-control">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <input name="addproduct" type="submit" class="btn btn-primary" value="Tambah">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    <script>
    $(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
    } );
    </script>
    
    <script>
        function confirmDelete(link) {
            if (confirm("Data ini akan dihapus ?")) {
                doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
            }
            return false;
        }
    </script>

    <!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
        <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    
</body>
</html>
