<?php
	$id = isset($_GET['id']) ? $_GET['id'] : null;
    $hasil_25 = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori WHERE fitur='publishing' AND id_page='$id'");
    $no=1;
    while($baris_25=mysqli_fetch_array($hasil_25)){
?>

<!-- START fitur publishing -->
			 <div id="content" class="content">
                <div class="row">
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
					<!-- START form input publishing -->
						<div class="col-md-9">
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Edit Data Berita</h4>
                                <!-- begin panel -->
								<!-- Input Type Hidden -->
								<input type="hidden" name="id_page" value="<?php echo $baris_25['id_page'] ?>">
								<input type="hidden" name="date_time" value="<?php echo $baris_25['date_time'] ?>">
								<input type="hidden" name="id_file" value="<?php echo $baris_25['id_file']?>">
								<!-- End -->
								<div class="form-group m-b-10">
									<label class="col-md-3 control-label">Judul Text</label>
									<div class="col-md-12">
										<input type="text" class="form-control" name="judul_page" value="<?php echo $baris_25['judul_page'] ?>" />
									</div>
								</div>
								<div class="form-group m-b-10">
									<label class="col-md-3 control-label">Isi Text</label>
									<div class="col-md-12">
										<textarea name="isi_page"><?php echo $baris_25['isi_page'] ?></textarea>
									</div>
								</div>
								
							<!-- end panel -->
                            </div>
                        </div>
					
                        <div class="col-md-3">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <!-- KATEGORI BERITA -->
                                <div class="form-group">
                                    <label class="control-label">Pilih Kategori</label>
                                        <select id="formInput1226" class="form-control" name="sub_id_kategori_2">
										<option value="<?php echo $baris_25['sub_id_kategori_2'] ?>"><?php echo $baris_25['nama_kategori'] ?></option>
                                        <?php
                                            $user = id_user($username_user);
                                            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
                                            while($hasil=mysqli_fetch_array($sql)){
                                            $id=$hasil['id_kategori'];
                                            $text=$hasil['isi_text'];
                                            $a=1;
											  $nomor=$a.$user;
											  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
											  $result= mysqli_fetch_array($hasil);
											  $status=$result['status'];
											  $id_kategori=$result['id_kategori'];
											  $isi_text=$result['isi_text'];
                                        ?>

                                        <?php
                                        if($username_user && $isi_text && $id_kategori=='4' && $status=='1')//Berita
                                        echo '
                                            <option value="4">Berita</option>' ;?>
											
										<?php
                                        if($username_user && $isi_text && $id_kategori=='104' && $status=='1')//Berita Headline
                                        echo '
                                            <option value="104">Berita Headline</option>' ;?>

                                        <?php
                                        if($username_user && $isi_text && $id_kategori=='5' && $status=='1')//Artikel
                                        echo '
                                            <option value="5">Artikel</option>' ;?>

                                        <?php
                                        if($username_user && $isi_text && $id_kategori=='6' && $status=='1')//Artikel
                                        echo '
                                            <option value="6">Page</option>' ; } ?>


                                        </select>
                                </div>
								
								<div class="form-group">
                                    <label class="control-label">Pilih Sub Kategori</label>
                                        <select class="form-control" name="id_kategori">
										<option value="<?php echo $baris_25['id_kategori'] ?>"><?php echo $baris_25['sub_kategori'] ?></option>
										<?php
											$batas = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$user'");
											$hasil= mysqli_fetch_array($batas);
											$kategori=$hasil['id_kategori'];
											$id_user=$hasil['id_user'];
										?>
										
										<?php 
											if($kategori=='92'){
										?>

										<?php echo sub_kategori($id_user); ?>
										
										<?php } ?>
										
										<?php 
											if($kategori=='104'){
										?>

										<?php echo sub_kategori_turdesa(); ?>
										
										<?php } ?>
										
                                        </select>
                                </div>
								
                                <!-- END -->
								<?php if($baris_25['nama_file']){?>
                                <div class="form-group">
                                    <label class="control-label">Gambar</label><br>
                                    <?php echo "<img src=".$baris_25['nama_file']." width='200px' height='200px' style='margin-left: 10px;' >"; ?><br><br>
										<!--<code class="alert alert-danger">*Harap menginput kembali gambar</code><br><br>-->
										<code class="alert alert-danger" style="margin-left: 10px;">*Format Gambar harus .JPG</code><br><br>
										<input type="file" name="nama_file" class="form-control">
                                </div>
								<?php } ?>
								
                                <input type="submit" name="edit_publishing" class="btn width-100 btn-primary" value="Simpan">
                            </div>
                            <!-- end panel -->
                        </div>
					<!-- END form input publishing -->
                    </form>
                </div>
<?php } ?>