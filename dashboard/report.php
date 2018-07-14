<?php
$auto=mysqli_query($id_mysqli,"SELECT * FROM page ORDER BY id_page DESC LIMIT 1");
$no=mysqli_fetch_array($auto);

//if($_GET[tampil]=='1')
//$angka=$_GET[no];
//else
$angka=$no['id_page']+2;

$tgl=date('Y-m-d H:m:s');

?>
<!-- begin #content -->

		<div id="content" class="content">
	<?php
          $user = id_user($username_user);
          $sql= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1'");
          while($hasil=mysqli_fetch_array($sql)){
          $id=$hasil['id_kategori'];
          $text=$hasil['isi_text'];
		  $a=7;
		  $nomor=$a.$user;
          $hasil= mysqli_query($id_mysqli,"SELECT * From text where id_user='$user' AND status='1' AND id_kategori='$id' AND isi_text='$text' and nomor='$nomor'");
          $result= mysqli_fetch_array($hasil);
          $status=$result['status'];
          $id_kategori=$result['id_kategori'];
          $isi_text=$result['isi_text'];
        ?>
			<?php
              // -------------------------------------------------------------------------------------------------------------
              // ---------------------------------------- SYSTEM REPORT ------------------------------------------------------
              // -------------------------------------------------------------------------------------------------------------
              ?>
            <?php
            if($username_user && $isi_text && $id_kategori=='44' && $status=='1'){ ?>

			<!-- begin row -->

			<div class="row">

                <!-- begin col-3 -->
			
                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-inverse text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-users"></i></div>

                        <div class="widget-stat-info">
						
							<?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_publishing FROM page WHERE id_kategori='38'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Publishing</div>

                            <div class="widget-stat-number"><?php echo $baris['report_publishing']; ?> 
								<a data-toggle="modal" data-target="#publishing" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
							</div>
							
							<?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 80%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->

                <!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-success text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-users"></i></div>

                        <div class="widget-stat-info">
						
							<?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_management_project FROM page WHERE id_kategori='51'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Management Project</div>

                            <div class="widget-stat-number"><?php echo $baris['report_management_project']; ?></div>
							
							<?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 60%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->

                <!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-primary text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-users"></i></div>

                        <div class="widget-stat-info">
						
							<?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_marketing FROM page WHERE id_kategori='55'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Marketing</div>

                            <div class="widget-stat-number"><?php echo $baris['report_marketing']; ?></div>
							
							<?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->

                <!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-info text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>

                        <div class="widget-stat-info">

                            <?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_perawatan_alat FROM page WHERE id_kategori='57'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Perawatan Alat</div>

                            <div class="widget-stat-number"><?php echo $baris['report_perawatan_alat']; ?></div>

                            <?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->

				
				<!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-info text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>

                        <div class="widget-stat-info">

                            <?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_branding FROM page WHERE id_kategori='39'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Branding</div>

                            <div class="widget-stat-number"><?php echo $baris['report_branding']; ?>
							<a data-toggle="modal" data-target="#branding" class="btn btn-primary"><i class="fa fa-eye"></i> Detail</a>
							</div>

                            <?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>
					
				</div>
					
					
					<!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-primary text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>

                        <div class="widget-stat-info">

                            <?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_pembelian FROM page WHERE id_kategori='61'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Pembelian</div>

                            <div class="widget-stat-number"><?php echo $baris['report_pembelian']; ?></div>

                            <?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->
				
				
				<!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-success text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>

                        <div class="widget-stat-info">

                            <?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_penjualan FROM page WHERE id_kategori='60'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Penjualan</div>

                            <div class="widget-stat-number"><?php echo $baris['report_penjualan']; ?></div>

                            <?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->
				
				
				<!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-inverse text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>

                        <div class="widget-stat-info">

                            <?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_penggajian FROM page WHERE id_kategori='56'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data Penggajian</div>

                            <div class="widget-stat-number"><?php echo $baris['report_penggajian']; ?></div>

                            <?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->
				
				
				<!-- begin col-3 -->

                <div class="col-sm-6 col-lg-3">

                    <!-- begin widget -->

                    <div class="widget widget-stat widget-stat-right bg-inverse text-white">

                        <div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

                        <div class="widget-stat-icon"><i class="fa fa-file"></i></div>

                        <div class="widget-stat-info">

                            <?php

                                $hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_file FROM page WHERE id_kategori='41'");

                                while($baris=mysqli_fetch_array($hasil)){

                            ?>

                            <div class="widget-stat-title">Data File</div>

                            <div class="widget-stat-number"><?php echo $baris['report_file']; ?></div>

                            <?php } ?>

                        </div>

                        <div class="widget-stat-progress">

                            <div class="progress">

                                <div class="progress-bar" style="width: 70%"></div>

                            </div>

                        </div>

                    </div>

                    <!-- end widget -->

                </div>

                <!-- end col-3 -->
				

				
				
            </div>

            <!-- end row -->
			
<!-- MODAL START -->

			<div id="publishing" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail</h4>
                        </div>
                        <div class="modal-body">
						
							<div class="row">
							
							<div class="col-sm-6 col-lg-6">

								<!-- begin widget -->

								<div class="widget widget-stat widget-stat-right bg-inverse text-white">

									<div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

									<div class="widget-stat-icon"><i class="fa fa-users"></i></div>

									<div class="widget-stat-info">
									
										<?php

											$hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_berita FROM page WHERE id_kategori='4'");

											while($baris=mysqli_fetch_array($hasil)){

										?>

										<div class="widget-stat-title">Data Berita</div>

										<div class="widget-stat-number"><?php echo $baris['report_berita']; ?> 

										</div>
										
										<?php } ?>

									</div>

									<div class="widget-stat-progress">

										<div class="progress">

											<div class="progress-bar" style="width: 80%"></div>

										</div>

									</div>

								</div>

								<!-- end widget -->

							</div>
							
							
							
							<div class="col-sm-6 col-lg-6">

								<!-- begin widget -->

								<div class="widget widget-stat widget-stat-right bg-success text-white">

									<div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

									<div class="widget-stat-icon"><i class="fa fa-users"></i></div>

									<div class="widget-stat-info">
									
										<?php

											$hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_artikel FROM page WHERE id_kategori='5'");

											while($baris=mysqli_fetch_array($hasil)){

										?>

										<div class="widget-stat-title">Data Artikel</div>

										<div class="widget-stat-number"><?php echo $baris['report_artikel']; ?> 

										</div>
										
										<?php } ?>

									</div>

									<div class="widget-stat-progress">

										<div class="progress">

											<div class="progress-bar" style="width: 80%"></div>

										</div>

									</div>

								</div>

								<!-- end widget -->

							</div>
							
							
							<div class="col-sm-6 col-lg-6">

								<!-- begin widget -->

								<div class="widget widget-stat widget-stat-right bg-primary text-white">

									<div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

									<div class="widget-stat-icon"><i class="fa fa-users"></i></div>

									<div class="widget-stat-info">
									
										<?php

											$hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_page FROM page WHERE id_kategori='6'");

											while($baris=mysqli_fetch_array($hasil)){

										?>

										<div class="widget-stat-title">Data Page</div>

										<div class="widget-stat-number"><?php echo $baris['report_page']; ?> 
										</div>
										
										<?php } ?>

									</div>

									<div class="widget-stat-progress">

										<div class="progress">

											<div class="progress-bar" style="width: 80%"></div>

										</div>

									</div>

								</div>

								<!-- end widget -->

							</div>
							
							
							
							</div>
                            
						</div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			
			<div id="branding" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Detail</h4>
                        </div>
                        <div class="modal-body">
						
							<div class="row">
							
							<div class="col-sm-6 col-lg-6">

								<!-- begin widget -->

								<div class="widget widget-stat widget-stat-right bg-inverse text-white">

									<div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

									<div class="widget-stat-icon"><i class="fa fa-users"></i></div>

									<div class="widget-stat-info">
									
										<?php

											$hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_publishing FROM page WHERE id_kategori='38'");

											while($baris=mysqli_fetch_array($hasil)){

										?>

										<div class="widget-stat-title">Data Berita</div>

										<div class="widget-stat-number"><?php echo $baris['report_publishing']; ?> 

										</div>
										
										<?php } ?>

									</div>

									<div class="widget-stat-progress">

										<div class="progress">

											<div class="progress-bar" style="width: 80%"></div>

										</div>

									</div>

								</div>

								<!-- end widget -->

							</div>
							
							
							
							<div class="col-sm-6 col-lg-6">

								<!-- begin widget -->

								<div class="widget widget-stat widget-stat-right bg-success text-white">

									<div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

									<div class="widget-stat-icon"><i class="fa fa-users"></i></div>

									<div class="widget-stat-info">
									
										<?php

											$hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_publishing FROM page WHERE id_kategori='38'");

											while($baris=mysqli_fetch_array($hasil)){

										?>

										<div class="widget-stat-title">Data Artikel</div>

										<div class="widget-stat-number"><?php echo $baris['report_publishing']; ?> 

										</div>
										
										<?php } ?>

									</div>

									<div class="widget-stat-progress">

										<div class="progress">

											<div class="progress-bar" style="width: 80%"></div>

										</div>

									</div>

								</div>

								<!-- end widget -->

							</div>
							
							
							<div class="col-sm-6 col-lg-6">

								<!-- begin widget -->

								<div class="widget widget-stat widget-stat-right bg-primary text-white">

									<div class="widget-stat-btn"><a href="javascript:;" data-click="widget-reload"><i class="fa fa-repeat"></i></a></div>

									<div class="widget-stat-icon"><i class="fa fa-users"></i></div>

									<div class="widget-stat-info">
									
										<?php

											$hasil = mysqli_query($id_mysqli,"SELECT count(*) AS report_publishing FROM page WHERE id_kategori='38'");

											while($baris=mysqli_fetch_array($hasil)){

										?>

										<div class="widget-stat-title">Data Page</div>

										<div class="widget-stat-number"><?php echo $baris['report_publishing']; ?> 
										</div>
										
										<?php } ?>

									</div>

									<div class="widget-stat-progress">

										<div class="progress">

											<div class="progress-bar" style="width: 80%"></div>

										</div>

									</div>

								</div>

								<!-- end widget -->

							</div>
							
							
							
							</div>
                            
						</div>
                        <div class="modal-footer">
                            <a href="javascript:;" class="btn width-100 btn-danger" data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>

<!-- MODAL END -->
			<?php } ?>
		  <?php } ?>