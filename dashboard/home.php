<?php
            $user = id_user($username_user);
			  $hasil= mysqli_query($id_mysqli,"SELECT * From user where id_user='$user'");
			  $result= mysqli_fetch_array($hasil);
			  $id_kategori=$result['id_kategori'];
        ?>
<!-- begin #content -->
<?php if($id_kategori=='62'){ ?>
		<div id="content" class="content">
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-4 -->
			    <div class="col-lg-6">
			        <!-- begin panel -->
			        <div class="panel panel-inverse">
			            <div class="panel-heading">
                            <!--<div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-lime" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>-->
			                <h4 class="panel-title">Informasi CV Software Technologi</h4>
			            </div>
			            <div class="panel-body p-b-15">
			                <div data-scrollbar="false" data-height="300">
                              <?php
								$aaa = mysqli_query($id_mysqli,"SELECT rule FROM page");
								$bbb = mysqli_fetch_array($aaa);
							?>
							<?php echo $bbb['rule'];?>
			                </div>
			            </div>
			        </div>
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
			    <!-- begin col-4 -->
			    <div class="col-lg-6">
			        <!-- begin panel -->
			        <div class="panel panel-inverse">
			            <div class="panel-heading">
                            <!--<div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-lime" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>-->
			                <h4 class="panel-title">Tugas <?php echo nama_user1($id_userku); ?></h4>
			            </div>
			            <div class="panel-body">
							<?php 
							$key = "Belum Selesai";
							$list_tugas= mysqli_query($id_mysqli,"SELECT * FROM page WHERE untuk='$id_userku' and status_tugas='$key'");
							  while($hasil_tugas= mysqli_fetch_array($list_tugas)){ ?>
							  <div class="well m-b-10">
							  <h6><?php echo list_tanggal($hasil_tugas['date_time']) ?> - <?php echo $hasil_tugas['judul_page'] ?> - <?php echo $hasil_tugas['isi_page'] ?></h6>
							  </div>
							  <?php } ?>
                        </div>
			        </div>
			        <!-- end panel -->
			    </div>
			    <!-- end col-4 -->
				<!--<div class="col-lg-12">
			        <div class="panel panel-inverse">
			            <div class="panel-heading">
			                <h4 class="panel-title">List Tugas</h4>
			            </div>
			            <div class="panel-body">
                            <marquee scrollAmount=2 scrollDelay=0 direction=up height="300">                                                          </marquee>
                        </div>
			        </div>-->
			        <!-- end panel -->
			    </div>
			<!-- end row -->
<?php } ?>
<?php if($id_kategori=='100'){ ?>
<div id="content" class="content">
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-4 -->
				<div class="col-lg-2"></div>
			    <div class="col-lg-8">
			        <!-- begin panel -->
			        <div class="panel panel-inverse">
			            <div class="panel-heading">
                            <!--<div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-lime" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>-->
			                <h4 class="panel-title">Informasi CV Software Technologi</h4>
			            </div>
			            <div class="panel-body p-b-15">
			                <div data-scrollbar="false" data-height="300">
							<?php
								$aaa = mysqli_query($id_mysqli,"SELECT rule FROM page");
								$bbb = mysqli_fetch_array($aaa);
							?>
							<form action="proses.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                              <textarea id="" cols="30" rows="10" name="rule">
							  <?php echo $bbb['rule'] ?>
							  </textarea><br />
							  <button class="btn btn-primary pull-right" type="submit" name="simpan_rule">Simpan Perubahan</button>
							</form>
			                </div>
			            </div>
			        </div>
			        <!-- end panel -->
			    </div>
				<div class="col-lg-2"></div>
			    <!-- end col-4 -->
			    <!-- begin col-4 -->
			    <!-- end col-4 -->
				<!--<div class="col-lg-12">
			        <div class="panel panel-inverse">
			            <div class="panel-heading">
			                <h4 class="panel-title">List Tugas</h4>
			            </div>
			            <div class="panel-body">
                            <marquee scrollAmount=2 scrollDelay=0 direction=up height="300">                                                          </marquee>
                        </div>
			        </div>-->
			        <!-- end panel -->
			    </div>
			<!-- end row -->
			<?php } ?>