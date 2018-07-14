<?php
session_start();
$id_userku=$_SESSION['id_user'];
$kunci_login=$_SESSION['kunci_login'];

date_default_timezone_set('Asia/Jakarta');
$id = $id_userku;
$key = $kunci_login;
$tgl_logout = date('Y-m-d');
$waktu_logout=date('H:i:s');
$online = 0;

if(!$_SESSION['username_user'] and !$_SESSION['password_user'] and !$_SESSION['id_kategori']) {

echo "<script>alert('Mohon Anda Login terlebih dahulu')</script>";

print("<html><head><meta http-equiv='refresh' content='0;url=core/logout.php?id=$id&key=$key'></head><body></body></html>");
exit;
}
?>
