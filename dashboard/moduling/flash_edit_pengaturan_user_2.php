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
							$user100 = id_user($username_user);
                            $cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status=1");
                            $jml = mysqli_num_rows($cek);
                            if ($jml==0) { ?>
							
                              <div class="col-md-4">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <input type="text" class="form-control" name="isi_text[]" value="Publishing">
									  <input type="hidden" class="form-control" name="no_text[]" value="1<?php echo $baris['id_user']; ?>">
                                    </div>
                                    <div class="panel-body">
                                      <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='publishing' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='file' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='interaktif' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
								  <input type="text" class="form-control" name="isi_text[]" value="Branding">
									  <input type="hidden" class="form-control" name="no_text[]" value="4<?php echo $baris['id_user']; ?>">
									  </div>
                                  <div class="panel-body">
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='branding' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
								<input type="text" class="form-control" name="isi_text[]" value="Accounting">
								<input type="hidden" class="form-control" name="no_text[]" value="5<?php echo $baris['id_user']; ?>">
								</div>
                                <div class="panel-body">
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='accounting' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='network' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
                                  <input type="text" class="form-control" name="isi_text[]" value="Report System">
								  <input type="hidden" class="form-control" name="no_text[]" value="7<?php echo $baris['id_user']; ?>">
								  </div>
                                <div class="panel-body">
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='report' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
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
                              <div class="col-md-4">
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
									<?php 
									$h = 1;
									$hh= $h.$user;
									$hhh = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$hh'");
									$hhhh = mysqli_fetch_array($hhh);
									?>
                                      <input type="text" class="form-control" name="isi_text[]" value="<?php echo $hhhh['isi_text']?>">
									  <input type="hidden" class="form-control" name="no_text[]" value="1<?php echo $baris['id_user']; ?>">
                                    </div>
                                    <div class="panel-body">
                                    <label id="tampilPublishing" hidden><font color="red">Disabled</font></label>
                                      <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='publishing' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                       ?>
                                       <div class="clearfix m-b-10">
                                         <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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
									$i = 2;
									$ii= $i.$user;
									$iii = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$ii'");
									$iiii = mysqli_fetch_array($iii);
									?>
                                    <input type="text" class="form-control" name="isi_text[]"  value="<?php echo $iiii['isi_text']; ?>">
									<input type="hidden" class="form-control" name="no_text[]" value="2<?php echo $baris['id_user']; ?>">
                                  </div>
                                  <div class="panel-body">
                                  <label id="tampilFile" hidden><font color="red">Disabled</font></label>
                                    <div data-scrollbar="true" data-height="100px">
                                      <?php
                                      $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='file' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                       ?>
                                       <div class="clearfix m-b-10">
                                         <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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
									$j = 3;
									$jj= $j.$user;
									$jjj = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$jj'");
									$jjjj = mysqli_fetch_array($jjj);
								  ?>
                                    <input type="text" class="form-control" name="isi_text[]" value="<?php echo $jjjj['isi_text']; ?>">
									<input type="hidden" class="form-control" name="no_text[]" value="3<?php echo $baris['id_user']; ?>">
                                  </div>
                                  <div class="panel-body">
                                  <label id="tampilInteraktif" hidden><font color="red">Disabled</font></label>
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='interaktif' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                     ?>
                                     <div class="clearfix m-b-10">
                                       <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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
									$k = 4;
									$kk= $k.$user;
									$kkk = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$kk'");
									$kkkk = mysqli_fetch_array($kkk);
									?>
								  <input type="text" class="form-control" name="isi_text[]" value="<?php echo $kkkk['isi_text']; ?>">
								  <input type="hidden" class="form-control" name="no_text[]" value="4<?php echo $baris['id_user']; ?>">
								  </div>
                                  <div class="panel-body">
                                  <label id="tampilBranding" hidden><font color="red">Disabled</font></label>
                                    <div data-scrollbar="true" data-height="100px">
                                    <?php
                                    $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='branding' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                     ?>
                                     <div class="clearfix m-b-10">
                                       <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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
									$l = 5;
									$ll= $l.$user;
									$lll = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$ll'");
									$llll = mysqli_fetch_array($lll);
									?>
								<input type="text" class="form-control" name="isi_text[]" value="<?php echo $llll['isi_text'] ?>">
								<input type="hidden" class="form-control" name="no_text[]" value="5<?php echo $baris['id_user']; ?>">
								</div>
                                <div class="panel-body">
                                <label id="tampilAccounting" hidden><font color="red">Disabled</font></label>
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='accounting' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                   ?>
                                   <div class="clearfix m-b-10">
                                     <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status='1' and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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
									$m = 6;
									$mm= $m.$user;
									$mmm = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$mm'");
									$mmmm = mysqli_fetch_array($mmm);
							  ?>
                                <input type="text" class="form-control" name="isi_text[]" value="<?php echo $mmmm['isi_text'] ?>">
								<input type="hidden" class="form-control" name="no_text[]" value="6<?php echo $baris['id_user']; ?>">
								</div>
                              <div class="panel-body">
                              <label id="tampilNetwork" hidden><font color="red">Disabled</font></label>
                                <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='network' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                    ?>
                                    <div class="clearfix m-b-10">
                                      <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status=1 and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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
									$n = 7;
									$nn= $n.$user;
									$nnn = mysqli_query($id_mysqli,"SELECT * FROM text where id_user='$user' and nomor='$nn'");
									$nnnn = mysqli_fetch_array($nnn);
									?>
                                  <input type="text" class="form-control" name="isi_text[]" value="<?php echo $nnnn['isi_text'] ?>">
								  <input type="hidden" class="form-control" name="no_text[]" value="7<?php echo $baris['id_user']; ?>">
								  </div>
                                <div class="panel-body">
                                <label id="tampilReportSystem" hidden><font color="red">Disabled</font></label>
                                  <div data-scrollbar="true" data-height="100px">
                                  <?php
                                  $sql = mysqli_query($id_mysqli,"SELECT * FROM text INNER JOIN kategori ON text.id_kategori=kategori.id_kategori where kategori.fitur='report' and text.id_user='$user100' GROUP BY kategori.id_kategori DESC");
                                      while ($result=mysqli_fetch_array($sql)) {
                                   ?>
                                   <div class="clearfix m-b-10">
                                     <label class="checkbox-inline">
                                           <?php
                                           $checkbox_cek = mysqli_query($id_mysqli,"SELECT * from text where id_user='$baris[id_user]' and status=1 and id_kategori='$result[id_kategori]'");
                                           $testku = mysqli_num_rows($checkbox_cek);
                                           if ($testku==0) {?>
                                             <input type="checkbox" name="id_kategori[]" value="<?php echo $result['id_kategori']?>">
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