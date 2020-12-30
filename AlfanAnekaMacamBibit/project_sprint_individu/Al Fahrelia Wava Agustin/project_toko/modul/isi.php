<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>featured products</h2>
	</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		<?php 
					$sqlk = $con->query("SELECT*FROM tbkategori");
					while ($vk = $sqlk->fetch_array()) {
						$idk = $vk['kdkat'];
						?>
		<div class="grids_of_3">
			<?php 
					$sqlm = $con->query("SELECT*FROM tbbarang WHERE kdkat='$idk'");
					while ($vm = $sqlm->fetch_array()) {
						?>
			<div class="grid1_of_3">
				<a href="?page=detail&idbrg=<?=$vm['idbarang']?>">
					<img src="produk/<?=$vm['gambar']?>" alt=""/>
					<h3><?=$vm['nama']?></h3>
					<div class="price">
						<h4>Rp. <?=number_format($vm['harga'])?><span>Beli</span></h4>
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