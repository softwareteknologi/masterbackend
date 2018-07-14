 <?php
              $hasil = mysqli_query($id_mysqli,"SELECT * FROM user");
              $no=1;
              while($baris=mysqli_fetch_array($hasil)){	
            ?>
        <!-- MODAL EDIT -->
        <div id="editpengaturan-<?php echo $baris['id_user'] ?>" class="modal fade">
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
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='publishing' GROUP BY nama_kategori ORDER BY id_kategori DESC");
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
                        

                            <?php } else { ?>
							
                              <?php 
							$user= $baris['id_user'];
							?>
                              <div class="col-md-4">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
									<?php 
									$a = 1;
									$aa= $a.$user;
									$aaa = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$aa'");
									$aaaa = mysqli_fetch_array($aaa);
									?>
                                      <input type="text" class="form-control" name="isi_text[]" value="<?php echo $aaaa['isi_text']?>">
									  <input type="hidden" class="form-control" name="no_text[]" value="1<?php echo $baris['id_user']; ?>">
                                    </div>
                                    <div class="panel-body">
                                    <label id="tampilPublishing" hidden><font color="red">Disabled</font></label>
                                      <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM kategori where fitur='publishing' GROUP BY nama_kategori ORDER BY id_kategori DESC");
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
									$b = 2;
									$bb= $b.$user;
									$bbb = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$bb'");
									$bbbb = mysqli_fetch_array($bbb);
									?>
                                    <input type="text" class="form-control" name="isi_text[]"  value="<?php echo $bbbb['isi_text']; ?>">
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
									$c = 3;
									$cc= $c.$user;
									$ccc = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$cc'");
									$cccc = mysqli_fetch_array($ccc);
								  ?>
                                    <input type="text" class="form-control" name="isi_text[]" value="<?php echo $cccc['isi_text']; ?>">
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
									$d = 4;
									$dd= $d.$user;
									$ddd = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$dd'");
									$dddd = mysqli_fetch_array($ddd);
									?>
								  <input type="text" class="form-control" name="isi_text[]" value="<?php echo $dddd['isi_text']; ?>">
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
									$e = 5;
									$ee= $e.$user;
									$eee = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$ee'");
									$eeee = mysqli_fetch_array($eee);
									?>
								<input type="text" class="form-control" name="isi_text[]" value="<?php echo $eeee['isi_text'] ?>">
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
                          </div>
                          <div class="col-md-4">
                            <div class="panel panel-default">
                              <div class="panel-heading">
							  <?php
									$f = 6;
									$ff= $f.$user;
									$fff = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$ff'");
									$ffff = mysqli_fetch_array($fff);
							  ?>
                                <input type="text" class="form-control" name="isi_text[]" value="<?php echo $ffff['isi_text'] ?>">
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
									$g = 7;
									$gg= $g.$user;
									$ggg = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$gg'");
									$gggg = mysqli_fetch_array($ggg);
									?>
                                  <input type="text" class="form-control" name="isi_text[]" value="<?php echo $gggg['isi_text'] ?>">
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