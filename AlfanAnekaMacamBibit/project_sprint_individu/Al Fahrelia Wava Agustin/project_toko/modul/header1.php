<div id="da-slider" class="da-slider">
				<?php 
					$sqlm = $con->query("SELECT*FROM tbbarang");
					while ($vm = $sqlm->fetch_array()) {
						?>
				<div class="da-slide">
					<h2><?=$vm['nama']?></h2>
					<p><?=$vm['desk']?></p>
					<a href="details.html" class="da-link">shop now</a>
					<div class="da-img"><img src="produk/<?=$vm['gambar']?>" alt="image01" /></div>
				</div>
				<?php } ?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>