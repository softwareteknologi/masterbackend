<?php
            $user = id_user($username_user);
            $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
            while($hasil=mysqli_fetch_array($sql)){
            $id=$hasil['id_kategori'];
            $text=$hasil['isi_text'];
             $a=6;
			  $nomor=$a.$user;
			  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
			  $result= mysqli_fetch_array($hasil);
			  $status=$result['status'];
			  $id_kategori=$result['id_kategori'];
			  $isi_text=$result['isi_text'];
        ?>
			  <?php
                      // -------------------------------------------------------------------------------------------------------------
                      // ---------------------------------------- DATA KARYAWAN ------------------------------------------------------
                      // -------------------------------------------------------------------------------------------------------------
                      ?>
                      <?php
                          if($username_user && $isi_text && $id_kategori=='54' && $status=='1'){ ?>
						  
                      <br/><div class="row">
                      <div class="col-md-12">
                          <div class="panel pagination-info clearfix m-b-0"><br>
                              <h4 class="form-header">&nbsp Data Karyawan Software Technologi</h4>
							  <?php if($user==1){ ?>
                          <table  class="table table-bordered table-hover">
                              <thead>
                                  <tr class="info">
                                      <th>NO</th>
                                      <th>Nama Karyawan</th>
                                      <th>Jabatan</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
                                    //pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=network";
									$page = intval(isset($_GET['page']) ? $_GET['page'] : "");
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
                                      <td align="center"><?php echo $baris['jabatan_user'];?></td>
                                      <td align="center"><?php echo $baris['status_peker'];?></td>
                                      <td align="center">
                                          <a data-toggle="modal" data-target="#detail_data_karyawan-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                          <a data-toggle="modal" data-target="#edit-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
										  <a data-toggle="modal" data-target="#tugas-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i> Add Tugas</a>
                                      </td>
                                  </tr>
                                      <?php $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
							  <?php } else { ?>
								  
								<table id="data-table" data-order='[[0,"asc"]]' class="table table-bordered table-hover">
                              <thead>
                                  <tr class="info">
                                      <th>NO</th>
                                      <th>Nama Karyawan</th>
                                      <th>Jabatan</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
									$munyok = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
									$koala = mysqli_fetch_array($munyok);
									$jerapah= $koala['id_user'].$koala['reff'];
									$kucing = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$jerapah'");
									//pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=network";
									$page = intval($_GET["page"]);
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($kucing);
									$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									$count = 0;
									$i = ($page-1)*$rpp;
									$no_urut = ($page-1)*$rpp;
								//pagination config end 
								 while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($hasil,$i);
									$baris = mysqli_fetch_array($kucing);
									 ?>
                                  <tr>
                                      <td align="center"><?php echo ++$no_urut; ?></td>
                                      <td align="center"><?php echo $baris['nama_user'];?></td>
                                      <td align="center"><?php echo $baris['jabatan_user'];?></td>
                                      <td align="center"><?php echo $baris['status_peker'];?></td>
                                      <td align="center">
                                          <a data-toggle="modal" data-target="#detail_data_karyawan-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                          <a data-toggle="modal" data-target="#edit-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
                                      </td>
                                  </tr>
                                      <?php $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
								  
							  <?php } ?>
                      </div>
                      </div>
                      </div>
						  

                      <?php
                      $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
                      $no=1;
                      while($baris=mysqli_fetch_array($hasil)){
                      ?>
                      <!-- MODAL EDIT -->
                      <div id="edit-<?php echo $baris['id_user'] ?>" class="modal fade">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 class="modal-title">Edit Data Karyawan <?php echo $baris['nama_user'] ?></h4>
                          </div>
                          <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          <div class="modal-body">
                              <!-- begin panel -->
                                  <!-- Input Type Hidden -->
                                  <input type="hidden" name="id_user" value="<?php echo $baris['id_user'] ?>">
                                  <input type="hidden" name="id_kategori" value="62">
                                  <!-- End -->
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Nama Karyawan</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="nama_user" value="<?php echo $baris['nama_user'] ?>" />
                                      </div>
                                  </div>
								  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Username</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="username_user" value="<?php echo $baris['username_user'] ?>" />
                                      </div>
                                  </div>
								  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Password</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="password_user" placeholder="Harus di isi" required/>
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Tempat Lahir</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $baris['tempat_lahir'] ?>"/>
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Tanggal Lahir</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" id="masked-input-date" name="tanggal_lahir" value="<?php echo $baris['tanggal_lahir'] ?>" placeholder="yyyy-mm-dd" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Pendidikan Terakhir</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" id="masked-input-date" name="pend_terakhir" value="<?php echo $baris['pend_terakhir'] ?>"/>
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Agama</label>
                                      <div class="col-md-7">
                                          <select class="form-control" name="agama_user">
                                              <option value="<?php echo $baris['agama_user'] ?>"><?php echo $baris['agama_user'] ?></option>
                                              <option value="Islam">Islam</option>
                                              <option value="Kristen">Kristen</option>
                                              <option value="Katholik">Katholik</option>
                                              <option value="Hindu">Hindu</option>
                                              <option value="Budha">Budha</option>
                                              <option value="Konghuchu">Konghuchu</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Alamat</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="alamat" value="<?php echo $baris['alamat'] ?>" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Jabatan</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="jabatan_user" value="<?php echo $baris['jabatan_user'] ?>">
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Status Pekerjaan</label>
                                      <div class="col-md-7">
                                          <select class="form-control" name="status_peker">
                                              <option value="<?php echo $baris['status_peker'] ?>"><?php echo $baris['status_peker'] ?></option>
                                              <option value="Aktif">Aktif</option>
                                              <option value="Banned">Banned</option>
                                              <option value="Cuti">Cuti</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Foto</label>
                                      <div class="col-md-7">
                                          <?php echo "<img src=file/".$baris['foto']." width='200px' height='200px'>"; ?><br>
                                          <code class="alert alert-danger">*Harap menginput kembali gambar</code><br><br>
                                          <input type="file" name="foto" class="form-control" required>
                                      </div>
                                  </div>
                              <!-- end panel -->
                          </div>
                          <div class="modal-footer">
                              <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                              <input type="submit" name="edit_rekrutmen" class="btn width-100 btn-primary" value="Simpan">
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
                      <div id="detail_data_karyawan-<?php echo $baris['id_user'] ?>" class="modal fade">
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
                                        <td class="col-md-1 col-sm-2">Username</td>
                                        <td class="col-sm-3"><?php echo $baris['username_user'] ?></td>
                                      </tr>
									  <tr>
                                        <td class="col-md-1 col-sm-2">Password</td>
                                        <td class="col-sm-3"><?php echo $baris['password_user'] ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">TTL</td>
                                        <td class="col-sm-3"><?php echo $baris['tempat_lahir'] ?>, <?php echo $baris['tanggal_lahir'] ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Pendidikan Terakhir</td>
                                        <td class="col-sm-3"><?php echo $baris['pend_terakhir'] ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Agama</td>
                                        <td class="col-sm-3"><?php echo $baris['agama_user'] ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Alamat</td>
                                        <td class="col-sm-3"><?php echo $baris['alamat'] ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Jabatan</td>
                                        <td class="col-sm-3"><?php echo $baris['jabatan_user'] ?></td>
                                      </tr>
                                      <tr>
                                        <td class="col-md-1 col-sm-2">Status Pekerjaan</td>
                                        <td class="col-sm-3"><?php echo $baris['status_peker'] ?></td>
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
					  
					  <!-- MODAL LIST Tugas -->
                      <div id="tugas-<?php echo $baris['id_user'] ?>" class="modal fade">
                      <div class="modal-dialog" style="width:90%">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title">List Tugas <?php echo $baris['nama_user'] ?></h4>
                              </div>
								<div class="modal-body">
								
								<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <div class="panel p-20">
								<div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Tugas</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="judul_page" />
                                    </div>
                                </div>
                                <div class="form-group m-b-10">
                                    <label class="col-md-3 control-label">Keterangan</label>
                                    <div class="col-md-8">
                                        <textarea name="isi_page" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
							<!-- Input Type Hidden -->
								<input type="hidden" value="<?php echo $baris['id_user'] ?>" name="untuk">
                                <input type="hidden" value="<?php echo $tgl ?>" name="date_time">
								<input type="hidden" value="Belum Selesai" name="status_tugas">
                            <!-- End -->
							<div class="modal-footer">
								<button type="submit" name="simpan_tugas" class="btn width-100 btn-primary">Simpan</button>
                              </div>
								</form>
								
								<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
								<table id="data-table" data-order='[[0,"asc"]]' class="table table-bordered table-hover">
                              <thead>
							  <th>Tangal Submit</th>
							  <th>Nama Tugas</th>
							  <th>Keterangan</th>
							  <th>Status</th>
							  </thead>
							  <tbody>
							  <?php 
							  $list_tugas= mysqli_query($id_mysqli,"SELECT * FROM page WHERE untuk='$baris[id_user]'");
							  while($hasil_tugas= mysqli_fetch_array($list_tugas)){
							  ?>
							  <tr>
							  <td><?php echo list_tanggal($hasil_tugas['date_time']) ?></td>
							  <td><?php echo $hasil_tugas['judul_page'] ?></td>
							  <td><?php echo $hasil_tugas['isi_page'] ?></td>
							  <td>
								<select class="form-control" name="status_tugas[]">
									<option value="<?php echo $hasil_tugas['status_tugas'] ?>"><?php echo $hasil_tugas['status_tugas'] ?></option>
									<option value="Belum Selesai">Belum Selesai</option>
									<option value="Selesai">Selesai</option>
								  </select>
							  </td>
							  <tr>
							  <input type="hidden" name="untuk[]" value="<?php echo $hasil_tugas['untuk'] ?>">
							  <input type="hidden" name="id_page[]" value="<?php echo $hasil_tugas['id_page'] ?>">
							  <input type="hidden" name="judul_page[]" value="<?php echo $hasil_tugas['judul_page'] ?>">
								<?php } ?>
							  </tbody>
                            </table>
								</div>
                              <div class="modal-footer">
								<button type="submit" name="edit_status" class="btn width-100 btn-primary">Edit Status</button>
                                  <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                              </div>
								</form>
                          </div>
                      </div>
                      </div>
                      <?php } ?>
					  
                      <?php } ?>
			<?php } ?>