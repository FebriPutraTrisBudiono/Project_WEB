<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
		<?php 
					$sqlm = $koneksi->query("SELECT*FROM tbbarang");
					while ($vm = $sqlm->fetch_array()) {
						?>					
		<div class="item" onclick="location.href='details.html';">
			<div class="cau_left">
				<img class="lazyOwl" data-src="produk/<?=$vm['gambar']?>" alt="Lazy Owl Image">
			</div>
			<div class="cau_left">
				<h4><a href="details.html"><?=$vm['nama']?></a></h4>
				<a href="details.html" class="btn">shop</a>
			</div>
		</div>
		<?php
		 }
		?>	
			
	</div>
	<!----//End-img-cursual---->
</div>