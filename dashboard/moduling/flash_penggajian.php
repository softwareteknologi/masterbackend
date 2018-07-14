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
              // ---------------------------------------- Penggajian ------------------------------------------------------
              // -------------------------------------------------------------------------------------------------------------
              ?>

            <?php
              if($username_user && $isi_text && $id_kategori=='56' && $status=='1'){ // hak akses fitur accounting dengan id kategori 56 yaitu penggajian ?>
			<br/><h1 class="page-header">PENGGAJIAN</h1>
              <div class="row">
            <div class="col-md-12">
              <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">&nbsp Data Penggajian</h4>
						 
						<?php
                                  $hasil2 = mysqli_query($id_mysqli,"SELECT SUM(harga_jual) as pemasukan FROM page INNER JOIN kategori INNER JOIN user ON page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.nama_kategori='Marketing' AND status_hapus='aktif' AND page.status='ACC'"); // menampilkan jumlah harga jual 
								  $no=1;
                                  $baris=mysqli_fetch_array($hasil2);
                                ?>
								
								<h4 class="form-header">&nbsp Jumlah Pemasukan : <?php echo "Rp. ".number_format($baris['pemasukan']);?>
								  </h4>
								  
								  <?php
									  $total_1 = $baris['pemasukan'] / '100'; // data pemasukan dibagi 100
									  $total_2 = $total_1 * '30'; // kemudian dikali 30
                                  ?>
								  
								<h4 class="form-header">&nbsp Untuk Perusahaan : <?php echo "Rp. ".number_format($total_2);?>
								</h4>
								  
								  
								 <?php
									  $total_3 = $baris['pemasukan'] / '100'; // data pemasukan di bagi 100
									  $total_4 = $total_3 * '70'; // kemudian dikali 70
                                  ?>
								  
								<h4 class="form-header">&nbsp Untuk Seluruh Karyawan : <?php echo "Rp. ".number_format($total_4);?>
								  </h4>
								  
								<?php
								$bagi = mysqli_query($id_mysqli,"SELECT COUNT(*) as jumlah FROM user WHERE id_kategori='62'"); // menampilkan jml data dari tabel user dimana id kategori 62 ( Softek )
								$bagi_hasil = mysqli_fetch_array($bagi);
								
								$jumlah = $bagi_hasil['jumlah'];
								
								$total_gaji = $total_4 / $jumlah;
								
								?>
								
								<h4 class="form-header">&nbsp Untuk Per Karyawan : <u><?php echo "Rp. ".number_format($total_gaji);?></u> Per Orang
								</h4>
								

						 
                        <table  class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th>No</th>
                                    <th>Nama Karyawan</th>
									<th>Total Gaji Karyawan</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                              $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
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
                              while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($hasil,$i);
                                $baris=mysqli_fetch_array($hasil);
                            ?>
                                <tr>
                                    <td align="center"><?php echo ++$no_urut; ?></td>
                                    <td align="center"><?php echo $baris['nama_user'];?></td>
                                        <?php
											$baris['gaji_pokok'];
											$baris['bonus'];
                                            $sub_total = $baris['gaji_pokok'] + $baris['bonus'];
                                        ?>
                                        <?php
                                            if($sub_total > '4000000') // jika subtotal kurang dari 4jt
                                            $pph = $sub_total * '10' / '100'; // subtotal dikali 10%
                                            else // jika tidak maka pph 0
                                            $pph = '0';
                                        ?>
                                    <td align="center">
                                        <?php
                                            $total = $sub_total - $pph;
                                            echo 'Rp ' .number_format($total);
                                        ?>
                                    </td>    
                                    <td align="center">
										<a data-toggle="modal" data-target="#detailpenggajian-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                        <a data-toggle="modal" data-target="#penggajian-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Penggajian</a>
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
                $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
                $no=1;
                while($baris=mysqli_fetch_array($hasil)){
            ?>
            <!-- MODAL EDIT -->
            <div id="penggajian-<?php echo $baris['id_user'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Edit Data Penggajian <?php echo $baris['nama_karyawan'] ?></h4>
                        </div>ss
                        <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="modal-body">
                            <!-- begin panel -->
                                <!-- Input Type Hidden -->
                                <input type="hidden" name="id_user" value="<?php echo $baris['id_user'] ?>">
                                <!-- End -->
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Nama Karyawan</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value="<?php echo $baris['nama_user'] ?>" readonly/>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Gaji Pokok</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="gaji_pokok" value="<?php echo $baris['gaji_pokok'] ?>"/>
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Bonus</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="bonus" value="<?php echo $baris['bonus'] ?>"/>
                                    </div>
                                </div>
                            <!-- end panel -->
                        </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                            <input type="submit" name="edit_penggajian" class="btn width-100 btn-primary" value="Simpan">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
		
		
		<?php
                      $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
                      $no=1;
                      while($baris=mysqli_fetch_array($hasil)){
                      ?>
                      <!-- MODAL DETAIL -->
                      <div id="detailpenggajian-<?php echo $baris['id_user'] ?>" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title">Detail Data Karyawan <?php echo $baris['nama_user'] ?></h4>
                              </div>
                              <div class="modal-body">
                                  <table class="table table-bordered table-hover">
                                    <tbody>
                                      <tr>
                                        <td colspan="2"><center><?php echo "<img src=file/".$baris['foto']." width='200px' height='200px'>"; ?></center></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Nama Karyawan</td>
                                        <td class="col-sm-3"><?php echo $baris['nama_user'] ?></td>
                                      </tr>
									  <tr>
                                        <td class="col-md-1 col-sm-2">Gaji Pokok</td>
                                        <td class="col-sm-3"><?php echo 'Rp ' .number_format($baris['gaji_pokok']); ?></td>
                                      </tr>
									  <tr>
                                        <td class="col-md-1 col-sm-2">Bonus</td>
                                        <td class="col-sm-3"><?php echo 'Rp ' .number_format($baris['bonus']); ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Sub Total Gaji</td>
                                        <td class="col-sm-3"> 
											<?php
												$sub_total = $baris['gaji_pokok'] + $baris['bonus'];
												echo 'Rp ' .number_format($sub_total);
											?>
										</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">PPH</td>
                                        <td class="col-sm-3">
											<?php
												if($sub_total > '4000000') // jika subtotal kurang dari 4jt
                                            $pph = $sub_total * '10' / '100'; // subtotal dikali 10%
                                            else // jika tidak maka pph 0
                                            $pph = '0';
												echo 'Rp ' .number_format($pph);
											?>
										</td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Total Gaji</td>
                                        <td class="col-sm-3">
											<?php
												$total = $sub_total - $pph;
												echo 'Rp ' .number_format($total);
											?>
										</td>
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

            <?php } ?>

  <?php } ?>