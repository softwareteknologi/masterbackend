<?php 
                  $user = id_user($username_user); // Mengubah session username menjadi id user 
                  $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'"); // ambil data dari tabel text
                  while($hasil=mysqli_fetch_array($sql)){
                  $id=$hasil['id_kategori'];
                  $text=$hasil['isi_text'];
                  $a=5; // kode hak akses accounting
				  $nomor=$a.$user; // penggabungan kode hak akses accounting dengan id user
				  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
				  $result= mysqli_fetch_array($hasil);
				  $status=$result['status'];
				  $id_kategori=$result['id_kategori'];
				  $isi_text=$result['isi_text'];
              ?>

            <?php
              // -------------------------------------------------------------------------------------------------------------
              // ---------------------------------------- PEMBELIAN ------------------------------------------------------
              // -------------------------------------------------------------------------------------------------------------
              ?>
            <?php
            if($username_user && $isi_text && $id_kategori=='61' && $status=='1'){ // hak akses fitur accounting dengan id kategori 61 yaitu pembelian ?>
              <br/><h1 class="page-header">PEMBELIAN</h1>
                <!-- begin row -->
                <div class="row">
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-md-9">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Pembelian</h4>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Nama Produk</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="judul_page" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Nama Toko</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nama_toko" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Harga Pokok</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="harga_pokok" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Harga Jual</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="harga_jual" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Stok</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="stok" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Keterangan</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="isi_page"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <div class="form-group">
                                    <label class="control-label">Pilih Kategori</label>
                                        <select id="formInput1226" class="form-control" name="id_kategori">
                                          <?php echo kategori_pembelian($id_kategori); // fungsi menampilkan semua kategori dari fitur accounting  pembelian?> 
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Pilih Gambar</label>
                                        <input type="file" class="form-control" name="nama_file"><br>
                                    <font color="red"><b>Input gambar tanpa spasi</b></font>
                                </div>
                                <!-- Input Type Hidden -->
								<input type="hidden" value="<?php echo $user ?>" name="id_user">
                                <input type="hidden" value="<?php echo $tgl ?>" name="date_time">
                                <input type="hidden" name="id_file" value="<?php echo $angka ?>">
								<input type="hidden" name="status_hapus" value="aktif">
                            <!-- End -->
                                <input type="submit" name="simpan_pembelian" class="btn width-100 btn-primary" value="Simpan">
                            </div>
                            <!-- end panel -->
                        </div>
                    </form>
                </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data Pembelian</h4>
						 <?php 
						 
						 $user1= id_user($username_user);
							
							  $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur='Pembelian' AND status_hapus =  'aktif' AND user.id_user =  '$user1' UNION SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur='Pembelian' AND status_hapus =  'aktif' AND user.reff LIKE '%$result2' order by date_time desc");
							  //pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=accounting";
									$page = intval($_GET["page"]);
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($hasil);
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
                                    <th>Gambar</th>
                                    <th>Nama Produk</th>
                                    <th>Nama Toko</th>
                                    <th>Harga Jual</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
							while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($hasil,$i);
                                $baris=mysqli_fetch_array($hasil);
                            ?>
                                <tr>
                                    <td align="center"><?php echo ++$no_urut; ?></td>
                                    <td align="center"><?php echo "<img src=file/".$baris['nama_file']." width='100px' height='100px'>" ;?></td>
                                    <td align="center"><?php echo $baris['judul_page'];?></td>
                                    <td align="center"><?php echo $baris['nama_toko'];?></td>
                                    <td align="center"><?php echo "Rp ".number_format($baris['harga_jual']);?></td>
                                    <td align="center"><?php echo $baris['stok'];?></td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                        <a data-toggle="modal" data-target="#edit-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
										<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
											<input type="submit" name="hapus_pembelian" class="btn btn-danger btn-xs" value="Hapus">
										</form>
                                    </td>
                                </tr>
                            <?php  $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                    </div>
            </div>
          </div>


        <?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori WHERE fitur='pembelian'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
        <!-- MODAL EDIT -->
        <div id="edit-<?php echo $baris['id_page'] ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Edit Data Karyawan <?php echo $baris['nama_karyawan'] ?></h4>
                    </div>
                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="modal-body">
                        <!-- begin panel -->
                            <!-- Input Type Hidden -->
                            <input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
                            <input type="hidden" name="date_time" value="<?php echo $baris['date_time'] ?>">
                            <input type="hidden" name="id_file" value="<?php echo $baris['id_file']?>">
                            <!-- End -->
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Nama Produk</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="judul_page" value="<?php echo $baris['judul_page'] ?>" />
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Nama Toko</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="nama_toko" value="<?php echo $baris['nama_toko'] ?>" />
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Harga Pokok</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="harga_pokok" value="<?php echo $baris['harga_pokok'] ?>" />
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Harga Jual</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="harga_jual" value="<?php echo $baris['harga_jual'] ?>" />
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Stok</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="stok" value="<?php echo $baris['stok'] ?>" />
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Keterangan</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="isi_page"><?php echo $baris['isi_page'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Pilih Kategori</label>
                                <div class="col-md-8">
                                    <select id="formInput1226" class="form-control" name="id_kategori">
                                          <?php echo kategori_pembelian($user); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-b-10">
                                <label class="col-md-3 control-label">Gambar</label>
                                <div class="col-md-8">
                                    <?php echo "<img src=file/".$baris['nama_file']." width='200px' height='200px'>"; ?><br>
                                    <code class="alert alert-danger">*Harap menginput kembali gambar</code><br><br>
                                    <input type="file" name="nama_file" class="form-control" required>
                                </div>
                            </div>
                        <!-- end panel -->
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                        <input type="submit" name="edit_pembelian" class="btn width-100 btn-primary" value="Simpan">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>


        <?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='pembelian'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <!-- MODAL DETAIL -->
            <div id="detail-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td colspan="2"><center><?php echo "<img src=file/".$baris['nama_file']." width='200px' height='200px'>"; ?></center></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Produk</td>
                                  <td class="col-sm-3"><?php echo $baris['judul_page'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Toko</td>
                                  <td class="col-sm-3"><?php echo $baris['nama_toko'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Harga Pokok</td>
                                  <td class="col-sm-3"><?php echo "Rp ".number_format($baris['harga_pokok']) ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Harga Jual</td>
                                  <td class="col-sm-3"><?php echo "Rp ".number_format($baris['harga_jual']) ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Stok</td>
                                  <td class="col-sm-3"><?php echo $baris['stok'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Kategori</td>
                                  <td class="col-sm-3"><?php echo $baris['nama_kategori'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Keterangan</td>
                                  <td class="col-sm-3"><?php echo $baris['isi_page'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Tanggal di Perbarui</td>
                                  <td class="col-sm-3"><?php echo $baris['date_time'] ?></td>
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
    <?php } // tutup tag hak akses pembelian ?>
	<?php } ?>