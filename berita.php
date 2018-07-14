<?php
	include"header.php";
	date_default_timezone_set('Asia/Jakarta');
	$tanggal_sekarang = date("Y-m-d");// tanggal sekarang 
	$sekarang = strtotime(date("Y-m-d"));
	$tanggal_kemaren = date('Y-m-d', strtotime('-1 day', $sekarang));
 ?>
	<div class="main-container clearfix"><!--container-->
		<?php
		include "iklanatas.php";
		?>
		<div class="post-crumbs entry-crumbs" xmlns:v="https://rdf.data-vocabulary.org/#">
			<div class="crumb-icon"><i class="brankic-icon-tags"></i></div>           
			<span></span>
			<div class="vbreadcrumb" typeof="v:Breadcrumb">
				<?php
				$id= isset($_GET['id']) ? $_GET['id'] : null;
					$aa = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_user='20' AND id_kategori='$id'");
					$bb = mysqli_fetch_array($aa);
				?>
				<?php if($id==91) {?>
				<a href="berita.php" rel="v:url" property="v:title" class="home">Redaksi</a>
				</div>Redaksi
				<?php } else { ?>
				<a href="berita.php" rel="v:url" property="v:title" class="home"><?php echo $bb['nama_kategori'] ?></a>
			</div><?php echo $bb['sub_kategori'] ?>
				<?php } ?>
			</div>
			<div class="vc_row wpb_row vc_row-fluid" style="margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
				<div class="wpb_column vc_column_container momizat_vc_col vc_main_col main-content both-sides-layout">
					<div class="vc_column-inner ">
					<div class="wpb_wrapper"><!-- Default slider -->
						<div class="blog_posts">	
							<?php
								$id1= isset($_GET['id']) ? $_GET['id'] : null;
								$hasil34 = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='branding' AND page.sub_id_kategori='92' AND page.id_kategori='$id1' AND page.status_hapus='aktif' ORDER BY date_time DESC LIMIT 1");
								$baris44=mysqli_fetch_array($hasil34);
							?>
							<?php if($id1==91) {?>
							<article class="blog-post nb1  post-2087 post type-post status-publish format-standard has-post-thumbnail category-business" data-id="2087">
								<font color="black">
								<?php echo $baris44['isi_page']; ?>
								</font>
							</article>
							<?php } else { ?>
							<?php
								$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.id_kategori='$id1' AND page.status_hapus='aktif' ORDER BY date_time DESC");
								while($baris=mysqli_fetch_array($hasil)){
							?>	   								
							<article class="blog-post nb1  post-2087 post type-post status-publish format-standard has-post-thumbnail category-business" data-id="2087">
								<h2>
									<?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page']).">" ;?><?php echo $baris['judul_page']; ?></a>
								</h2>
								<div class="entry-meta">
									<div class="author-link">
									</div>
									<span>|</span>
									<time class="entry-date" content="2014-07-03T10:01:57+00:00">
										<i class="momizat-icon-calendar"></i>
										<?php echo list_tanggal($baris['date_time']); ?>
									</time>
									<div class="cat-link">		        
									</div>
									<div class="comments-link">
									<span>|</span><!--<i class="momizat-icon-eye"></i>--><?php echo "<a href=detail.php?id=".$baris['id_page'].">" ?><!--(<?php //echo $baris['total_baca']; ?>) Pembaca--></a>
									</div>
									<div class="comments-link">
										<span>|</span>
										<i class="momizat-icon-user"></i>
										<?php echo "<a href=detail.php?id=".$baris['id_page'].">" ?><?php echo $baris['nama_user']; ?>
										</a>
									</div>
								</div>
								<figure class="post-thumbnail">
									<?php echo "<a href=detail.php?id=".$baris['id_page'].">" ?>
										<img src="<?php echo $base_url; ?>/dashboard/<?php echo $baris['nama_file']; ?>" width='179px' height='120px'>					
									</a>
								</figure>
								<div class="entry-content">
									<font color="black"><?php echo "".substr($baris['isi_page'],0,380)."...";?></font>	 	
								</div>
								<?php echo "<a class='read-more' href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page']).">" ?>
								Selengkapnya 
								<i class="fa-icon-angle-double-right"></i>
								</a>
							</article>
							<?php } ?>
							<?php } ?>
						</div><!-- blog posts -->
		                <!-- End Slider type -->
					</div>
				</div>
			</div>
			<div class="wpb_column vc_column_container momizat_vc_col vc_sec_sidebar secondary-sidebar">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="wpb_widgetised_column sidebar wpb_content_element">
							<div class="wpb_wrapper">
								<div class="widget posts">		
									<ul class="post-list ">
										<?php
											$id2= isset($_GET['id']) ? $_GET['id'] : null;
											$hasil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.fitur='publishing' AND page.sub_id_kategori='92' AND page.status_hapus='aktif' ORDER BY RAND() LIMIT 6");
											while($baris=mysqli_fetch_array($hasil)){
										?>
										<li>
											<figure class="post-thumbnail">
												<?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ;?>
													<img src="<?php echo $base_url; ?>dashboard/<?php echo $baris['nama_file']; ?>" width='170px' height='113px'>
												</a>
											</figure>
											<h2><?php echo "<a href=detail.php?id=".$baris['id_page']."/".str_replace(' ', '-', $baris['judul_page'])." rel='bookmark'>" ;?><?php echo $baris['judul_page'];?></a></h2>
											<div class="entry-meta">
												<time class="entry-date" datetime="2014-05-18T11:37:42+00:00" content="2014-05-18T11:37:42+00:00"><i class="momizat-icon-calendar"></i><?php echo list_tanggal($baris['date_time']);?></time>
											</div>
											<div class="comments-link">
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
								include 'iklansidebarkananatas.php';
							?>
							<!-- /.adv -->
							<?php
								include 'module/youtube.php';
							?>
							<?php
								include 'iklansidebarkananbawah.php';
							?>
							<!-- END --> 
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>       
 <?php
 include"footer.php";
 ?>               