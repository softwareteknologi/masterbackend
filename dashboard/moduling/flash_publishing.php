<?php
            $user = id_user($username_user);
            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
            while($hasil=mysqli_fetch_array($sql)){ //BUKA query untuk hak akses
            $id=$hasil['id_kategori'];
            $text=$hasil['isi_text'];
            $a=1; // kode hak akses publishing
		  $nomor=$a.$user;
          $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
          $result= mysqli_fetch_array($hasil);
          $status=$result['status'];
          $id_kategori=$result['id_kategori'];
          $isi_text=$result['isi_text'];
        ?>
		<!-- END query untuk hak akses -->
		
			<!-- START pembagian hak akses -->
			<?php
				if($username_user && $isi_text && $id_kategori=='38' && $status=='1'){ //BUKA pembagian hak akses ?>
			<!-- END pembagian hak akses -->
			
		<!-- START fitur publishing -->
                <div class="row">
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
					<!-- START form input publishing -->
						<div class="col-md-9">
                            <div class="panel p-20" style="
    height: 510px;
">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Data Publishing</h4>
                                <div class="form-group m-b-12">
                                    <label class="col-md-2 control-label">Judul Text</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="judul_page" />
                                    </div>
                                </div>
								<div class="form-group m-b-12">
                                    <label class="col-md-2 control-label">Atur Tanggal</label>
                                    <div class="col-md-10">
										<input class="form-control" name="date_picker" type="date"/>
								  </div>
                                </div>
								<?php
									$batas = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$user'");
									$hasil= mysqli_fetch_array($batas);
									$kategori=$hasil['id_kategori'];
									$id_user=$hasil['id_user'];
								?>
								
								<?php 
									if($kategori=='92'){
								?>
                                <div class="form-group m-b-10">
                                    <!-- <label class="col-md-3 control-label">Isi Page</label> -->
                                    <div class="col-md-12">
                                        <textarea name="isi_page" id="" cols="30" rows="10">
										<a href="https://infogunungkidul.com/">Infogunungkidul, </a>
										</textarea>
                                    </div>
                                </div><br><br><br><br>
								<?php } elseif($kategori!=='92'){ ?>
                                <div class="form-group m-b-10">
                                    <!-- <label class="col-md-3 control-label">Isi Page</label> -->
                                    <div class="col-md-12">
                                        <textarea name="isi_page" id="" cols="30" rows="10">
										</textarea>
                                    </div>
                                </div><br><br><br><br>
								<?php } ?>
                            </div>
                        </div>
					
                        <div class="col-md-3">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <!-- KATEGORI BERITA -->
                                <div class="form-group">
                                    <label class="control-label">Pilih Kategori</label>
                                        <select id="formInput1226" class="form-control" name="sub_id_kategori_2">
										<option value="">Kategori</option>
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
                                        <select id="formInput1226" class="form-control" name="id_kategori">
										<option value="">Sub Kategori</option>
										<?php
											$batas = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$user'");
											$hasil= mysqli_fetch_array($batas);
											$kategori=$hasil['id_kategori'];
											$id_user=$hasil['id_user'];
												echo sub_kategori($id_user);
												
												?>
										
                                        </select>
										<div data-toggle="modal" data-target="#createsub" class="btn btn-primary">Tambah Sub Kategori</div>
                                </div>
								
                                <!-- END -->
                                <div class="form-group">
                                    <label class="control-label">Pilih Gambar</label>
                                        <input type="file" class="form-control" name="nama_file"><br>
                                    <code class="alert alert-danger">Input gambar tanpa spasi</code><br><br>
									<code class="alert alert-danger">Format Gambar Harus .JPG</code>
                                </div>
                                <!-- Input Type Hidden -->
								<input type="hidden" value="<?php echo $user ?>" name="id_user">
                                <input type="hidden" value="<?php echo $tgl ?>" name="date_time">
                                <input type="hidden" name="id_file" value="<?php echo $angka ?>">
								<input type="hidden" name="sub_id_kategori" value="92">
								<input type="hidden" name="status_hapus" value="aktif">
                            <!-- End -->
                                <input type="submit" name="simpan_publishing" class="btn width-100 btn-primary" value="Simpan">
                            </div>
                            <!-- end panel -->
                        </div>
					<!-- END form input publishing -->
                    </form>
                </div>
				<div id="createsub" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title" align="center">Tambah Sub Kategori</h4>
							</div>
							<div class="modal-body" style="width:100%">
								
								<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
									<div class="form-group">
										<label class="control-label">Pilih Kategori</label>
											<select id="formInput1226" class="form-control" name="kategori">
											<option value="Berita">Berita</option>
											<option value="Berita Headline">Berita Headline</option>
											<option value="Artikel">Artikel</option>
											</select>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="sub_kategori" placeholder="Nama Sub Kategori" />
									</div>
									<input type="hidden" value="<?php echo $user ?>" name="id_user">
								<input type="submit" name="simpan_subkategori_publishing" class="btn btn-primary" value="Simpan">
								</form>
							</div>
						</div>
					</div>
                </div>
		  <!-- START tampilan fitur publishing -->
          <div class="row">
            <div class="col-md-12">
              <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data Publishing</h4>
						 <?php
						 $user1= id_user($username_user);
							
								$asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $kirik = mysqli_fetch_array($asu);
                                $result2= $kirik['id_user'].$kirik['reff'];
							   
							   $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur =  'publishing' AND status_hapus =  'aktif' AND user.id_user =  '$user1' UNION SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur =  'publishing' AND status_hapus =  'aktif' AND user.reff LIKE '%$result2' ORDER BY id_page DESC");
							   
                              //pagination config start
									//$rpp = 5; // jumlah record per halaman
									//$reload = "index.php?menu=publishing";
									//$page = intval($_GET["page"]);
									//if($page<=0) $page = 1;  
									//$tcount = mysql_num_rows($hasil);
									//$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									//$count = 0;
									//$i = ($page-1)*$rpp;
									//$no_urut = ($page-1)*$rpp;
								//pagination config end
							
						 ?>
                        <table id="data-table" data-order='[[1,"desc"]]' class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th>No</th>
                                    <th>Judul</th>
                                    <!--<th>Isi Page</th>-->
                                    <th>Nama Kategori</th>
                                    <th>Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							  /*while(($count<$rpp) && ($i<$tcount)) {
								mysql_data_seek($hasil,$i);*/
                              $no=1; while($baris=mysqli_fetch_array($hasil)){
                            ?>
                                <tr>
                                    <td align="center"><?php echo $no; ?></td>
                                    <!--<td align="center">
									<?php// if($baris['nama_file']){?>
									<?php// echo "<img src=".$baris['nama_file']." width='100px' height='100px'>" ;?>
									<?php// } else {?>
									Tidak Ada Gambar
									<?php// } ?>
									</td>-->
									 
                                    <td align="center"><?php echo $baris['judul_page'];?></td>
                                    <!--<td align="center"><?php // echo "".substr($baris['isi_page'],0,300)."...";?></td>-->
									<?php 
									if($baris['sub_id_kategori_2']=='104'){
									$wow = $baris['sub_id_kategori_2'];
									$sql100 = mysqli_query($id_mysqli,"SELECT * From kategori where id_kategori='$wow'");
									$sql101 = mysqli_fetch_array($sql100);
									?>
										<td align="center"><?php echo $sql101['nama_kategori'];?> - <?php echo $baris['sub_kategori'];?></td>
									<?php } else { ?>
                                    <td align="center"><?php echo $baris['nama_kategori'];?> - <?php echo $baris['sub_kategori'];?></td>
									<?php } ?>
									<td align="center"><?php echo $baris['date_time'];?></td>
                                    <td align="center">
                                        <a href="index.php?menu=detail_publishing&id=<?php echo $baris['id_page']; ?>" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="index.php?menu=edit_publishing&id=<?php echo $baris['id_page']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
										
										<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
											<input type="submit" name="hapus_publishing" class="btn btn-danger btn-xs" value="Hapus">
										</form>
										
                                    </td>
                                </tr>
                            <?php $no++; }  ?>
                            </tbody>
                        </table>
						<!--<div><?php // echo paginate_one($reload, $page, $tpages); ?></div>-->
                    </div>
            </div>
          </div>
		  <!-- END tampilan fitur publishing -->
		  <?php } //TUTUP pembagian hak akses ?>
			
		<?php } //TUTUP query untuk hak akses ?>