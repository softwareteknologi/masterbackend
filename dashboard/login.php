<?php
session_start();
include "koneksi.php";
include "fungsi.php";

$auto=mysqli_query($id_mysqli,"SELECT * FROM file ORDER BY id_file DESC LIMIT 1");
$no=mysqli_fetch_array($auto);

if((isset($_GET['tampil']) ? $_GET['tampil'] : null) ==1)
$angka=isset($_GET['no']) ? $_GET['no'] : null;
else
$angka=$no['id_file']+2;

$username_user = $_POST['user'];
$password_user = $_POST['pass'];
$online = $_POST['online'];
$tgl_login = date('Y-m-d');
$waktu_login = date('H:i:s');

$hasil = mysqli_query($id_mysqli,"SELECT * from user WHERE username_user='$username_user' AND password_user=md5('$password_user')");

$jumlah = mysqli_num_rows($hasil);

if($jumlah==0){
echo "<script>alert('Login Gagal Silahkan Ulangi Lagi')</script>";
print "<script language=javascript>window.history.go(-1);</script>";
}
else{
$hasil1 = mysqli_query($id_mysqli,"UPDATE user SET online='$online' WHERE username_user='$username_user' AND password_user=md5('$password_user')");

while ($baris=mysqli_fetch_array($hasil)){
$username_user=$baris['username_user'];
$password_user=$baris['password_user'];
$id_kategori=$baris['id_kategori'];
$online_user=$baris['online'];
$id_userku=$baris['id_user'];
}

$_SESSION['id_user']=$id_userku;
$_SESSION['username_user']=$username_user;
$_SESSION['password_user']=$password_user;
$_SESSION['id_kategori']=$id_kategori;
$_SESSION['online']=$online_user;


$id_user = id_user($username_user);

$hasil2 = mysqli_query($id_mysqli,"INSERT INTO file (id_user, kunci_login, tgl_login, waktu_login) VALUES ('$id_user','$angka','$tgl_login','$waktu_login')");

$emboh = mysqli_query($id_mysqli,"SELECT * from file WHERE id_user='$id_user'");
while ($hasil_emboh=mysqli_fetch_array($emboh)){
$kunci_login=$hasil_emboh['kunci_login'];
}
$_SESSION['kunci_login']=$kunci_login;
print ("<html><head><meta http-equiv='refresh' content='0;url=../index.php'></head><body></body></html>");
}

?>
