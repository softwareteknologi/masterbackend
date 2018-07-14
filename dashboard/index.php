<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
  <?php
	$menu= isset($_GET['menu']) ? $_GET['menu'] : "";
	$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$id_userku'");
	while($baris=mysqli_fetch_array($hasil)){
		$kategori = $baris['id_kategori'];
	}
	if (!$menu and $kategori=='92') {
		include 'publishing.php';
	}
	if (!$menu) {
		include 'home.php';
	}
	if ($menu=='report_system') {
		include 'report_system.php';
	}
	if ($menu=='publishing') {
		include 'publishing.php';
	}
	if ($menu=='branding') {
		include 'branding.php';
	}
	if ($menu=='network') {
		include 'network.php';
	}
	if ($menu=='file') {
		include 'file.php';
	}
	if ($menu=='interaktif') {
		include 'interaktif.php';
	}
	if ($menu=='user') {
		include 'user.php';
	}
	if ($menu=='report') {
		include 'report.php';
	}
	if ($menu=='akun') {
		include 'akun.php';
	}
	if ($menu=='detail_publishing') {
		include 'moduling/detail_publishing.php';
	}
	if ($menu=='edit_publishing') {
		include 'moduling/edit_publishing.php';
	}
	if ($menu=='detail_branding') {
		include 'moduling/detail_branding.php';
	}
	if ($menu=='edit_branding') {
		include 'moduling/edit_branding.php';
	}
	if ($menu=='accounting') {
		include 'accounting.php';
	}		
	if ($menu=='interaktif_rony') {		
	include 'interaktif_rony.php';	
	}		
	if ($menu=='interaktif_alfian') {		
	include 'interaktif_alfian.php';	
	}


 ?>

<?php include "footer.php"; ?>
