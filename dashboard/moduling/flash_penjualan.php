<?php
          $user = id_user($username_user);
          $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
          while($hasil=mysqli_fetch_array($sql)){
          $id=$hasil['id_kategori'];
          $text=$hasil['isi_text'];
		  $a=5;
		  $nomor=$a.$user;
          $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
          $result= mysqli_fetch_array($hasil);
          $status=$result['status'];
          $id_kategori=$result['id_kategori'];
          $isi_text=$result['isi_text'];
        ?>
    <?php
              // -------------------------------------------------------------------------------------------------------------
              // ---------------------------------------- PENJUALAN ------------------------------------------------------
              // -------------------------------------------------------------------------------------------------------------
              ?>
    <?php
            if($username_user && $isi_text && $id_kategori=='60' && $status=='1'){ // hak akses fitur accounting dengan id kategori 60 yaitu penjualan ?>
              <br/><h1 class="page-header">PENJUALAN</h1>
        <!-- ACCOUNTING PENJUALAN -->
        <div class="row">
                    <div class="col-md-12">
                        <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data Penjualan</h4>
						 <?php 
						 //include "core/pagination.php";
						 $user1=id_user($username_user);
									$asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
									$kirik = mysqli_fetch_array($asu);
									$result2= $kirik['id_user'].$kirik['reff'];
								  $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.nama_kategori='Penjualan' AND status_hapus =  'aktif' AND user.id_user =  '$user1' UNION SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.nama_kategori='Penjualan' AND status_hapus =  'aktif' AND user.reff LIKE '%$result2' order by date_time desc");
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
                                    <th>Preview</th>
                                    <th>Nama Produk</th>
                                    <th>Nama Toko</th>
                                    <th>Stok Barang</th>
                                    <th>Harga Pokok</th>
                                    <th>Harga Jual</th>
                                    <th>Tanggal Diperbarui</th>
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
                                    <td align="center"><?php echo "<img src=file/".$baris['nama_file']." width='100px' height='100px'>" ;?></td>
                                    <td align="center"><?php echo $baris['nama_produk'];?></td>
                                    <td align="center"><?php echo $baris['nama_toko'];?></td>
                                    <td align="center"><?php echo $baris['stok'];?></td>
                                    <td align="center"><?php echo $baris['harga_pokok'];?></td>
                                    <td align="center"><?php echo $baris['harga_jual'];?></td>
                                    <td align="cebter"><?php echo $baris['date_time'];?></td>
                                    <td align="center">
                                        <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Detail</a>
                                        <!-- <a data-toggle="modal" data-target="#edit-<?php// echo $baris['id_page'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a> -->
                                    </td>
                                </tr>
                                <?php  $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                    </div>
                    </div>
                </div>
				<div class="row">
				</div>

            <?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE nama_kategori='Penjualan'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <!-- MODAL DETAIL -->
            <div id="detail-<?php echo $baris['id_page'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail Data Penjualan <?php echo $baris['judul_page'] ?></h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Preview</td>
                                  <td class="col-sm-3"><?php echo $baris['preview'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Produk</td>
                                  <td class="col-sm-3"><?php echo $baris['nama produk'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Toko</td>
                                  <td class="col-sm-3"><?php echo $baris['nama toko'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Stok Barang</td>
                                  <td class="col-sm-3"><?php echo $baris['stok barang'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Harga Pokok</td>
                                  <td class="col-sm-3"><?php echo $baris['harga pokok'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Harga Jual</td>
                                  <td class="col-sm-3"><?php echo $baris['harga jual'] ?></td>
                                </tr>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Tanggal Diperbarui</td>
                                  <td class="col-sm-3"><?php echo $baris['tanggal diperbarui'] ?></td>
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

		<?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE nama_kategori='Penjualan'");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <!-- MODAL EDIT -->
            <div id="edit-<?php echo $baris['id_page'] ?>" class="modal fade"> -->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Data Pemasukan Project</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin panel -->
                              <form class="form-horizontal">
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Project Masuk</label>
                                    <div class="col-md-7">
                                        <select class="form-control">
                                            <option>Nama Project yang di ACC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Jumlah Harga</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Metode Pembayaran</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Date Line</label>
                                    <div class="col-md-7">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-4 control-label">Status</label>
                                    <div class="col-md-7">
                                         <select class="form-control">
                                            <option>ACC</option>
                                            <option>Tidak ACC</option>
                                            <option>Belum ACC</option>
                                        </select>
                                    </div>
                                </div>
                              </form>
                            <!-- end panel -->
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                            <a href="javascript:;" class="btn width-100 btn-primary">Save</a>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
        <?php } ?>
		<?php } ?>