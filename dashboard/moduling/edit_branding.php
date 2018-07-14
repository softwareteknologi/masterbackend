<?php
		$id = isset($_GET['id']) ? $_GET['id'] : null;
            $hasil1 = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori WHERE fitur='branding' AND id_page='$id'"); //menampilkan data dari beberapa tabel dimana fiturnya branding
            $no=1;
            while($baris1=mysqli_fetch_array($hasil1)){
			$id_kategori=$baris1['id_kategori'];
        ?>
        
<div id="content" class="content">
    <div class="row">
	<div class="col-md-12">
    <div class="panel p-20">
		<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            
			<!-- begin panel -->
			<!-- Input Type Hidden -->
				<input type="hidden" name="id_page" value="<?php echo $baris1['id_page'] ?>">
				<input type="hidden" name="date_time" value="<?php echo $tgl ?>">
				<input type="hidden" name="id_file" value="<?php echo $baris1['id_file']?>">
                            <!-- End -->
				<div class="form-group m-b-10">
					<label class="col-md-3 control-label">Isi Text / Link Iklan</label>
					<div class="col-md-7">
						<textarea name="isi_page"><?php echo $baris1['isi_page']; ?></textarea>
					</div>
				</div>
				<div class="form-group m-b-10">
					<label class="col-md-3 control-label">Pilih Kategori</label>
					<div class="col-md-7">
						<select class="form-control" name="id_kategori">
							<option value="<?php echo $baris1['id_kategori'] ?>"><?php echo $baris1['nama_kategori'] ?>
							</option>
							<?php echo kategori_branding($id_kategori); ?>
						</select>
					</div>
				</div>
				<?php if($baris1['nama_file']){ ?>
				<div class="form-group m-b-10">
					<label class="col-md-3 control-label">Gambar</label>
					<div class="col-md-7">
						<?php echo "<img src=file/".$baris1['nama_file']." width='100%' height='100%'>"; ?><br>
						<!--<code class="alert alert-danger">*Harap menginput kembali gambar</code><br><br>-->
						<input type="file" name="nama_file" class="form-control">
					</div>
				</div>
				<input type="submit" name="simpan_branding" class="btn width-100 btn-primary" value="Simpan">
				<?php } ?>
				</form>
		<!-- end panel -->
		</div>
		</div>
	</div>
<?php } ?>