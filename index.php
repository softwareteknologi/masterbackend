<?php
	include"header.php";
	date_default_timezone_set('Asia/Jakarta');
	$tanggal_sekarang = date("Y-m-d");
	$sekarang = strtotime(date("Y-m-d"));
	$tanggal_kemaren = date('Y-m-d', strtotime('-1 day', $sekarang));
 ?>
<div class="main-container clearfix">
	<?php
		include "iklanatas.php";
	?>
	<div class="vc_row wpb_row vc_row-fluid" style="margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
		<div class="wpb_column vc_column_container momizat_vc_col vc_main_col main-content both-sides-layout">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">							 <!--  Default slider -->
		            <section class="section  feature_slider_76"><!--def slider-->
						<header class="block-title " >
							<h2><a href="#">HEADLINES</a></h2>
						</header>
						<div class="def-slider">
							<div class="def-slider-wrap momizat-custom-slider" data-srtl="false" data-animate_out='' data-animate_in="" data-autoplay="true" data-timeout="4000" data-bullets_event="">
								<?php
									$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.sub_id_kategori_2='104' AND page.status_hapus='aktif' ORDER BY page.id_page desc LIMIT 5");
									while($baris=mysqli_fetch_array($hasil)){
								?>
								<div class="def-slider-item"  data-dot="1">
									<?php 
									echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page']).">" ;?>
										<img src="<?php echo $base_url; ?>/dashboard/<?php echo $baris['nama_file']; ?>" style="height:411px;">
									</a>
									<div class="def-slider-cap">
										<div class="def-slider-title">
											<h2>
												<?php 
													echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page']).">" ;
												?>
													<?php 
														echo $baris['judul_page'];
													?>
												</a>
											</h2>
										</div>
		                            </div>
		                        </div>
								<?php } ?>
							</div>
						</div>
		            </section>
					<?php
						include "iklankontenatas.php";
					?>
				</div>
			</div>
		</div>
		<div class="wpb_column vc_column_container momizat_vc_col vc_sec_sidebar secondary-sidebar">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="wpb_widgetised_column sidebar wpb_content_element">
						<div class="wpb_wrapper">
							<div class="widget posts">		
								<header class="block-title " >
									<h2><a href="">BERITA TERBARU</a></h2>
								</header>
								<ul class="post-list ">
								<?php
									$aaa = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' ORDER BY id_page DESC LIMIT 4");
									while($bbbb=mysqli_fetch_array($aaa)){
								?>
									<li>
										<figure class="post-thumbnail">
											<?php echo "<a href=detail.php?id=".$bbbb['id_page']."/".str_replace(' ', '-', $bbbb['judul_page']).">" ;?>
												<img src="<?php echo $base_url; ?>/dashboard/<?php echo $bbbb['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 100px;width: 90%;">
											</a>
										</figure>
										<h2>
											<?php echo "<a href=detail.php?id=".$bbbb['id_page']."/".str_replace(' ', '-', $bbbb['judul_page']).">" ;?>
												<?php echo substr($bbbb['judul_page'],0,25);?>
											</a>
										</h2>
										<div class="entry-meta">
											<i class="momizat-icon-calendar"></i>
											<?php echo list_tanggal($bbbb['date_time']);?>
										</div>
									</li>
								<?php } ?>
								</ul>
							</div>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="wpb_column vc_column_container momizat_vc_col vc_sidebar sidebar main-sidebar">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">	
					<div class="wpb_widgetised_column sidebar wpb_content_element">
					<?php
						include "iklansidebarkananatas.php";
					?>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<div class="vc_row wpb_row vc_row-fluid" style="margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
		<div class="wpb_column vc_column_container momizat_vc_col vc_main_col main-content both-sides-layout">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<section class="section news-box cat_2 ">
						<!--News box 4-->
						<header class="block-title" >
                            <h2><a href="#">BERITA HARI INI TERPOPULER</a></h2>
				        </header>
						<!--new-->
						<div class="mom-share-post" style="margin-right: 0px; margin-left: 0px;">
							<div style="width: 440px;float: left;margin: 10px;padding: 10px 0px 0px 10px;">
								<ul class="post-list ">
									<?php
									$hari = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' AND date_time LIKE '$tanggal_sekarang%' ORDER BY total_baca DESC LIMIT 6");
									while($hasil_hari=mysqli_fetch_array($hari)){
									$kecuali_hari_ini = $hasil_hari['id_page'];
								?>
									<div style="float:left; margin: 0px 10px 10px 0px; align:center;">
										<li>
											<figure class="post-thumbnail">
												<?php echo "<a href=detail.php?id=".$hasil_hari['id_page']."/".str_replace(' ', '-', $hasil_hari['judul_page']).">" ?>
												<img src="<?php echo $base_url; ?>/dashboard/<?php echo $hasil_hari['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 4px;height: 100px;width: 120px;">
												</a>
											</figure>
											<div style="width: 136px; height: 110px;">
												<font size="3" color="#0083b9"><?php echo "<a itemprop='url' href=detail.php?id=".$hasil_hari['id_page']."/".str_replace(' ', '-', $hasil_hari['judul_page']).">" ?><?php echo $hasil_hari['judul_page']; ?></a></font>
											</div>
											<div class="entry-meta">
												<i class="momizat-icon-calendar"></i><?php echo $hasil_hari['date_time']; ?>
											</div>
										</li>
									</div>
									<?php } ?>
								</ul>
							</div>
						</div>
						<!--end-->      
                    </section>
					<?php
						include "iklankontenbawah.php";
					?>
					
					<!--News box 4-->
					
					<section class="section news-box cat_2">
						<!--News box 4-->
						<header class="block-title" >
                            <h2><a href="#">BERITA KEMARIN</a></h2>
				        </header>
						<!--new-->
						<div class="mom-share-post" style="margin-right: 0px; margin-left: 0px;">
							<div style="width: 440px;float: left;margin: 10px;padding: 10px 0px 0px 10px;">
								<ul class="post-list ">
									<?php
										$waa = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' AND date_time LIKE '$tanggal_kemaren%' LIMIT 9");
										while($qq=mysqli_fetch_array($waa)){
										$kecuali_kemarin = $qq['id_page'];
									?>
									<div style="float:left; margin: 0px 10px 10px 0px; align:center;">
										<li>
											<figure class="post-thumbnail">
												<?php echo "<a href=detail.php?id=".$qq['id_page']."/".str_replace(' ', '-', $qq['judul_page']).">" ;?>
												<img src="<?php echo $base_url; ?>/dashboard/<?php echo $qq['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 4px;height: 100px;width: 120px;">
												</a>
											</figure>
											<div style="width: 136px; height: 110px;">
												<font size="3" color="#0083b9"><?php echo "<a href=detail.php?id=".$qq['id_page']."/".str_replace(' ', '-', $qq['judul_page']).">" ;?><?php echo $qq['judul_page'];?></a></font>
											</div>
											<div class="entry-meta">
												<i class="momizat-icon-calendar"></i><?php echo list_tanggal($qq['date_time']);?>
											</div>
										</li>
									</div>
									<?php } ?>
								</ul>
							</div>
						</div>
						<!--end-->  
                    </section><!--News box 4-->
				</div>
			</div>
		</div>
		<div class="wpb_column vc_column_container momizat_vc_col vc_sec_sidebar secondary-sidebar">
			<div class="vc_column-inner ">
				<div class="wpb_wrapper">
					<div class="wpb_widgetised_column sidebar wpb_content_element">
						<div class="wpb_wrapper">
							<div class="widget posts">   
								<header class="block-title " >
									<h2><a href="category/world/index.html">BERITA POPULER</a></h2>
								</header>
								<ul class="post-list ">
								<?php
									$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' ORDER BY total_baca DESC LIMIT 8");
									while($baris=mysqli_fetch_array($hasil)){
									$id_page=$baris['id_page'];
								?>
								<?php if($id_page=='59') { ?>
								
								<?php } else { ?>
									<li>
										<figure class="post-thumbnail">
											<?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ?>
												<img src="<?php echo $base_url; ?>/dashboard/<?php echo $baris['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 100px;width: 90%;">
											</a>
										</figure>
										<h2><?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ?><?php echo $baris['judul_page'];?></a></h2>
										<div class="entry-meta">
											<time class="entry-date" content="2014-07-03T10:01:57+00:00"><i class="momizat-icon-calendar"></i><?php echo list_tanggal($baris['date_time']); ?></time>
										<div class="comments-link">
													<i class="momizat-icon-bubbles4"></i><?php echo "<a itemprop='url' href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page']).">" ?>(<?php echo $baris['total_baca']; ?>) Pembaca</a>
										</div>
										</div>
									</li>
									<?php } ?>
								<?php } ?>
								</ul>
							</div>
						</div> 
					</div> 
				</div>
			</div>
		</div>
			<div class="wpb_column vc_column_container momizat_vc_col vc_sidebar sidebar main-sidebar">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="wpb_widgetised_column sidebar wpb_content_element">
							<div class="wpb_wrapper">
								<?php
									include 'module/youtube.php';
								?>	
								<br>
								<?php
									include 'iklansidebarkananbawah.php';
								?>		
							</div> 
						</div> 
					</div>
				</div>
			</div>
		</div>	
    </div>
</div>
   
 <?php
 include"footer.php";
 ?>
