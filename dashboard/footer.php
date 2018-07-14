<?php 
$tgl=date('Y-m-d H:m:s');

if($menu=="interaktif"){?>
</div>
<?php } else {?>
		<!-- begin #footer -->
            <div id="footer" class="footer">
                <span class="pull-right">
                    <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                        <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
                    </a>
                </span>
                Copright &copy; 2017 <b>Admin Software Technologi</b> All Right Reserved
            </div>
            <!-- end #footer -->
			</div>
<?php } ?>
		
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
		if($username_user && $isi_text && $id_kategori=='27' && $status=='1'){ ?>
		
		<!-- begin #sidebar-right -->
		<div id="sidebar-right" class="sidebar sidebar-right">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar-nav -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="width-half active"><a href="#online" data-toggle="tab">Online</a></li>
                    <li class="width-half"><a href="#notifications" data-toggle="tab">Notifications</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="online">
                        <ul class="nav">
                            <li class="nav-date">
                                Karyawan Online
                            </li>
                            <li class="divider"></li>
                            
                            <li>
                                <ul class="notification-list">
								
								<?php
									$user= id_user($username_user);
									$hasil_2 = mysqli_query($id_mysqli,"SELECT * FROM user where online='1'and id_user!='$user'");
									while($baris_1=mysqli_fetch_array($hasil_2)){
								?>
								
                                    <li>
                                        <div class="media"><a data-toggle="modal" data-target="#detail-<?php echo $baris_1['id_user'] ?>"><?php echo "<img src=file/".$baris_1['foto'].">"; ?></a></div>
                                        <div class="info">
                                            <div class="title"><a data-toggle="modal" data-target="#detail-<?php echo $baris_1['id_user'] ?>"><?php echo $baris_1['nama_user'] ?></a></div>
                                            <div class="time">Today, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
									
								<?php } ?>	
									
                                </ul>
                            </li>
							
                            <li class="divider"></li>
                        </ul>
                    </div>
					
                    <div class="tab-pane" id="notifications">
                        <ul class="nav">
                            <li class="nav-header">Mailbox</li>
                            <li>
                                <ul class="notification-list">
                                    <li>
                                        <div class="media"><i class="fa fa-check"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">PHP version updated</a></div>
                                            <div class="time">Yesterday, 6.06pm</div>
                                            <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-bug text-danger"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">10 Unknown mysql query detected</a></div>
                                            <div class="time">Yesterday, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="assets/img/user_2.jpg" alt="" /></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from David</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Nunc metus orci, lobortis eu luctus quis, dictum mollis ante.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="assets/img/user_4.jpg" alt="" /></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Terry</a></div>
                                            <div class="time">Today, 12.05am</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img src="assets/img/user_3.jpg" alt="" /></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">New email from Tom (2)</a></div>
                                            <div class="time">Yesterday, 5.23pm</div>
                                            <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Activities Log</li>
                            <li>
                                <ul class="notification-list">
                                    <li>
                                        <div class="media"><i class="fa fa-cog"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Your scheduled post has been published</a></div>
                                            <div class="time">Just now</div>
                                            <div class="desc">Aenean lobortis libero libero, vitae imperdiet dolor dictum id.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-shield"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Turn on the firewall</a></div>
                                            <div class="time">Today, 7.08am</div>
                                            <div class="desc">Donec at augue in mi egestas luctus fermentum et ex.</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><i class="fa fa-user-plus"></i></div>
                                        <div class="info">
                                            <div class="title"><a href="javascript:;">Added 2 admin user</a></div>
                                            <div class="time">Today, 6.40am</div>
                                            <div class="desc">Quisque elementum urna placerat mi vestibulum lacinia.</div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                        </ul>
                    </div>
                </div>
				<!-- end sidebar-nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		
		<?php } }?>

		<div class="sidebar-bg sidebar-right"></div>
		<!-- end #sidebar-right -->
		
		
	</div>
	<!-- end page container -->
	
	
					<?php
						$user= id_user($username_user);
						$hasil = mysqli_query($id_mysqli,"SELECT * FROM user where online='1'and id_user!='$user'");
						$no=1;
						while($baris=mysqli_fetch_array($hasil)){
						$id_user=$baris['id_user'];
					?>
					<!-- MODAL EDIT -->
					<div id="detail-<?php echo $baris['id_user'] ?>" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title">Kirim Pesan ke <?php echo $baris['nama_user'] ?></h4>
								</div>
								<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
								<div class="modal-body">
								
								
									
									<div class="panel-body">
										<div data-scrollbar="true" data-height="248px">
											<ul class="chats">
											<?php
												$user= id_user($username_user);
												$hasil_pesan = mysqli_query($id_mysqli,"SELECT * FROM pesan");
												while($baris_pesan=mysqli_fetch_array($hasil_pesan)) {
												$id_user_1=$baris_pesan['ke'];
												$id_user_2=$baris_pesan['dari']; 
											?>
												
												<?php if($id_user_1=='1') { ?>
												<li class="left">
													<a href="javascript:;" class="image"><?php echo "<img src=file/".$baris['foto'].">" ?></a>
													<div class="message">
														<a href="javascript:;" class="name"><?php echo $baris_pesan['nama_user'] ?></a>
														<?php echo $baris_pesan['isi_pesan'] ?>
														<span class="date-time">11:23pm</span>
													</div>
												</li>
												
												<?php } if($id_user_2=='32') { ?>
												<li class="right">
													<a href="javascript:;" class="image"><?php echo "<img src=file/".$baris['foto'].">" ?></a>
													<div class="message">
														<a href="javascript:;" class="name"><?php echo $baris_pesan['nama_user'] ?></a>
														<?php echo $baris_pesan['isi_pesan'] ?>
														<span class="date-time">11:23pm</span>
													</div>
												</li>
												<?php } ?>
												
										
											<?php } ?>
												

											</ul>
										</div>
									</div>
									<div class="panel-footer bg-white">
										<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
										<!-- INPUT TYPE HIDDEN -->
										<input type="hidden" name="dari" value="<?php echo $user ?>">
										<input type="hidden" name="ke" value="<?php echo $baris['id_user'] ?>">
										<input type="hidden" name="kelompok" value="<?php echo $user.$baris['id_user'] ?>">
										<input type="hidden" name="tanggal_kirim" value="<?php echo $tgl ?>">
										<!-- END -->
											<div class="input-group">
												<input type="text" class="form-control" name="isi_pesan" placeholder="Masukkan pesan di sini">
												<span class="input-group-btn">
													<input type="submit" name="simpan_pesan" class="btn btn-primary" value="Kirim">
												</span>
											</div>
										</form>
									</div>
									
									
									
								</div>
								<div class="modal-footer">
									<a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
								</div>
								</form>
							</div>
						</div>
					</div>
					<?php } ?>
					
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
    <script src="assets/js/page-form-wizards.demo.min.js"></script>
	<script src="assets/js/upload_gambar.js"></script>
	<script src="assets/js/chat_java.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="assets/plugins/chart-js/chart.min.js"></script>
	<!-- <script src="assets/plugins/gritter/js/jquery.gritter.js"></script> -->
    <script src="assets/js/page-index-v2.demo.min.js"></script>
    <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
    <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/page-table-manage-colreorder.demo.min.js"></script>
    <script src="assets/js/demo.min.js"></script>
    <script src="assets/js/apps.min.js"></script>
    
    <script src="tinymce/js/tinymce/tinymce.min.js"> </script>
    <script type="text/javascript">
      tinymce.init({
        selector: "textarea",
        theme: "modern",
        paste_data_images: true,
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        file_picker_callback: function(callback, value, meta) {
          if (meta.filetype == 'image') {
            $('#upload').trigger('click');
            $('#upload').on('change', function() {
              var file = this.files[0];
              var reader = new FileReader();
              reader.onload = function(e) {
                callback(e.target.result, {
                  alt: ''
                });
              };
              reader.readAsDataURL(file);
            });
          }
        },
        templates: [{
          title: 'Test template 1',
          content: 'Test 1'
        }, {
          title: 'Test template 2',
          content: 'Test 2'
        }]
      });
    </script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		    PageDemo.init();
		});
	</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKQ0wT%2f1BZpnNvw8zTy6ObRxximY0RiYgFRUT%2bMhWuSesLdtN264F4teYDsflQNWjA%2b3CuOYUH%2fP9JHKfRzCfCQ%2bP11oRgaJrcgKv1TC4b1OeL6TroxP7rQJw0mORAviOyTqmsFsr1UZEBoXrkmifiwOtqQT2Uiriwi%2f5sL%2b4oy%2f2%2fENuAuxEzFj9Ej98Mb%2b72BvklitwN%2bYpJ%2fJ6L9ghnkXdzCw06CaL9XJOOhgZ6C22JvTEQd6Ac8q1sTx1H0HVafTu8YNldQClj%2fHO2iM9X7lzKQt0J2UP5WwwgqOefFtEp3odn8%2bXB3NJ7iEloXTnLrHBtB4dWwndvRD9dGFa9QjUXCCAP%2b%2fpqAWO2j6kV%2fyFP7SgBTdYkJorem3wo5PIu0%2bS4mrB5D7d9u2QPs9piHNGCpzKQ%2bLwB" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from seantheme.com/source-admin-v1.3/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Mar 2011 04:16:07 GMT -->
</html>
