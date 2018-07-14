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
			
			<!-- START fitur marketing -->
			<?php
            if($username_user && $isi_text && $id_kategori=='55' && $status=='1'){ //BUKA pembagian hak akses marketing ?>
			
	<!-- START tampilan fitur marketing -->
        <div class="row">
                    <div class="col-md-12">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Data Project Masuk</h4>
                                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-10">
                                        <code class="alert alert-danger">*Data project masuk dari Marketing</code>
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Nama Client</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama_karyawan">
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Nama Project</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="judul_page" />
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Jumlah Harga</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="harga_jual" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                <label class="col-md-4 control-label">Date Line</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="masked-input-date" name="date_time" value="<?php echo $baris['tgl_lahir'] ?>" placeholder="yyyy-mm-dd" />
                                </div>
                            </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Keterangan</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control" name="isi_page"></textarea>
                                    </div>
                                </div>
                                <!-- Input Type Hidden -->
                                    <input type="hidden"><!-- Nama user/marketing yg login/ menginput project baru -->
									<input type="hidden" value="<?php echo $user ?>" name="id_user">
                                    <input type="hidden" name="status" value="Belum ACC">
                                    <input type="hidden" name="id_kategori" value="55">
									<input type="hidden" name="status_hapus" value="aktif">
                                <!-- END -->
                                <div class="modal-footer">
                                     <div class="controls">
                                        <input type="submit" name="simpan_marketing" class="btn width-100 btn-primary" value="Simpan">
                                     </div>
                                </div>
                              </form>
                            </div>
                            <!-- end panel -->
                        </div>
                </div>
			<?php } //TUTUP pembagian hak akses marketing ?>
			<!-- END tampilan fitur marketing -->
			
			
			<!-- START fitur data project -->
			
			<?php
            if($username_user && $isi_text && $id_kategori=='93' && $status=='1'){ //BUKA pembagian hak akses data project ?>
			
			<!-- START tampilan fitur data project -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data Project</h4>
						 <?php 
						 $hasil2 = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.nama_kategori='Marketing' AND status_hapus='aktif'");
								  //pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=publishing";
									$page = intval($_GET["page"]);
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($hasil2);
									$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									$count = 0;
									$i = ($page-1)*$rpp;
									$no_urut = ($page-1)*$rpp;
								//pagination config end
						 ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th>No</th>
                                    <th>Nama Client</th>
                                    <th>Nama Project</th>
                                    <th>Jumlah Harga</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($hasil2,$i);
                                  $baris=mysqli_fetch_array($hasil2);
                                ?>
                                <tr>
                                    <td align="center"><?php echo ++$no_urut; ?></td>
                                    <td align="center"><?php echo $baris['nama_karyawan'];?></td>
                                    <td align="center"><?php echo $baris['judul_page'];?></td>
                                    <td align="center"><?php echo "Rp. ".number_format($baris['harga_jual']);?></td>
                                    <td align="cebter"><code class="alert alert-danger"><?php echo $baris['status'];?></code></td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Detail</a>
                                        <!-- <a data-toggle="modal" data-target="#edit-<?php// echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a> -->
										<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
											<input type="submit" name="hapus_marketing" class="btn btn-danger btn-xs" value="Hapus">
										</form>
                                    </td>
                                </tr>
                                <?php $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                    </div>
                    </div>
                </div>
				<!-- END tampilan data project -->
			
			<!-- START modal detail data project -->
            <?php
				$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.nama_kategori='Marketing'");
				$no=1;
				while($baris=mysqli_fetch_array($hasil)){
			?>
            <div id="detail-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail Data Project <?php echo $baris['judul_page'] ?></h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Client</td>
                                  <td class="col-sm-3"><?php echo $baris['nama_karyawan'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Project</td>
                                  <td class="col-sm-3"><?php echo $baris['judul_page'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Jumlah Harga</td>
                                  <td class="col-sm-3"><?php echo "Rp. ".number_format($baris['harga_jual']);?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Date Line</td>
                                  <td class="col-sm-3"><?php echo list_tanggal($baris['date_time']) ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Keterangan</td>
                                  <td class="col-sm-3"><?php echo $baris['isi_page'] ?></td>
                                </tr>
								<tr>
                                  <td class="col-md-1 col-sm-2">Input Project Oleh</td>
                                  <td class="col-sm-3"><?php echo nama_user1($baris['id_user']) ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Status</td>
                                  <td class="col-sm-3"><code class="alert alert-danger"><?php echo $baris['status'];?></code></td>
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
		<!-- END modal detail data project -->
		
		<!-- START modal edit data project -->
		<?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.nama_kategori='Marketing'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <div id="edit_project_masuk-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Data Pemasukan Project</h4>
                        </div>
						<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="modal-body">
                            <!-- begin panel -->
                              <!-- Input Type Hidden -->
								<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
							<!-- End -->
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Nama Client</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo $baris['nama_karyawan'] ?>" disabled="disabled"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Nama Project</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo $baris['judul_page'] ?>" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Jumlah harga</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo "Rp. ".number_format($baris['harga_jual']);?>" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Date Line</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo list_tanggal($baris['date_time']) ?>" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Keterangan</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control" disabled="disabled"><?php echo $baris['isi_page'] ?></textarea>
                                    </div>
                                </div>
								<div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Marketing</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo nama_user1($baris['id_user']) ?>" disabled="disabled" />
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
                            <input type="submit" name="edit_management_project" class="btn width-100 btn-primary" value="Simpan">
                        </div>
						</form>
                    </div>
                </div>
            </div><br>
          <?php } ?>
		  <!-- END modal edit data project -->
		  
		  <?php } //TUTUP pembagian hak akses ?>
		
		<?php } //TUTUP query untuk hak akses ?>