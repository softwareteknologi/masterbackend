<?php
$auto=mysqli_query($id_mysqli,"SELECT * FROM page ORDER BY id_page DESC LIMIT 1");
$no=mysqli_fetch_array($auto);
$tampil = isset($_GET['tampil']) ? $_GET['tampil'] : null;
$nog = isset($_GET['no']) ? $_GET['no'] : null;
if($tampil=='1')
$angka=$nog;
else
$angka=$no['id_file']+2;
$tgl=date('Y-m-d H:m:s');
?>
<!-- begin #content -->
<div id="content" class="content">
<!-- START include branding -->
<?php include "moduling/flash_branding.php"; ?>
<!-- END include branding  -->