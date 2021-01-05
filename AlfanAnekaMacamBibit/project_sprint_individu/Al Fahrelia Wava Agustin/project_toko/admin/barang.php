<div class="container">
	<div class="row">
	  <div class="col-sm-4">
	  	<?php 
	  		$temp = '../produk/';
	  		if($_GET['edit']=='edit-barang'){
	  			$sqledit = $con->query("SELECT*FROM tbbarang WHERE idbarang='$_GET[id]'");
	  			$rview=$sqledit->fetch_array();
	  			$kd = $rview['kdkat'];
	  			?>
	  	<div class="card">
		  <div class="card-header bg-success text-white">Edit Data Barang</div>
			  <div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
				<input type="hidden" class="form-control form-control-sm" name="idbar" value="<?=$rview[idbarang]?>">
				  <div class="form-group">
					<label for="pwd">Kategori Barang</label>
					<select name="kd" class="form-control form-control-sm">
						<?php 
							$sqlkat =  $con->query("SELECT*FROM tbkategori");
							while ( $vkat = $sqlkat->fetch_array()) {
								?>
								<option value='<?=$vkat[kdkat]?>'<?php if($vkat[kdkat]==$kd){ echo 'selected';} ?> ><?=$vkat[kategori]?></option>
								<?php
							}
						 ?>
					</select>
				  </div>
				  <div class="form-group">
					<label for="pwd">Nama Barang</label>
					<input type="text" class="form-control form-control-sm" name="nm" value="<?=$rview[nama]?>">
				  </div>
				  <div class="form-group">
					<label for="pwd">Harga Barang</label>
					<input type="text" class="form-control form-control-sm" name="hrg" value="<?=$rview[harga]?>">
				  </div>
				  <div class="form-group">
					<label for="pwd">Deskripsi Barang</label>
					<textarea name="dsk" class="form-control form-control-sm"><?=$rview[desk]?></textarea>
				  </div>
				  <div class="form-group">
					<img src="../produk/<?=$rview['gambar']?>" width="80">
				  </div>
				  <div class="form-group">
					<label for="pwd">Gambar Barang</label>
					<input type="file" name="gbr">
				  </div>				  
				  <button type="submit" class="btn btn-info" name="btnedit">Update</button>
				</form> 		  
			  </div>
		  <div class="card-footer bg-success text-white"></div>
		</div> 
	  <?php
	  	if(isset($_POST['btnedit'])){
	  		if(empty($_FILES['gbr']['name'])){
	  		$sqlpro = $con->query("UPDATE tbbarang SET kdkat='$_POST[kd]',nama='$_POST[nm]',harga='$_POST[hrg]',desk='$_POST[dsk]' WHERE idbarang='$_POST[idbar]'");
	  		}elseif (!empty($_FILES['gbr']['name'])) {
	  			$gbr = $_FILES['gbr']['name'];
	  			move_uploaded_file($_FILES['gbr']['tmp_name'],$temp.$gbr);
	  			$sqlpro = $con->query("UPDATE tbbarang SET kdkat='$_POST[kd]',nama='$_POST[nm]',harga='$_POST[hrg]',desk='$_POST[dsk]',gambar='$gbr' WHERE idbarang='$_POST[idbar]'");
	  		}
	  		if($sqlpro){
	  				echo"<script>alert('Data Berhasil Di rubah');document.location.href='?page=barang';</script>";
	  		}else{
	  			echo"<script>alert('Gagal Di rubah');document.location.href='?page=barang';</script>";
	  		}
	  	}
	  		}else{
	  	 ?>
	    <div class="card">
		  <div class="card-header bg-success text-white">Input Data Barang</div>
			  <div class="card-body">
				<form action="" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="pwd">Kategori Barang</label>
					<select name="kd" class="form-control form-control-sm">
						<?php 
							$sqlkat =  $con->query("SELECT*FROM tbkategori");
							while ( $vkat = $sqlkat->fetch_array()) {
								echo"<option value='$vkat[kdkat]'>$vkat[kategori]</option>";
							}
						 ?>
					</select>
				  </div>
				  <div class="form-group">
					<label for="pwd">Nama Barang</label>
					<input type="text" class="form-control form-control-sm" name="nm">
				  </div>
				  <div class="form-group">
					<label for="pwd">Harga Barang</label>
					<input type="text" class="form-control form-control-sm" name="hrg">
				  </div>
				  <div class="form-group">
					<label for="pwd">Deskripsi Barang</label>
					<textarea name="dsk" class="form-control form-control-sm"></textarea>
				  </div>
				  <div class="form-group">
					<label for="pwd">Gambar Barang</label>
					<input type="file" name="gbr">
				  </div>				  
				  <button type="submit" class="btn btn-info" name="btn">Insert</button>
				</form> 			  
			  </div>
		  <div class="card-footer bg-success text-white"></div>
		</div> 
	<?php } ?>
	</div>
	<?php 
		if(isset($_POST['btn'])){			
			$a = $_POST['kd'];
			$b = $_POST['nm'];
			$c = $_POST['hrg'];
			$d = $_POST['dsk'];
			$img = $_FILES['gbr']['name']; 
			move_uploaded_file($_FILES['gbr']['tmp_name'],$temp.$img);
			$sql=$con->query("INSERT INTO tbbarang VALUES('','$a','$b','$c','$d','$img')");
			if($sql){
				echo"<script>alert('Data Berhasil masuk.');</script>";
			}else{
				echo"<script>alert('Data Gagal masuk.');</script>";
			}
		}
	 ?>		  
	<div class="col-sm-8">
		<div class="card">
		  <div class="card-header bg-success text-white">Output Data Barang</div>
			  <div class="card-body">
					<table class="table table-sm">
						<thead class="thead-light">
						  <tr>
							<th><small>No</small></th>
							<th><small>Nama Barang</small></th>
							<th><small>Harga Barang</small></th>
							<th><small>Deskripsi Barang</small></th>
							<th><small>Gambar Barang</small></th>
							<th><small>Aksi</small></th>
						  </tr>
						</thead>
						<tbody>
						<?php 
							$no = 0;
							$sqli = $con->query("SELECT*FROM tbbarang");
							while ($resl=$sqli->fetch_array()) {
								?>
							<tr>
							<td><small><?=$no=$no+1?></small></td>
							<td><small><?=$resl['nama']?></small></td>
							<td><small>Rp. <?=number_format($resl['harga'])?></small></td>
							<td><small><?=substr($resl['desk'],0,30)?>...</small></td>
							<td><small><img src="../produk/<?=$resl['gambar']?>" width="100"></small></td>
							<td><small><a href="?page=barang&edit=edit-barang&id=<?=$resl['idbarang']?>" class="btn btn-success btn-sm">Ubah</a> | <a href="?page=barang&hapus=hapus-barang&id=<?=$resl['idbarang']?>"  class="btn btn-danger btn-sm">Hapus</a></small></td>
						  	</tr>
							<?php	
							}
							if($_GET['hapus']=='hapus-barang'){
							$sqlhapus = $con->query("DELETE FROM tbbarang WHERE idbarang='$_GET[id]'");
							if($sqlhapus){
	  							echo"<script>document.location.href='?page=barang';</script>";
					  		}else{
					  			echo"document.location.href='?page=barang';</script>";
					  		}
					  		}
						 ?>
						  
						 </tbody>
					  </table>	  
			  </div>
		  <div class="card-footer bg-success text-white"></div>
		</div> 	  	  
	</div>
</div>  
</div>