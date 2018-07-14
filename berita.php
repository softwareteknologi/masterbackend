<?php
	include"header.php";
	date_default_timezone_set('Asia/Jakarta');
	$tanggal_sekarang = date("Y-m-d");// tanggal sekarang 
	$sekarang = strtotime(date("Y-m-d"));
	$tanggal_kemaren = date('Y-m-d', strtotime('-1 day', $sekarang));
 ?>
	<div class="main-container clearfix"><!--container-->
		<marquee behavior="alternate" direction="left" scrollamount="7" class="responsive">
		<?php 
			/* $e = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='9' AND page.sub_id_kategori='92' AND status_hapus='aktif' ORDER BY RAND() LIMIT 10");
			while($f=mysqli_fetch_array($e)){
				if($f['nama_file']!=null){ */
				?>
					
					<!--<a href="<?php echo $f['isi_page']; ?>" target="_blank">
						<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $f['nama_file']; ?>" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
					</a>-->
				<?php 
				/* }else{
			
				}
			} */?>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/mertelu_18_iklanjalan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/pan_18_iklanjalan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/tksk_iklanjalan_18.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/dpdpks18_idulfitri_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
            </a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-jurangjero18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hsutamto_18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-bejiarjo18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-ekodem18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="http://www.bpddiy.co.id/" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/bpddiy18_idulfitri_iklanjalan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/srf_18__iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/supriyadi18_iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/fedora18__iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/gari18__iklanjalan.jpg
" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/logandeng_2018__iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/infogk_18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-pengkol18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-slamet18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IF-suparja18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/bdg_idulfitri_18_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/pacarejo_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/semar_mei_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/ikg_mei_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/BDG_HUT_GK_187_2018_iklanjalan.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/WhatsAppImage2018-05-23at10.01.46.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_candirejo.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_karangmojo.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_kelor.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_logandeng.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_ngawis.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_ngeposari.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_pulutan.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_semanu.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_serut.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/hj_gk2018_siraman.jpeg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
			
			<!--new-->
			<a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0009.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0010.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0011.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0013.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0015.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0016.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a><a href="https://infogunungkidul.com/#" target="_blank">
				<img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180515-WA0025.jpg" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 140px;width: 400px;"/>
			</a>
	</marquee>
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
													<img src="<?php echo $base_url; ?>/dashboard/<?php echo $baris['nama_file']; ?>" width='170px' height='113px'>
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
							<!-- Iklan Sidebar Kanan Atas -->
							<div class="adv">
								<?php 
									/* $c = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='98' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
									while($d = mysqli_fetch_array($c)){  */
								?>
								<!--<a href="<?php echo strip_tags($d['isi_page']); ?>" target="_blank">
									<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $d['nama_file']; ?>" title="infogunungkidul"/>
									<br><br>
								</a>-->
								<?php  //} ?>
								<a href="https://bankgunungkidul.co.id" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/bdg_iklan_sidebar_2018_ramadhan.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
								<a href="#" target="_blank"><img src="<?php echo $base_url; ?>dashboard/file/dandim_mei_2018.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
								
								<a><img src="<?php echo $base_url; ?>/dashboard/file/polres_mei_2018_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
								
								<a href="http://logandeng-playen.desa.id/first"><img src="<?php echo $base_url; ?>/dashboard/file/bd.gif" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
								<br>
							</div>
							<!-- END -->
							<!-- /.adv -->
							<div class="widget social-icons">
								<div class="widget-title"><h4>Follow Us</h4></div>
									<script src="https://apis.google.com/js/platform.js"></script>
									<div class="g-ytsubscribe" data-channelid="UCtHx8LBreF8uQPnfPIQA2Jg" data-layout="full" data-count="hidden"></div>
									<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
									<iframe id="youtube_video" width="600" height="340" frameborder="0" allowfullscreen></iframe>

									<script>
										var channelID = "UCtHx8LBreF8uQPnfPIQA2Jg";
										$.getJSON('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.youtube.com%2Ffeeds%2Fvideos.xml%3Fchannel_id%3D'+channelID, function(data) {
										var link = data.items[0].link;
										var id = link.substr(link.indexOf("=")+1);
										$("#youtube_video").attr("src","https://youtube.com/embed/"+id + "?controls=0&showinfo=0&rel=0");
										});
									</script>
									<br>
									<ul class="social-widget clearfix">
										<li class="twitter"><a href="https://twitter.com/infogununkidul/" target="_blank"></a></li>
										<li class="facebook"><a href="https://www.facebook.com/inf.gunungkidul/" target="_blank"></a></li>
										<li class="gplus"><a href="https://plus.google.com/u/0/110214300156502589722/" target="_blank"></a></li>
										<li class="linkedin"><a href="https://www.linkedin.com/in/infogunungkidul-informasi-gunungkidul-terlengkap-25b480138/" target="_blank"></a></li>
										<li class="instagram"><a href="https://www.instagram.com/accounts/login/?next=%2Finfogunungkidul_media_online%2F&source=follow" target="_blank"></a></li>
									</ul>
							</div>
							<!-- Iklan Sidebar Kanan Bawah -->
							<div class="adv">
								<a><img src="<?php echo $base_url; ?>/dashboard/file/fedora.gif" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
								<a href="#">
												<?php 
													/* $ff = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file INNER JOIN kategori INNER JOIN user ON page.id_file=file.id_file AND page.id_kategori=kategori.id_kategori AND page.id_user=user.id_user WHERE kategori.id_kategori='99' AND page.sub_id_kategori='92' AND status_hapus='aktif'");
													while($gg = mysqli_fetch_array($ff)) {  */?>
													<!--<a href="<?php echo strip_tags($gg['isi_page']); ?>" target="_blank">
														<img src="<?php echo $base_url; ?>/dashboard/file/<?php echo $gg['nama_file']; ?>" title="infogunungkidul"/>
														<br><br>
													</a>-->
												<?php//} ?>
								</a>
								
								<a href="http://gk-steak.business.site/" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/gk_steak_mei_2018_sidebarbawah.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://semin.desa.id/first" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/semin_mei_2018_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/dpdpks18_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="https://goo.gl/maps/PRKgBoFwLxm" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/khalifa28.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://www.karangmojo.desa.id/index.php/first" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/SID.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://kemadang-tanjungsari.desa.id/index.php/first" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/son.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://pendidikan.gunungkidulkab.go.id/" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/IF-disdik18_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://www.gunungkidulkab.go.id/D-21da7f6c73abb6460e61306528ef8be3-NR-100-0.html" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/IF-dpu18_iklansidebar.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="http://www.gunungkidulkab.go.id/D-21da7f6c73abb6460e61306528ef8be3-NR-100-0.html" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/IMG-20180525-WA0006.jpg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/idulfitri_18_tole.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/pkdtanjungsari_18_iklansidebar.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/pkdponjong18_iklansidebar.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
									<a href="#" target="_blank"><img src="<?php echo $base_url; ?>/dashboard/file/ikgjabodetabek18_iklansidebar.jpeg" title="Tick untuk informasi lebih lanjut" style="border: 1px solid #ddd;border-radius: 4px;padding: 5px;height: 200px;width: 95%;" /></a>
								
							</div>
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