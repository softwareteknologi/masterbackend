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

		<!-- START include pembelian -->
			<?php include "moduling/flash_pembelian.php"; ?>
		<!-- END include pembelian  -->
		
		<!-- START include pembelian -->
			<?php include "moduling/flash_penjualan.php"; ?>
		<!-- END include pembelian  -->
		
		<!-- START include pembelian -->
			<?php include "moduling/flash_penggajian.php"; ?>
		<!-- END include pembelian  -->
		

	
	
	
		
		
		