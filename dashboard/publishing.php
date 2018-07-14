<?php
$auto=mysqli_query($id_mysqli,"SELECT * FROM file ORDER BY id_file DESC LIMIT 1");
$no=mysqli_fetch_array($auto);

$tampil = isset($_GET['tampil']) ? $_GET['tampil'] : null;
$nog = isset($_GET['no']) ? $_GET['no'] : null;
if($tampil=='1')
$angka=$nog;
else
$angka=$no['id_file']+2;

$tgl=date('Y-m-d');

?>
        <div id="content" class="content">
		
				<!-- START include publishing -->
					<?php include "moduling/flash_publishing.php"; ?>
				<!-- END include publishing  -->
		
			
				<!-- START include management project -->
					<?php include "moduling/flash_management_project.php"; ?>
				<!-- END include management project  -->
				
			
				<!-- START include marketing -->
					<?php include "moduling/flash_marketing.php"; ?>
				<!-- END include marketing  -->
		
			
				<!-- START include perawatan alat -->
					<?php include "moduling/flash_perawatan_alat.php"; ?>
				<!-- END include perawatan alat  -->

		 
