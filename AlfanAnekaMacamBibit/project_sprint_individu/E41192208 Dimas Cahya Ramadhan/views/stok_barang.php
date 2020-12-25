<?php
include "models/m_barang.php";
$brg = new Barang($connection);

if(@$_GET['act'] == '') {
?>
<div class="row">
          <div class="col-lg-12">
            <h1>Stok Barang <small>Data Barang</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-12">        		
        		<div class="table-responsive">
        			<table class="table table-bordered table-hover table-striped">
        				<tr>
        					<th>NO.</th>
        					<th>Gambar</th>
        					<th>Nama Bibit</th>
        					<th>Umur Bibit</th>
        					<th>Stok</th>
        					<th>Harga</th>
        					<th>Opsi</th>
        				</tr>
                        <?php
                        $no = 1;
                        $tampil = $brg->tampil();
                        while($data = $tampil->fetch_object()) {
                        ?>
        				<tr>
        					<td align="center"><?php echo $no++. "."; ?></td>
        					<td align="center">
                                <img src="assets/img/barang/<?php echo $data->gambar_brg; ?>" width="100px">
                            </td>
        					<td><?php echo $data->nama_brg; ?></td>
        					<td><?php echo $data->umur_brg; ?></td>
        					<td><?php echo $data->stok_brg; ?></td>
        					<td><?php echo $data->harga_brg; ?></td>
        					<td align="center">
                            <a id="edit_brg" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->id_brg; ?>" data-gambar="<?php echo $data->gambar_brg; ?>" data-nama="<?php echo $data->nama_brg; ?>" data-umur="<?php echo $data->umur_brg; ?>" data-stok="<?php echo $data->stok_brg; ?>" data-harga="<?php echo $data->harga_brg; ?>"> 
        						<button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button></a>
                                <a href="?page=barang&act=del&id=<?php echo $data->id_brg; ?>" onclick="return confirm('Yakin Akan Menghapus Data?')">
        						<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i> Hapus</button>
                            </a>
        					</td>
        				</tr>
                        <?php
                        } ?>
        			</table>
        		</div>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>

                <div id="tambah" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Tambah Data Barang</h4>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nama_brg">Nama Bibit</label>
                                        <input type="text" name="nama_brg" class="form-control" id="nama_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="umur_brg">Umur Bibit</label>
                                        <input type="text" name="umur_brg" class="form-control" id="umur_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="stok_brg">Stok Bibit</label>
                                        <input type="number" name="stok_brg" class="form-control" id="stok_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="harga_brg">Harga Bibit</label>
                                        <input type="number" name="harga_brg" class="form-control" id="harga_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="gambar_brg">Gambar Bibit</label>
                                        <input type="file" name="gambar_brg" class="form-control" id="gambar_brg" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                                </div>
                            </form>
                            <?php
                            if(@$_POST['tambah']) {
                                $nama_brg = $connection->conn->real_escape_string($_POST['nama_brg']);
                                $umur_brg = $connection->conn->real_escape_string($_POST['umur_brg']);
                                $stok_brg = $connection->conn->real_escape_string($_POST['stok_brg']);
                                $harga_brg = $connection->conn->real_escape_string($_POST['harga_brg']);
                                
                                $extensi = explode(".", $_FILES['gambar_brg']['name']);
                                $gambar_brg = "brg-".round(microtime(true)).".".end($extensi);
                                $sumber = $_FILES['gambar_brg']['tmp_name'];
                                $upload = move_uploaded_file($sumber, "assets/img/barang/".$gambar_brg);
                                if($upload) {
                                    $brg->tambah($gambar_brg, $nama_brg, $umur_brg, $stok_brg, $harga_brg);
                                    header("location: ?page=barang");
                                } else {
                                    echo "<script>alert('Upload Gambar Gagal!!')</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div id="edit" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Data Barang</h4>
                            </div>
                            <form id="form" enctype="multipart/form-data">
                                <div class="modal-body" id="modal-edit">
                                    <div class="form-group">
                                        <label class="control-label" for="nama_brg">Nama Bibit</label>
                                        <input type="hidden" name="id_brg" id="id_brg">
                                        <input type="text" name="nama_brg" class="form-control" id="nama_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="umur_brg">Umur Bibit</label>
                                        <input type="text" name="umur_brg" class="form-control" id="umur_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="stok_brg">Stok Bibit</label>
                                        <input type="number" name="stok_brg" class="form-control" id="stok_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="harga_brg">Harga Bibit</label>
                                        <input type="number" name="harga_brg" class="form-control" id="harga_brg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="gambar_brg">Gambar Bibit</label>
                                        <div style="padding-bottom:5px">
                                            <img src="" width="80px" id="pict">
                                        </div>
                                        <input type="file" name="gambar_brg" class="form-control" id="gambar_brg">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script src="assets/js/jquery-1.10.2.js"></script>
                <script type="text/javascript">
                    $(document).on("click", "#edit_brg", function() {
                        var idbrg = $(this).data('id');
                        var gambarbrg = $(this).data('gambar');
                        var namabrg = $(this).data('nama');
                        var umurbrg = $(this).data('umur');
                        var stokbrg = $(this).data('stok');
                        var hargabrg = $(this).data('harga');
                        $("#modal-edit #id_brg").val(idbrg);
                        $("#modal-edit #pict").attr("src", "assets/img/barang/"+gambarbrg);
                        $("#modal-edit #nama_brg").val(namabrg);
                        $("#modal-edit #umur_brg").val(umurbrg);
                        $("#modal-edit #stok_brg").val(stokbrg);
                        $("#modal-edit #harga_brg").val(hargabrg);
                    })

                    $(document).ready(function(e){
                        $("#form").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                                url : 'models/proses_edit_barang.php',
                                type : 'POST',
                                data : new FormData(this),
                                contentType : false,
                                cache : false,
                                processData : false,
                                success : function(msg) {
                                    $('.table').html(msg);
                                }
                            });
                        }));
                    })
                </script>
        	</div>
        </div>
<?php
} else if(@$_GET['act'] == 'del') {

    $brg->hapus($_GET['id']);
    header("location: ?page=barang");
}

?>