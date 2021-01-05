<?php 
	$page = $_GET['page'];
	$sqlbrg = $con->query("SELECT*FROM tbkategori WHERE kdkat='$page'");
	$vbrg = $sqlbrg->fetch_array();
	$idkt = $vbrg['kdkategori'];
	 ?>

<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top"><?=$vbrg['kategori']?></h2>
		<!-- start grids_of_3 -->
			<?php 
					$sqlk = $con->query("SELECT*FROM tbkategori WHERE kdkat='$idkt'");
					while ($vk = $sqlk->fetch_array()) {
						$idk = $vk['kdkat'];
						?>
		<div class="grids_of_3">
			<?php 
					$sqlm = $con->query("SELECT*FROM tbbarang WHERE kdkat='$idk'");
					while ($vm = $sqlm->fetch_array()) {
						?>
			<div class="grid1_of_3">
				<a href="details.html">
					<img src="produk/<?=$vm['gambar']?>" alt=""/>
					<h3><?=$vm['nama']?></h3>
					<div class="price">
						<h4>Rp. <?=number_format($vm['harga'])?><span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
				<?php
		 	}
			?>	
			<div class="clear"></div>
		</div>
		<?php
		 }
		?>	
		<!-- end grids_of_3 -->
	</div>
</div>
</div>