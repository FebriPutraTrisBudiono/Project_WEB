<?php 
	include"koneksi.php";	
	define('url_base','http://localhost/project_toko/');
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Aditii Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="asset/css/productviewgallery.css" media="all" />
<script type="text/javascript" src="asset/js/jquery.min.js"></script>
<!-- start slider -->		
	<script type="text/javascript" src="asset/js/cloud-zoom.1.0.3.min.js"></script>
	<!--<script type="text/javascript" src="asset/js/productviewgallery.js"></script>-->
	<link href="asset/css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="asset/js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="asset/js/jquery.cslider.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="asset/css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="asset/js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src="asset/js/move-top.js"></script>
		<script type="text/javascript" src="asset/js/easing.js"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>
<body>
<!-- start header -->
<?php 
	include"modul/menu-atas.php";
 
if(!isset($_GET['page'])){
	include"modul/header1.php";
 	include"modul/header2.php";
	}
 ?>		
<!----start-cursual---->
<?php 
	if(isset($_GET['page'])){
		$sqlmenu = $koneksi->query("SELECT*FROM tbkategori");
		$vmenu = $sqlmenu->fetch_array();
		if($vmenu['kdkat']){
			include"modul/produk.php";
		}
		if($_GET['page']=='detail'){
			include"modul/detail.php";
		}
	}else{
	include"modul/isi.php";
	}
 ?>
<!-- start main1 -->	
<!-- start footer -->
<?php 
	include"modul/footter.php";
 ?>
<!-- start footer -->
</body>
</html>
