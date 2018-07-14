<?php
session_start();
	date_default_timezone_set('Asia/Jakarta');
$id = isset($_GET['id']) ? $_GET['id'] : null;
$key = isset($_GET['key']) ? $_GET['key'] : null;
$tgl_logout = date("Y-m-d");
$waktu_logout=date('H:i:s');
$online = 0;
include "koneksi.php";

$hasil1 = mysqli_query($id_mysqli,"UPDATE user SET online='$online' WHERE id_user='$id'");

$emboh = mysqli_query($id_mysqli,"UPDATE file SET tgl_logout='$tgl_logout', waktu_logout='$waktu_logout' WHERE id_user='$id' AND kunci_login='$key'");

$asa = mysqli_query($id_mysqli,"SELECT * from file WHERE id_user='$id' AND kunci_login='$key'");
$sas = mysqli_fetch_array($asa);

$satu = $sas['waktu_login'];
//echo $satu;
//echo "<br>";
$dua = $sas['waktu_logout'];
//echo $dua;
//echo "<br>";

$total = strtotime($dua)-strtotime($satu);

$total_semua = $total / 3600;
//echo $total_semua;
//echo "<br>";

$emboh = mysqli_query($id_mysqli,"UPDATE file SET total_waktu='$total_semua' WHERE id_user='$id' AND kunci_login='$key'");

	session_destroy();
	print ("<html><head><meta http-equiv='refresh' content='0;url=../../'></head><body></body></html>");
exit;

?>
