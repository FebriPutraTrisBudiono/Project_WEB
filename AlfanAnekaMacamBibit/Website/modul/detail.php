<?php 
	$idbr = $_GET['idbrg'];
	$sql = $koneksi->query("SELECT*FROM tbbarang WHERE idbarang='$idbr'");	
	$review = $sql->fetch_array();
 ?>
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="product-image"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="produk/<?=$review['gambar']?>" title="<?=$review['nama']?>" alt="<?=$review['nama']?>">
				           	<img src="produk/<?=$review['gambar']?>" alt="<?=$review['nama']?>" title="<?=$review['nama']?>" />
				        </a>
				   </div>
					
				</div>
				</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3><?=$review['nama']?></h3>					
					<h5>Rp. <?=number_format($review['harga'])?></h5>
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
							<li>Color:
								<select>
								<option>Silver</option>
								<option>Black</option>
								<option>Dark Black</option>
								<option>Red</option>
							</select></li>
							<li>Size:
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select>
							</li>
							<li>Quality:
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</li>
						</ul>
						<div class="btn_form">
							<form>
								<input type="submit" value="add to cart" title="" />
							</form>
						</div>
						<span class="span_right"><a href="#">login to save in wishlist </a></span>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="asset/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="asset/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="asset/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="asset/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
				   	<section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">Deskripsi Barang</label>
			
		            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
			        <label for="tab-2" class="tab-label-2">Estimasi Pengiriman</label>
			
		            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
			        <label for="tab-3" class="tab-label-3">Komentar Barang</label>
	          
				    <div class="clear-shadow"></div>
					
			        <div class="content">
				        <div class="content-1">
				        	<?=$review['desk']?>
							<div class="clear"></div>
						</div>
				        <div class="content-2">
							<p class="para"><span>WELCOME </span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
							<ul class="qua_nav">
								<li>Multimedia Systems</li>
								<li>Digital media adapters</li>
								<li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
							</ul>
						</div>
				        <div class="content-3">
				        	<p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
							<ul>
								<li>Research</li>
								<li>Design and Development</li>
								<li>Porting and Optimization</li>
								<li>System integration</li>
								<li>Verification, Validation and Testing</li>
								<li>Maintenance and Support</li>
							</ul>
							<div class="clear"></div>
						</div>
			        </div>
			        </section>
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>Best Sellers</h4>
						<div class="single-nav">
			                <ul>
			                	<?php 
			                		$sqlkat = $koneksi->query("SELECT*FROM tbkategori");
			                		while($rev = $sqlkat->fetch_array()){
			                	 ?>
			                   <li><a href="?page=<?=$rev[kdkat]?>"><?=$rev['kategori']?></a></li>			    
			               <?php } ?>                
			                </ul>
			              </div>
						  <div class="banner-wrap bottom_banner color_link">
								<a href="#" class="main_link">
								<figure><img src="asset/images/delivery.png" alt=""></figure>
								<h5><span>Free Shipping</span><br> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a>
						 </div>
						 <div class="brands">
							 <h1>Brands</h1>
					  		 <div class="field">
				                 <select class="select1">
				                   <option>Please Select</option>
										<option>Lorem ipsum dolor sit amet</option>
										<option>Lorem ipsum dolor sit amet</option>
										<option>Lorem ipsum dolor sit amet</option>
				                  </select>
				            </div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
