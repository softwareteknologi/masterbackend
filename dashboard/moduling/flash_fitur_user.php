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
                      // ---------------------------------------- DATA USER ------------------------------------------------------
                      // -------------------------------------------------------------------------------------------------------------
                      ?>
                      <?php
                          if($username_user && $isi_text && $id_kategori=='43' && $status=='1'){ ?>
						  <?php if($user==1){ ?>
							<br/><div class="row">
                <div class="col-md-12">
                    <div class="panel pagination-info clearfix m-b-0"><br>
                        <h4 class="form-header">&nbsp Data User Software Technologi</h4>
                    <table  class="table table-bordered table-hover">
                        <thead>
                            <tr class="info">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						
						<?php
                                $sss = mysqli_query($id_mysqli,"SELECT * FROM user");
								//pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=network";
									$page = intval(isset($_GET['page']) ? $_GET['page'] : "");
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($sss);
									$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									$count = 0;
									$i = ($page-1)*$rpp;
									$no_urut = ($page-1)*$rpp;
								//pagination config end
                        ?>
						
                          <?php
						  while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($sss,$i);
						  $baris = mysqli_fetch_array($sss); 
						  ?>
                            <tr>
                                <td align="center"><?php echo ++$no_urut; ?></td>
                                <td align="center"><?php echo $baris['nama_user'];?></td>
                                <td align="center"><?php echo $baris['username_user'];?></td>
                                <td align="center"><?php echo $baris['password_user'];?></td>
                                <td align="center">
                                    <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                    <a data-toggle="modal" data-target="#editpengaturan-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Pengaturan</a>
									<a data-toggle="modal" data-target="#list_login-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-list"></i> List Login</a>
                                </td>
                            </tr>
                                <?php $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                </div>
                </div>
            </div>

           <?php include "flash_edit_pengaturan_user.php"; ?>


        <?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <!-- MODAL DETAIL -->
            <div id="detail-<?php echo $baris['id_user'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail Data User <?php echo $baris['nama_user'] ?></h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Lengkap</td>
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
                              </tbody>
                            </table>
                    </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
			<!-- MODAL LIST LOGIN -->
            <div id="list_login-<?php echo $baris['id_user'] ?>" class="modal fade">
                <div class="modal-dialog" style="width:90%">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail Login <?php echo $baris['nama_user'] ?></h4>
                        </div>
                        <div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
						<form action="proses.php" method="post" enctype="multipart/form-data">
						  <div class="col-md-3">
							<select class="form-control" name="bulan">
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						  </div>
						  <div class="col-md-3">
							<select class="form-control" name="tahun">
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
							</select>
						  </div>
						  <div class="col-md-3">
							<input type="submit" name="" class="btn btn-primary" value="Lihat"><br><br>
						  </div>
						  </form>
						</div>
						<div class="col-md-2"></div>
                            <table class="table table-bordered table-hover">
                              <thead>
							  <th>Tangal Login</th>
							  <th>Waktu Login</th>
							  <th>Tanggal Logout</th>
							  <th>Waktu Logout</th>
							  <th>Total Waktu Login</th>
							  </thead>
							  <tbody>
							  <?php
								$list = mysqli_query($id_mysqli,"SELECT * FROM user INNER JOIN file ON user.id_user=file.id_user WHERE user.id_user='$baris[id_user]'");
								while($login = mysqli_fetch_array($list)){
							  ?>
							  <tr>
							  <td><?php echo list_tanggal($login['tgl_login']) ?></td>
							  <td><?php echo $login['waktu_login'] ?></td>
							  <td><?php echo list_tanggal($login['tgl_logout']) ?></td>
							  <td><?php echo $login['waktu_logout'] ?></td>
							  <td><?php echo $login['total_waktu'] ?></td>
							  <tr>
								<?php }?>
							  </tbody>
                            </table>
							<?php
								$list2 = mysqli_query($id_mysqli,"SELECT SUM(total_waktu) as jumlah FROM user INNER JOIN file ON user.id_user=file.id_user WHERE user.id_user='$baris[id_user]'");
								$wow = mysqli_fetch_array($list2);
							?>
							<label>Total Waktu Login Per 26 Hari : <b><?php echo $wow['jumlah']; ?> Jam <b/> </label>

                    </div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
      <?php } ?>
						  <?php } else {?>
							<br/><div class="row">
                <div class="col-md-12">
                    <div class="panel pagination-info clearfix m-b-0"><br>
                        <h4 class="form-header">&nbsp Data User</h4>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="info">
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                                $aaaaaa = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $bbbbbb = mysqli_fetch_array($aaaaaa);
                                $cccccc= $bbbbbb['id_user'].$bbbbbb['reff'];
                                $dddddd = mysqli_query($id_mysqli,"SELECT * FROM user WHERE reff='$cccccc'");
								//pagination config start
									$rpp = 5; // jumlah record per halaman
									$reload = "index.php?menu=network";
									$page = intval(isset($_GET['page']) ? $_GET['page'] : "");
									if($page<=0) $page = 1;  
									$tcount = mysqli_num_rows($dddddd);
									$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									$count = 0;
									$i = ($page-1)*$rpp;
									$no_urut = ($page-1)*$rpp;
								//pagination config end
                        ?>
						
                          <?php 
						  while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($dddddd,$i);
						  $baris = mysqli_fetch_array($dddddd);
						  ?>
                            <tr>
                                <td align="center"><?php echo ++$no_urut; ?></td>
                                <td align="center"><?php echo $baris['nama_user'];?></td>
                                <td align="center"><?php echo $baris['username_user'];?></td>
                                <td align="center"><?php echo $baris['password_user'];?></td>
                                <td align="center">
                                    <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                    <a data-toggle="modal" data-target="#editpengaturan-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Pengaturan</a>
                                </td>
                            </tr>
                                <?php $i++; $count++; } ?>
                            </tbody>
                        </table>
						<div><?php echo paginate_one($reload, $page, $tpages); ?></div>
                </div>
                </div>
            </div>

            <?php include "flash_edit_pengaturan_user_2.php"; ?>


        <?php
            $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
            $no=1;
            while($baris=mysqli_fetch_array($hasil)){
        ?>
            <!-- MODAL DETAIL -->
            <div id="detail-<?php echo $baris['id_user'] ?>" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail Data User <?php echo $baris['nama_user'] ?></h4>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-hover">
                              <tbody>
                                <tr>
                                  <td class="col-md-1 col-sm-2">Nama Lengkap</td>
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
			<?php } ?>