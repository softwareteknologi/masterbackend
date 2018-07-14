<?php
error_reporting(E_ALL && ~E_NOTICE);
include 'core/koneksi.php';
include 'core/fungsi.php';
include 'core/cek_user.php';
include 'core/pagination.php';
$base_url = "http://localhost/infogunungkidul/";

$id_userku=$_SESSION['id_user'];
$username_user=$_SESSION['username_user'];
$password_user=$_SESSION['password_user'];
$id_kategori=$_SESSION['id_kategori'];
$kunci_login=$_SESSION['kunci_login'];
//$waktu_login=$_SESSION['waktu_login'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/upload_gambar.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="assets/plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet" />

	<link href="assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
    <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!--[if lt IE 9]>
	    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- begin #page-loader
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading</span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
				
					<?php //if($id_kategori==92){ //Username = infogk ?>
				
					<a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" class="logo" alt="" />Dashboard</a>
					
					<?php //} else { ?>
					
					<!--<a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" class="logo" alt="" /> Software Teknologi</a>-->
					
					<?php //} ?>
					
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin navbar-right -->
				<ul class="nav navbar-nav navbar-right">
					<!-- <li>
						<form class="navbar-form form-input-flat">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword..." />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li> -->
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						
						<?php
						$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user=$id_userku");
						while($baris=mysqli_fetch_array($hasil)){

						?>
						
							<span class="image"><?php echo "<img src=file/".$baris['foto'].">" ;?></span>
							
						<?php } ?>
							<span class="hidden-xs"><?php echo nama_user($id_userku) ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu pull-right">
							<!-- <li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li> -->
							<li><a href="?menu=akun">Pengaturan</a></li>
							<li class="divider"></li>
							<?php
							//$user1= id_user($username_user);
							if($id_kategori==92){ //Username = infogk ?>
								<li><a href="<?php echo $base_url;?>/dashboard/core/logout.php?id=<?php echo $id_userku ?>">Log Out</a></li>
							<?php } else { ?>
								<li><a href="core/logout.php?id=<?php echo $id_userku ?>&key=<?php echo $kunci_login; ?>">Log Out</a></li>
							<?php } ?>
						</ul>
					</li>
					<li>
						<a href="javascript:;" data-click="right-sidebar-toggled">
							<i class="fa fa-align-left"></i>
						</a>
					</li>
				</ul>
				<!-- end navbar-right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->