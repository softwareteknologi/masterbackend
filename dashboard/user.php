<?php


$tgl=date('Y-m-d H:m:s');

?>

<script type="text/javascript">
        function klikPublishing(pilihPublishing) {
            var tampilPublishing = document.getElementById("tampilPublishing");
            tampilPublishing.hidden = pilihPublishing.checked ? false : true;
            if (!tampilPublishing.hidden) {
                tampilPublishing.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikBranding(pilihBranding) {
            var tampilPublishing = document.getElementById("tampilBranding");
            tampilBranding.hidden = pilihBranding.checked ? false : true;
            if (!tampilBranding.hidden) {
                tampilBranding.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikNetwork(pilihNetwork) {
            var tampilNetwork = document.getElementById("tampilNetwork");
            tampilNetwork.hidden = pilihNetwork.checked ? false : true;
            if (!tampilNetwork.hidden) {
                tampilNetwork.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikFile(pilihFile) {
            var tampilFile = document.getElementById("tampilFile");
            tampilFile.hidden = pilihFile.checked ? false : true;
            if (!tampilFile.hidden) {
                tampilFile.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikAccounting(pilihAccounting) {
            var tampilAccounting = document.getElementById("tampilAccounting");
            tampilAccounting.hidden = pilihAccounting.checked ? false : true;
            if (!tampilAccounting.hidden) {
                tampilAccounting.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikReportSystem(pilihReportSystem) {
            var tampilReportSystem = document.getElementById("tampilReportSystem");
            tampilReportSystem.hidden = pilihReportSystem.checked ? false : true;
            if (!tampilReportSystem.hidden) {
                tampilReportSystem.focus();
            }
        }
    </script>

<script type="text/javascript">
        function klikInteraktif(pilihInteraktif) {
            var tampilInteraktif = document.getElementById("tampilInteraktif");
            tampilInteraktif.hidden = pilihInteraktif.checked ? false : true;
            if (!tampilInteraktif.hidden) {
                tampilInteraktif.focus();
            }
        }
    </script>

<!-- begin #content -->
        <div id="content" class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel pagination-info clearfix m-b-0"><br>
                        <h4 class="form-header">&nbsp Data User Software Technologi
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="../register.php" class="btn btn-primary">Register</a></h4>
                    <table id="data-table" data-order='[[0,"asc"]]' class="table table-bordered table-hover">
                        <thead>
                            <tr class="info">
                                <th>NO</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
                            $no=1;
                            while($baris=mysqli_fetch_array($hasil)){
                          ?>
                            <tr>
                                <td align="center"><?php echo $no++ ?></td>
                                <td align="center"><?php echo $baris['nama_user'];?></td>
                                <td align="center"><?php echo $baris['username_user'];?></td>
                                <td align="center"><?php echo $baris['password_user'];?></td>
                                <td align="center">
                                    <a data-toggle="modal" data-target="#detail-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                    <a data-toggle="modal" data-target="#edit-<?php echo $baris['id_user'] ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Pengaturan</a>
                                </td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
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
            <div class="modal-dialog" style="width:90%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title" align="center">Pengaturan Data User <?php echo $baris['nama_user'] ?></h4>
                    </div>
                      <div class="modal-body" style="width:100%">
                        <div class="row">
                          <div class="col-md-12">
                            <form action="proses.php" method="post" enctype="multipart/form-data">

                        <!-- MENU FITUR -->
                            <h4 class="modal-title" align="left">Menu Dashboard Fitur</h4><hr>
                            <?php
                            $cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status=1");
                            $jml = mysqli_num_rows($cek);
                            if ($jml==0) {?>
							
                              <div class="col-md-4">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <input type="text" class="form-control" name="isi_text[]" value="Publishing">
									  <input type="hidden" class="form-control" name="no_text[]" value="1<?php echo $baris['id_user']; ?>">
                                    </div>
                                    <div class="panel-body">
                                      <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='publishing' ORDER BY id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                       ?>
                                       <div class="clearfix m-b-10">
                                         <label class="checkbox-inline">
                                           <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>"><input type="hidden" name="status" value="1">
                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                       </div>
                                      <?php } ?>
                                    </div>
                                  </div>
                                </div>
								
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <input type="text" class="form-control" name="isi_text[]"  value="File">
									  <input type="hidden" class="form-control" name="no_text[]" value="2<?php echo $baris['id_user']; ?>">
                                  </div>
                                  <div class="panel-body">
                                    <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='file' ORDER BY id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                       ?>
                                       <div class="clearfix m-b-10">
                                         <label class="checkbox-inline">
                                           <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>"><input type="hidden" name="status" value="1">
                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                       </div>
                                      <?php } ?>
                                    </div>
                                  </div>
                                </div>
								
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <input type="text" class="form-control" name="isi_text[]" value="Interaktif">
									  <input type="hidden" class="form-control" name="no_text[]" value="3<?php echo $baris['id_user']; ?>">
                                  </div>
                                  <div class="panel-body">
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='interaktif' ORDER BY id_kategori DESC");
                                    while ($result=mysqli_fetch_array($sql)) {
                                     ?>
                                     <div class="clearfix m-b-10">
                                       <label class="checkbox-inline">
                                         <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>"><input type="hidden" name="status" value="1">
                                        <?php echo $result['nama_kategori'] ?>
                                       </label>
                                     </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              </div>
							  
							  
                              <div class="col-md-4">
                                <div class="panel panel-default">
                                  <div class="panel-heading"><input type="text" class="form-control" name="isi_text[]" value="Branding">
									  <input type="hidden" class="form-control" name="no_text[]" value="4<?php echo $baris['id_user']; ?>"></div>
                                  <div class="panel-body">
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='branding' ORDER BY id_kategori DESC");
                                    while ($result=mysqli_fetch_array($sql)) {
                                     ?>
                                     <div class="clearfix m-b-10">
                                       <label class="checkbox-inline">
                                         <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>"><input type="hidden" name="status" value="1">
                                        <?php echo $result['nama_kategori'] ?>
                                       </label>
                                     </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading"><input type="text" class="form-control" name="isi_text[]" value="Accounting">
								
									  <input type="hidden" class="form-control" name="no_text[]" value="5<?php echo $baris['id_user']; ?>"></div>
                                <div class="panel-body">
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='accounting' ORDER BY id_kategori ASC");
                                  while ($result=mysqli_fetch_array($sql)) {
                                   ?>
                                   <div class="clearfix m-b-10">
                                     <label class="checkbox-inline">

                                       <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>"><input type="hidden" name="status" value="1">
                                      <?php echo $result['nama_kategori'] ?>
                                     </label>
                                   </div>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>														
							<!--<div class="panel panel-default">                                
								<div class="panel-heading">
									<input type="text" class="form-control" name="isi_text[]" value="User">
									
									  <input type="text" class="form-control" name="no_text[]" value="6<?php //echo $baris['id_user']; ?>">
								</div>                                
								<div class="panel-body">                                  
									<div data-scrollbar="true" data-height="100px">                                  
										<?php                                  
										//$sql = mysqli_query("SELECT * FROM kategori where fitur='user' ORDER BY id_kategori ASC");                                  
										//while ($result=mysqli_fetch_array($sql)) {                                  
										?>                                  
										<div class="clearfix m-b-10">                                     
											<label class="checkbox-inline">                                       
												<input type="checkbox" name="id_kategori[]" value="<?php //echo $result['id_kategori']?>">
												<input type="hidden" name="status" value="1">                                      
												<?php //echo $result['nama_kategori'] ?>                                     
											</label>                                   
										</div>                                  
										<?php //} ?>                                
									</div>                              
								</div>                            
							</div>-->
                          </div>
                          <div class="col-md-4">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <input type="text" class="form-control" name="isi_text[]" value="Network">
								<input type="hidden" class="form-control" name="no_text[]" value="6<?php echo $baris['id_user']; ?>">
						  </div>
                              <div class="panel-body">
                                <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='network'");
                                  while ($result=mysqli_fetch_array($sql)) {
                                    ?>
                                    <div class="clearfix m-b-10">
                                      <label class="checkbox-inline">
                                        <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
										<input type="hidden" name="status" value="1">
                                       <?php echo $result['nama_kategori'] ?>
                                      </label>
                                    </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                          <div class="panel panel-default">
                                <div class="panel-heading">
                                  <input type="text" class="form-control" name="isi_text[]" value="Report System">
								  <input type="hidden" class="form-control" name="no_text[]" value="7<?php echo $baris['id_user']; ?>">
								  </div>
                                <div class="panel-body">
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='report' ORDER BY id_kategori DESC LIMIT 1");
                                  while ($result=mysqli_fetch_array($sql)) {
                                   ?>
                                   <div class="clearfix m-b-10">
                                     <label class="checkbox-inline">

                                       <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>"><input type="hidden" name="status" value="1">
                                      <?php echo $result['nama_kategori'] ?>
                                     </label>
                                   </div>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                            </div>
                            <!-- END -->

  
                          <div class="modal-footer">
                            <input type="hidden" name="id_user" value="<?php echo $baris['id_user'] ?>">
                            <button type="submit" class="btn btn-primary" name="simpan_fitur">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                              <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                          </div>
                        

                            <?php } else { 
							?>
							<?php 
							$user= $baris['id_user'];
							?>
                              <div class="col-md-4">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
									<?php 
									$no1 = 1;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
									?>
                                      <input type="text" class="form-control" name="isi_text[]" value="<?php echo $abb['isi_text']?>">
									  <input type="hidden" class="form-control" name="no_text[]" value="1<?php echo $baris['id_user']; ?>">
                                    </div>
                                    <div class="panel-body">
                                    <label id="tampilPublishing" hidden><font color="red">Disabled</font></label>
                                      <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='publishing' ORDER BY id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                       ?>
                                       <div class="clearfix m-b-10">
                                         <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>
                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihPublishing" onclick="klikPublishing(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                       </div>
                                      <?php } ?>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
								  <?php 
									$no1 = 2;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
									?>
                                    <input type="text" class="form-control" name="isi_text[]"  value="<?php echo $abb['isi_text']; ?>">
									<input type="hidden" class="form-control" name="no_text[]" value="2<?php echo $baris['id_user']; ?>">
                                  </div>
                                  <div class="panel-body">
                                  <label id="tampilFile" hidden><font color="red">Disabled</font></label>
                                    <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='file' ORDER BY id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                       ?>
                                       <div class="clearfix m-b-10">
                                         <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>
                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihFile" onclick="klikFile(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                       </div>
                                      <?php } ?>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
								  <?php 
									$no1 = 3;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
								  ?>
                                    <input type="text" class="form-control" name="isi_text[]" value="<?php echo $abb['isi_text']; ?>">
									<input type="hidden" class="form-control" name="no_text[]" value="3<?php echo $baris['id_user']; ?>">
                                  </div>
                                  <div class="panel-body">
                                  <label id="tampilInteraktif" hidden><font color="red">Disabled</font></label>
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='interaktif' ORDER BY id_kategori DESC");
                                    while ($result=mysqli_fetch_array($sql)) {
                                     ?>
                                     <div class="clearfix m-b-10">
                                       <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>
                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihInteraktif" onclick="klikInteraktif(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                     </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              </div>
							  
                              <div class="col-md-4">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
									<?php
									$no1 = 4;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
									?>
								  <input type="text" class="form-control" name="isi_text[]" value="<?php echo $abb['isi_text']; ?>">
								  <input type="hidden" class="form-control" name="no_text[]" value="4<?php echo $baris['id_user']; ?>">
								  </div>
                                  <div class="panel-body">
                                  <label id="tampilBranding" hidden><font color="red">Disabled</font></label>
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='branding' ORDER BY id_kategori DESC");
                                    while ($result=mysqli_fetch_array($sql)) {
                                     ?>
                                     <div class="clearfix m-b-10">
                                       <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>
                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihBranding" onclick="klikBranding(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                     </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
									<?php
									$no1 = 5;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
									?>
								<input type="text" class="form-control" name="isi_text[]" value="<?php echo $abb['isi_text'] ?>">
								<input type="hidden" class="form-control" name="no_text[]" value="5<?php echo $baris['id_user']; ?>">
								</div>
                                <div class="panel-body">
                                <label id="tampilAccounting" hidden><font color="red">Disabled</font></label>
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='accounting' ORDER BY id_kategori ASC");
                                  while ($result=mysqli_fetch_array($sql)) {
                                   ?>
                                   <div class="clearfix m-b-10">
                                     <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>

                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihAccounting" onclick="klikAccounting(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                   </div>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
							
							<!--<div class="panel panel-default">                                
								<div class="panel-heading">
								<input type="text" class="form-control" name="isi_text[]" value="User">
								</div>                                
								<div class="panel-body">                                
									<label id="tampilAccounting" hidden><font color="red">Disabled</font></label>                                  <div data-scrollbar="true" data-height="100px">                                  
										<?php                                  
										//$sql = mysqli_query("SELECT * FROM kategori where fitur='user' ORDER BY id_kategori ASC");                                  
										//while ($result=mysqli_fetch_array($sql)) {                                   
										?>                                   
									<div class="clearfix m-b-10">                                     
										<label class="checkbox-inline">                                           
											<?php                                           
											//$checkbox_cek = mysqli_query("SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");                                          
											//$testku = mysqli_num_rows($checkbox_cek);                                           
											//if ($testku==0) {?>                                             
											<input type="checkbox" name="id_kategori[]" value="<?php// echo $result['id_kategori']?>">                                          
											<?php// } else {?>                                                                                       
											<input type="checkbox" name="update_kategori[]" value="<?php //echo $result['id_kategori']?>" unchecked id="pilihAccounting" onclick="klikAccounting(this)">                                           
											<input type="checkbox" value="<?php// echo $result['id_kategori']?>" checked disabled>                                            
											<?php// }  ?>                                          
											<?php //echo $result['nama_kategori'] ?>                                         
										</label>                                  
									</div>                                  
									<?php //} ?>                                
									</div>                              
								</div>                            
							</div>-->
                          </div>
                          <div class="col-md-4">
                            <div class="panel panel-default">
                              <div class="panel-heading">
							  <?php
									$no1 = 6;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
							  ?>
                                <input type="text" class="form-control" name="isi_text[]" value="<?php echo $abb['isi_text'] ?>">
								<input type="hidden" class="form-control" name="no_text[]" value="6<?php echo $baris['id_user']; ?>">
								</div>
                              <div class="panel-body">
                              <label id="tampilNetwork" hidden><font color="red">Disabled</font></label>
                                <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='network'");
                                  while ($result=mysqli_fetch_array($sql)) {
                                    ?>
                                    <div class="clearfix m-b-10">
                                      <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status=1 and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>
                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihNetwork" onclick="klikNetwork(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                    </div>
                                    <?php } ?>
                                  </div>
                                </div>
                              </div>
                          <div class="panel panel-default">
                                <div class="panel-heading">
									<?php
									$no1 = 7;
									$gab= $no1.$user;
									$aww = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gab'");
									$abb = mysqli_fetch_array($aww);
									?>
                                  <input type="text" class="form-control" name="isi_text[]" value="<?php echo $abb['isi_text'] ?>">
								  <input type="hidden" class="form-control" name="no_text[]" value="7<?php echo $baris['id_user']; ?>">
								  </div>
                                <div class="panel-body">
                                <label id="tampilReportSystem" hidden><font color="red">Disabled</font></label>
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='report' ORDER BY id_kategori DESC LIMIT 1");
                                  while ($result=mysqli_fetch_array($sql)) {
                                   ?>
                                   <div class="clearfix m-b-10">
                                     <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status=1 and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
											 <input type="hidden" name="status" value="1">
                                          <?php } else {?>
                                            
                                           <input type="checkbox" name="update_kategori[]" value="<?php echo $result['id_kategori']?>" unchecked id="pilihReportSystem" onclick="klikReportSystem(this)">
                                           <input type="checkbox" value="<?php echo $result['id_kategori']?>" checked disabled>

                                            <?php }  ?>

                                          <?php echo $result['nama_kategori'] ?>
                                         </label>
                                   </div>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                            </div>
                            <!-- END -->
							
                              <!-- end panel -->
                          <div class="modal-footer">
                            <input type="hidden" name="id_user" value="<?php echo $baris['id_user'] ?>">
                            <button type="submit" class="btn btn-primary" name="update_fitur">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                              <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                          </div>
						  <?php } ?>
						  </form>
						  </div>
						  </div>
						  </div>
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
	  
			
			
			
			
			
	