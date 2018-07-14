<!-- START fitur perawatan alat -->
		<?php
            $user = id_user($username_user);
            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
            while($hasil=mysqli_fetch_array($sql)){ //BUKA query untuk hak akses perawatan alat
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
            if($username_user && $isi_text && $id_kategori=='57' && $status=='1'){ //BUKA pembagian hak akses perawatan alat ?>
        
        <!-- START form untuk perawatan alat -->
        <div class="row">
                    <div class="col-md-12">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Pengajuan Alat</h4>
                                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-10">
                                        <code class="alert alert-danger">***Keterangan***</code>
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Pengajuan</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="judul_page" />
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Jenis Barang</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="jenis_barang" />
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Nama</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama_karyawan" />
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Keterangan</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control" name="isi_page"></textarea>
                                    </div>
                                </div>
                                <!-- Input Type Hidden -->
									<input type="hidden" value="<?php echo $user ?>" name="id_user">
                                    <input type="hidden" value="<?php echo $tgl ?>" name="date_time">
                                    <input type="hidden" name="status" value="Belum ACC">
                                    <input type="hidden" name="id_kategori" value="57">
									<input type="hidden" name="status_hapus" value="aktif">
                                <!-- End -->
                                <div class="modal-footer">
                                     <div class="controls">
										<input type="submit" name="simpan_perawatan_alat" value="Simpan" class="btn width-100 btn-primary">
                                     </div>
                                </div>
                              </form>
                            </div>
                            <!-- end panel -->
                        </div>
                </div>
				<!-- END form untuk perawatan alat -->
				
				<!-- START tampilan untuk perawatan alat -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data Peralatan Alat</h4>
						 <?php 
						 $user1= id_user($username_user);
								if($user1==1){
                                  $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE nama_kategori='Perawatan Alat' AND status_hapus='aktif'");
								  //pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=publishing";
									$page = intval($_GET["page"]);
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($hasil);
									$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									$count = 0;
									$i = ($page-1)*$rpp;
									$no_urut = ($page-1)*$rpp;
								//pagination config end
								}else{
								  $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE nama_kategori='Perawatan Alat' AND user.id_user='$user1' AND status_hapus='aktif'");
								  //pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=publishing";
									$page = intval($_GET["page"]);
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($hasil);
									$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									$count = 0;
									$i = ($page-1)*$rpp;
									$no_urut = ($page-1)*$rpp;
								//pagination config end
								}
						 ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th>No</th>
                                    <th>Pengajuan</th>
                                    <th>Jenis Barang</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								while(($count<$rpp) && ($i<$tcount)) {
								mysql_data_seek($hasil,$i);
                                  $baris=mysqli_fetch_array($hasil);
                                ?>
                                <tr>
                                    <td align="center"><?php echo ++$no_urut; ?></td>
                                    <td align="center"><?php echo $baris['judul_page'];?></td>
                                    <td align="center"><?php echo $baris['jenis_barang'];?></td>
                                    <td align="center"><?php echo $baris['nama_karyawan'];?></td>
                                    <td align="cebter"><code class="alert alert-danger"><?php echo $baris['status'];?></code></td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                        <a data-toggle="modal" data-target="#edit-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
                                    </td>
                                </tr>
                                <?php $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                    </div>
                    </div>
                </div>
				<!-- END tampilan untuk perawatan alat -->

		<!-- START modal detail perawatan alat -->
        <?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE nama_kategori='Perawatan Alat'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <div id="detail-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail Data Pengajuan Alat</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Pengajuan</td>
                                  <td class="col-sm-3"><?php echo $baris['judul_page'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Jenis Barang</td>
                                  <td class="col-sm-3"><?php echo $baris['jenis_barang'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama</td>
                                  <td class="col-sm-3"><?php echo $baris['nama_karyawan'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Keterangan</td>
                                  <td class="col-sm-3"><?php echo $baris['isi_page'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Status</td>
                                  <td class="col-sm-3"><code class="alert alert-danger"><?php echo $baris['status'];?></code></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Tanggal di Perbarui</td>
                                  <td class="col-sm-3"><?php echo list_tanggal($baris['date_time']) ?></td>
                                </tr>
                              </tbody>
                            </table>
                    </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
		<!-- END modal detail perawatan alat -->
		
		<!-- START modal edit perawatan alat -->
		<?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE nama_kategori='Perawatan Alat'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <div id="edit-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Data Pengajuan Alat</h4>
                        </div>
						<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="modal-body">
                            <!-- begin panel -->
							<!-- Input Type Hidden -->
								<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
								<input type="hidden" name="status_hapus" value="<?php echo $baris['status_hapus'] ?>">
							<!-- End -->
                              <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Pengajuan</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo $baris['judul_page'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Jenis Barang</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo $baris['jenis_barang'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Nama</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo $baris['nama_karyawan'] ?>" disabled />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Keterangan</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control"><?php echo $baris['isi_page'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Status</label>
                                    <div class="col-md-7">
                                         <select class="form-control" name="status">
                                            <option value="<?php echo $baris['status'] ?>"><?php echo $baris['status'] ?></option>
                                            <option value="ACC">ACC</option>
                                            <option value="Tidak ACC">Tidak ACC</option>
                                            <option value="Belum ACC">Belum ACC</option>
                                        </select>
                                    </div>
                                </div>
                            <!-- end panel -->
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
							<input type="submit" name="hapus_perawatan_alat" class="btn width-100 btn-danger" value="Hapus">
                            <input type="submit" name="edit_perawatan_alat" class="btn width-100 btn-primary" value="Simpan">
                        </div>
						</form>
                    </div>
                </div>
            </div>
			<?php } ?>
			<!-- END modal edit perawatan alat -->
			
        <?php } //TUTUP pembagian hak akses perawatan alat ?>
    <?php } //TUTUP query untuk perawatan alat ?>