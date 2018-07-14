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
              // ---------------------------------------- REKRUTMEN
              // -------------------------------------------------------------------------------------------------------------
              ?>
        <?php
            if($username_user && $isi_text && $id_kategori=='52' && $status=='1'){ ?>
			
			<div class="row"><br/>
							
							<?php
                            if ($user=='1') {?>
							<div class="col-md-6">
                              <!-- begin panel -->
                              <div class="panel p-20">
                                  <h4 class="form-header"><span class="icon text-primary">+</span> Karyawan Baru</h4>
                                <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Nama Karyawan</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="nama_user" />
                                      </div>
                                  </div>
								  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Username</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="username_user" />
                                      </div>
                                  </div>
								  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Password</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="password_user" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Tempat Lahir</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" name="tempat_lahir" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Tanggal Lahir</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" id="masked-input-date" name="tanggal_lahir" placeholder="yyyy-mm-dd" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Pendidikan Terakhir</label>
                                      <div class="col-md-7">
                                          <input type="text" class="form-control" id="masked-input-date" name="pend_terakhir" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Agama</label>
                                      <div class="col-md-7">
                                          <select class="form-control" name="agama_user">
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
                                          <input type="text" class="form-control" name="alamat" />
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Jabatan</label>
                                      <div class="col-md-7">
										  <input type="text" class="form-control" name="jabatan_user" placeholder="Jabatan">
                                      </div>
                                  </div>
                                  <div class="form-group m-b-10">
                                      <label class="col-md-3 control-label">Foto Karyawan</label>
                                      <div class="col-md-7">
                                          <input type="file" class="form-control" name="foto">
                                      </div>
                                  </div>
                                  <!-- Input Type Hidden -->
                                      <input type="hidden" value="<?php echo $tgl ?>" name="tanggal_masuk">
                                      <input type="hidden" name="id_kategori" value="62">
									  <input type="hidden" name="status_peker" value="Aktif">
									  
									  <?php
										$asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
										$kirik = mysqli_fetch_array($asu);
										$result2= $kirik['id_user'].$kirik['reff'];
									  ?>
									  <input type="hidden" class="form-control" name="reff" value="<?php echo $result2; ?>" readonly/>
                                      
                                  <!-- End -->
                                  <div class="modal-footer">
                                       <div class="controls">
                                          <input type="submit" name="simpan_rekrutmen" value="Simpan" class="btn width-100 btn-primary">
                                       </div>
                                  </div>
                                </form>
                              </div>
                              <!-- end panel -->
                          </div>
						  

                      <div class="col-md-6">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Member Baru</h4>
                                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Nama</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama_user">
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="user" />
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Password</label>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="pass" />
                                    </div>
                                </div>
								<?php
                                $asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $kirik = mysqli_fetch_array($asu);
                                $result2= $kirik['id_user'].$kirik['reff'];
                                $hasil1 = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$result2'");
                                 ?>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Kode Refferal</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="reff" value="<?php echo $result2; ?>" readonly/>
                                    </div>
                                </div>
								<?php
                                $kuda = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $jaran = mysqli_fetch_array($kuda);
                                $result3= $jaran['id_user'].$jaran['reff'];
                                $hasil1 = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$result3'");
                                 ?>
                                  <label>* Kode Refferal Anda : <i><b><?php echo $result3; ?></b></i></label>
                                <div class="modal-footer">
                                     <div class="controls">
                                        <input type="submit" name="registrasi_admin" class="btn width-100 btn-primary" value="Simpan">
                                        <input type="reset"  class="btn width-100 btn-primary" value="Reset">
                                     </div>
                                </div>
                              </form>
                            </div>
                            <!-- end panel -->
							
							<div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Link Refferal Anda</h4>
                                <?php
                                $aaa = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $bbb = mysqli_fetch_array($aaa);
                                $ccc= $bbb['id_user'].$bbb['reff'];
                                $ddd = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$ccc'");
                                 ?>
                                <center>
                                    <input type="text" class="form-control" placeholder="Placeholder text" value="http://localhost/softek/final-fitur/?menu=register&id=<?php echo $ccc; ?>">
                                </center><br/>
                              <center>
                                <button type="button" name="button" class="btn btn-primary">Share Link</button>
                              </center>
                            </div>
							
                        </div><br/><br/>
				<?php } else { ?>
				
				<div class="col-md-6">
                            <!-- begin panel -->
                            <div class="panel p-20">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Member Baru</h4>
                                    <form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Nama</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama_user">
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Username</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="user" />
                                    </div>
                                </div>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Password</label>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="pass" />
                                    </div>
                                </div>
								<?php
                                $asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $kirik = mysqli_fetch_array($asu);
                                $result2= $kirik['id_user'].$kirik['reff'];
                                $hasil1 = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$result2'");
                                 ?>
                                <div class="form-group m-b-7">
                                    <label class="col-md-4 control-label">Kode Refferal</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="reff" value="<?php echo $result2; ?>" readonly/>
										<input type="hidden" class="form-control" name="id_kategori" value="92"/>
                                    </div>
                                </div>
								<?php
                                $kuda = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $jaran = mysqli_fetch_array($kuda);
                                $result3= $jaran['id_user'].$jaran['reff'];
                                $hasil1 = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$result3'");
                                 ?>
                                  <label>* Kode Refferal Anda : <i><b><?php echo $result3; ?></b></i></label>
                                <div class="modal-footer">
                                     <div class="controls">
                                        <input type="submit" name="registrasi" class="btn width-100 btn-primary" value="Simpan">
                                        <input type="reset"  class="btn width-100 btn-primary" value="Reset">
                                     </div>
                                </div>
                              </form>
                            </div>
                            <!-- end panel -->
							
                        </div>
				
				<?php } ?>
					  
			</div>
		
			
			
			<?php } ?>
			
<?php }  ?>
