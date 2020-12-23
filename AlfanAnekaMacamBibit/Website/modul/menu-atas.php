<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="asset/images/logo.png" alt=""/> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href="#"><i>$300</i></a>
				<ul class="sub-icon1 list">
					<li><h3>shopping cart empty</h3><a href=""></a></li>
					<li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li>
				</ul>
			</li>
		</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="<?=url_base?>">Home</a></li> |
				<?php 
					$sqlm = $koneksi->query("SELECT*FROM tbkategori");
					while ($vm = $sqlm->fetch_array()) {
						echo"<li><a href='?page=$vm[kdkat]'>$vm[kategori]</a></li> |";
					}
				 ?>
					

				<li><a href="contact.html">Contact us</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="asset/js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>