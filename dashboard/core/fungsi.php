<?php
function daftar($nama_user,$username_user,$password_user,$level,$reff){
  include 'koneksi.php';
  $hasil=mysqli_query($id_mysqli,"INSERT INTO user(nama_user, username_user, password_user, id_kategori, reff) VALUES('$nama_user','$username_user', MD5('$password_user'),$level,'$reff')");
  return $hasil;
}
function daftar_admin($nama_user,$username_user,$password_user,$reff){
  include 'koneksi.php';
  $hasil=mysqli_query($id_mysqli,"INSERT INTO user(nama_user, username_user, password_user, reff) VALUES('$nama_user','$username_user', MD5('$password_user'),'$reff')");
  return $hasil;
}
function nama_user($id_userku){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$id_userku'");
while($baris=mysqli_fetch_array($hasil)){
return $baris['nama_user'];
}
}
function jabatan($id_userku){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$id_userku'");
while($baris=mysqli_fetch_array($hasil)){
return $baris['jabatan_user'];
}
}
function nama_user1($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE id_user='$id'");
while($baris=mysqli_fetch_array($hasil)){
return $baris['nama_user'];
}
}
function id_user($username_user){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM user WHERE username_user='$username_user'");
while($baris=mysqli_fetch_array($hasil)){
return $baris['id_user'];
}
}
function nama_bank ($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM text WHERE id_text='$id'");
while($baris=mysqli_fetch_array($hasil)){
return $baris['nama'];
}
}
function list_tanggal($nilai)
{
$tahun = substr($nilai,0,4);
$bulan = substr($nilai,5,2);
$tanggal = substr($nilai,8,2);

if($bulan == '01')
	$bul = 'Januari';
if($bulan == '02')
	$bul = 'Februari';
if($bulan == '03')
	$bul = 'Maret';
if($bulan == '04')
	$bul = 'April';
if($bulan == '05')
	$bul = 'Mei';
if($bulan == '06')
	$bul = 'Juni';
if($bulan == '07')
	$bul = 'Juli';
if($bulan == '08')
	$bul = 'Agustus';
if($bulan == '09')
	$bul = 'September';
if($bulan == '10')
	$bul = 'Oktober';
if($bulan == '11')
	$bul = 'November';
if($bulan == '12')
	$bul = 'Desember';

$tanggalnya = $tanggal." ".$bul." ".$tahun;

	return $tanggalnya;
}

function kategori_publishing($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='publishing' AND id_user='$id'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."</option>";
}
}

function sub_kategori($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='publishing' AND id_user='$id'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."-".$baris['sub_kategori']."</option>";
}
}

function kategori_nama_karyawan($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM page WHERE id_kategori='34' AND status_pekerjaan='Aktif'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_page'];
if($id==$baris['id_page'])
  echo "SELECTED";
echo ">".$baris['nama_karyawan']."</option>";
}
}

function kategori_nama_project($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM page WHERE id_kategori='36' AND status='Belum ACC'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_page'];
if($id==$baris['id_page'])
  echo "SELECTED";
echo ">".$baris['judul_page']."</option>";
}
}

function kategori_pembelian($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='pembelian' and id_user='$id'");
while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."</option>";
}
}

function kategori_branding($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='branding'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."</option>";
}
}

function kategori_file($id){
include "koneksi.php";
$a = "Fitur File";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='file' and nama_kategori!='$a'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."</option>";
}
}

function kategori_network($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='network' and id_kategori='$id'");
$result = mysqli_fetch_array($hasil);
return $result['nama_kategori'];
}

function limit($string, $word_limit){
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

function nama_akses($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE id_kategori='$id'");

while($baris=mysqli_fetch_array($hasil)){
return $baris['nama_kategori'];
}
}

function kategori_akses($id){
include "koneksi.php";  
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='user'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."</option>";
}
}

function drop_network($id){
include "koneksi.php";
$hasil = mysqli_query($id_mysqli,"SELECT * FROM kategori WHERE fitur='network'");

while($baris=mysqli_fetch_array($hasil)){
echo "<option value=".$baris['id_kategori'];
if($id==$baris['id_kategori'])
  echo "SELECTED";
echo ">".$baris['nama_kategori']."</option>";
}
}
?>
