<?php 
                  $user = id_user($username_user); 
                  $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'"); 
                  while($hasil=mysqli_fetch_array($sql)){
                  $id=$hasil['id_kategori'];
                  $text=$hasil['isi_text'];
                  $a=4; 
				  $nomor=$a.$user; 
				  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
				  $result= mysqli_fetch_array($hasil);
				  $status=$result['status'];
				  $id_kategori=$result['id_kategori'];
				  $isi_text=$result['isi_text'];
              ?>

              
                    <?php
                        if($username_user && $isi_text && $id_kategori=='39' && $status=='1'){ 
					?>
					<div class="row">
				<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                   <div class="col-md-9">
                            
                            <div class="panel p-20" style="
    height: 410px;
">
                                <h4 class="form-header"><span class="icon text-primary">+</span> Input Text/ Link</h4>
                                <div class="form-group m-b-10">
                                    <div class="col-md-12">
										
										<textarea name="isi_page" cols="30" rows="10"></textarea>
                                    </div>
                                </div><br><br><br><br><br><br>
                            </div>
                        </div>



                     <div class="col-md-3">
                            
                            <div class="panel p-20">
                                <div class="form-group">
                                    <label class="control-label">Pilih Kategori</label>
                                        <select id="formInput1226" class="form-control" name="id_kategori">
                                          <?php
                                              $user = id_user($username_user); // Mengubah session username menjadi id user
                                              $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
                                              while($hasil=mysqli_fetch_array($sql)){
                                              $id=$hasil['id_kategori'];
                                              $text=$hasil['isi_text'];
                                               $a=4; // kode hak akses branding
											  $nomor=$a.$user;
											  $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
											  $result= mysqli_fetch_array($hasil);
											  $status=$result['status'];
											  $id_kategori=$result['id_kategori'];
											  $isi_text=$result['isi_text'];
                                          ?>


                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='7' && $status=='1')
                                          echo '
                                              <option value="7">Banner</option>' ;?>

                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='8' && $status=='1')
                                          echo '
                                              <option value="8">Logo</option>' ;?>

                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='9' && $status=='1')
                                          echo '
                                              <option value="9">Iklan Atas</option>' ;?>
										  <?php
                                          if($username_user && $isi_text && $id_kategori=='98' && $status=='1')
                                          echo '
                                              <option value="98">Iklan Sidebar Kanan Atas</option>' ;?>
										  <?php
                                          if($username_user && $isi_text && $id_kategori=='99' && $status=='1')
                                          echo '
                                              <option value="99">Iklan Sidebar Kanan Bawah</option>' ;?>
										  <?php
                                          if($username_user && $isi_text && $id_kategori=='100' && $status=='1')
                                          echo '
                                              <option value="100">Iklan Konten Atas</option>' ;?>
										  <?php
										  if($username_user && $isi_text && $id_kategori=='101' && $status=='1')
                                          echo '
                                              <option value="101">Iklan Banner</option>' ;?>
										  <?php
										  if($username_user && $isi_text && $id_kategori=='102' && $status=='1')
                                          echo '
                                              <option value="102">Iklan Konten Bawah</option>' ;?>
										  <?php
										  if($username_user && $isi_text && $id_kategori=='103' && $status=='1')
                                          echo '
                                              <option value="103">Background</option>' ;?>
										  <?php
										  if($username_user && $isi_text && $id_kategori=='91' && $status=='1')
                                          echo '
                                              <option value="91">Redaksi</option>' ;?>
										  <?php
										  if($username_user && $isi_text && $id_kategori=='107' && $status=='1')
                                          echo '
                                              <option value="107">Peringatan Komentar</option>' ;?>
										  <?php
										  if($username_user && $isi_text && $id_kategori=='105' && $status=='1')
                                          echo '
                                              <option value="105">Teks Berjalan Atas</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='10' && $status=='1')
                                          echo '
                                              <option value="10">Title</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='11' && $status=='1')
                                          echo '
                                              <option value="11">Tagline</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='12' && $status=='1')
                                          echo '
                                              <option value="12">Copyright</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='13' && $status=='1')
                                          echo '
                                              <option value="13">Keyword</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='14' && $status=='1')
                                          echo '
                                              <option value="14">Tag</option>' ;?>
                                          <?php
                                          if($username_user && $isi_text && $id_kategori=='15' && $status=='1')
											  echo '<option value="15">Discription</option>' ;?>											  
											<?php                                          
												if($username_user && $isi_text && $id_kategori=='112' && $status=='1')
													echo '<option value="112">Iklan Detile Bawah</option>' ;?>

                                            <?php }  ?>

                                        </select>
                                </div>
								

                                <div class="form-group">
                                    <label class="control-label">Pilih Gambar</label>
                                        <input type="file" class="form-control" name="nama_file"><br>
                                    <code class="alert alert-danger">Input gambar tanpa spasi</code>
                                </div>
                             
                                <div class="form-group">
								<input type="hidden" value="<?php echo $tgl; ?>" name="date_time">
								<input type="hidden" value="<?php echo $user; ?>" name="id_user">
								<input type="hidden" name="sub_id_kategori" value="92">
                                <input type="hidden" name="id_file" value="<?php echo $angka; ?>">
								<input type="hidden" name="status_hapus" value="aktif">
								</div>
                            
                                <input type="submit" name="simpan_branding" class="btn width-100 btn-primary" value="Simpan">
                            </div>
                            
                        </div>
                    </form>
                </div>
                    
					<!-- begin row -->
                
					<div class="row">
                    <div class="col-md-12">
                        <div class="panel pagination-info clearfix m-b-0"><br>
                         <h4 class="form-header">Data Branding</h4>
						 <?php
						$user1=id_user($username_user); // Mengubah session username menjadi id user
								
								$asu = mysqli_query($id_mysqli,"SELECT * FROM user where username_user='$username_user'");
                                $kirik = mysqli_fetch_array($asu);
                                $result2= $kirik['id_user'].$kirik['reff'];
								  $hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur =  'branding' AND status_hapus =  'aktif' AND user.id_user =  '$user1' UNION SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file = file.id_file AND page.id_kategori = kategori.id_kategori AND page.id_user = user.id_user WHERE kategori.fitur =  'branding' AND status_hapus =  'aktif' AND user.reff LIKE '%$result2' ORDER BY date_time DESC");
                                  //pagination config start
									//$rpp = 5; // jumlah record per halaman
									//$reload = "index.php?menu=branding";
									//$page = intval($_GET["page"]);
									//if($page<=0) $page = 1;  
									//$tcount = mysqli_num_rows($hasil);
									//$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
									//$count = 0;
									//$i = ($page-1)*$rpp;
									//$no_urut = ($page-1)*$rpp;
								//pagination config end
								
						 ?>
                        <table id="data-table" data-order='[[1,"desc"]]' class="table table-bordered table-hover">
                            <thead>
                                <tr class="info">
                                    <th>No</th>
                                    <th>Isi</th>
                                    <th>Tanggal Diperbarui</th>
                                    <th>Nama Kategori</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								/* while(($count<$rpp) && ($i<$tcount)) {
								mysqli_data_seek($hasil,$i); */
                                $no=1; while($baris=mysqli_fetch_array($hasil)){
                                ?>
                                <tr>
                                    <td align="center"><?php echo ++$no_urut; ?></td>
                                    <td align="center"><?php echo "".substr($baris['isi_page'],0,300)."";?></td>
                                    <td align="center"><?php echo $baris['date_time'];?></td>
                                    <td align="center"><?php echo $baris['nama_kategori'];?></td>
                                    <td align="center">
                                        <a href="index.php?menu=detail_branding&id=<?php echo $baris['id_page']; ?>" target="_blank" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Detail</a>
                                        <a href="index.php?menu=edit_branding&id=<?php echo $baris['id_page']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i> Edit</a>
										<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
											<input type="hidden" name="id_page" value="<?php echo $baris['id_page'] ?>">
											<input type="submit" name="hapus_branding" class="btn btn-danger btn-xs" value="Hapus">
										</form>
                                    </td>
                                </tr>
								<?php $no++; }  ?>
                                <?php  //$i++; $count++; } ?>
                            </tbody>
                        </table>
						<!--<div><?php //echo paginate_one($reload, $page, $tpages); ?></div>-->
                    </div>
                    </div>
                </div>


        


        
        <?php } ?>
<?php } ?>
