<?php
	$id = isset($_GET['id']) ? $_GET['id'] : null;
    $detail = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN user INNER JOIN file INNER JOIN kategori ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE fitur='publishing' AND id_page='$id'");
    $no=1;
    while($hasil_detail=mysqli_fetch_array($detail)){
?>

<!-- START fitur publishing -->
			 <div id="content" class="content">
                <div class="row">
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
					<!-- START form input publishing -->
						<div class="col-md-9">
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Detail Data Berita</h4>
                                <!-- begin panel -->
								<div class="form-group m-b-10">
									<div class="col-md-12">
										<h1><font color="#0083b9"><?php echo $hasil_detail['judul_page']; ?></font></h1><hr>
									</div>
								</div>
								<div class="form-group m-b-10">
									<div class="col-md-8">
										<input type="text" class="form-control" value="<?php echo $base_url ?>detail.php?id=<?php echo $hasil_detail['id_page']; ?>/<?php echo str_replace(' ', '-', $hasil_detail['judul_page']) ?>">
									</div>
									<div class="col-md-2">
										<a href="<?php echo $base_url ?>detail.php?id=<?php echo $hasil_detail['id_page']; ?>/<?php echo str_replace(' ', '-', $hasil_detail['judul_page']) ?>" target="_blank" class="btn btn-primary">Kunjungi</a>
									</div>
									<div class="col-md-2">
										<a href="#" onclick="window.open('http://www.facebook.com/sharer/sharer.php?u=<?php echo $base_url ?>detail.php?id=<?php echo $hasil_detail['id_page']?>/<?php echo str_replace(' ', '-', $hasil_detail['judul_page']) ?>', 'Share This', 'menubar=no,toolbar=no,resizable=no,scrollbars=no, width=600,height=455');" class="btn btn-primary">Share <i class="fa fa-facebook"></i></a>
									</div>
								</div><hr>
								<div class="form-group m-b-10">
									<div class="col-md-12">
										<center><img src="<?php echo $hasil_detail['nama_file']; ?>" style="width:600px; height:400px;"></center><br>
										<?php echo $hasil_detail['isi_page']; ?>
									</div>
								</div>
								
							<!-- end panel -->
                            </div>
                        </div>
					
                        <div class="col-md-3 navbar-fixed-top" style="margin-left: 1060px; width: 280px; margin-top: 83px;">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <!-- KATEGORI BERITA -->
								<div class="form-group m-b-10">
									<label class="control-label">Tanggal Posting</label>
									<div class="col-md-12">
										<font color="#0083b9" size="4"><i class="fa fa-calendar"></i> <?php echo list_tanggal($hasil_detail['date_time']); ?></font>
									</div>
								</div>
								
								<div class="form-group m-b-10">
									<label class="control-label">Penulis</label>
									<div class="col-md-12">
										<font color="#0083b9" size="4"><i class="fa fa-user"></i> <?php echo $hasil_detail['nama_user']; ?></font>
									</div>
								</div>
								
								<div class="form-group m-b-10">
									<label class="control-label">Kategori</label>
									<div class="col-md-12">
									<?php 
									if($hasil_detail['sub_id_kategori_2']=='104'){
									$wow = $hasil_detail['sub_id_kategori_2'];
									$sql100 = mysqli_query($id_mysqli,"SELECT * From kategori where id_kategori='$wow'");
									$sql101 = mysqli_fetch_array($sql100);
									?>
										<font color="#0083b9" size="4"><i class="fa fa-tags"></i> <?php echo $sql101['nama_kategori']; ?></font>
									<?php } else { ?>
										<font color="#0083b9" size="4"><i class="fa fa-tags"></i> <?php echo $hasil_detail['nama_kategori']; ?></font>
									<?php } ?>
									</div>
								</div>
								
								<div class="form-group m-b-10">
									<label class="control-label">Kategori Berita</label>
									<div class="col-md-12">
									<?php if(empty($hasil_detail['sub_kategori'])) { ?>
										<font color="#0083b9" size="4"><i class="fa fa-list"></i> - </font>
									<?php } else { ?>
										<font color="#0083b9" size="4"><i class="fa fa-list"></i> <?php echo $hasil_detail['sub_kategori']; ?></font>
									<?php } ?>
									</div>
								</div>
							
                            </div>
                            <!-- end panel -->
                        </div>
					<!-- END form input publishing -->
                    </form>
                </div>
<?php } ?>