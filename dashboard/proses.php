<?php
session_start();
include 'core/koneksi.php';
include 'core/fungsi.php';
//require_once("facebook_php_sdk/facebook.php");

$base_url= "https://infogunungkidul.com/";

if (isset($_POST['registrasi'])) {

  $nama_user = $_POST['nama_user'];

  $username_user = $_POST['user'];

  $password_user = $_POST['pass'];
  
  $id_kategori = $_POST['id_kategori'];

  $reff = $_POST['reff'];



  if (daftar($nama_user,$username_user,$password_user,$id_kategori,$reff)) {

    echo "<script>alert('Data Berhasil Dibuat')</script>";

    echo "<script language=javascript>window.history.go(-1);</script>";

  }

}

?>

<?php
if (isset($_POST['registrasi_admin'])) {

  $nama_user = $_POST['nama_user'];

  $username_user = $_POST['user'];

  $password_user = $_POST['pass'];

  $reff = $_POST['reff'];



  if (daftar_admin($nama_user,$username_user,$password_user,$reff)) {

    echo "<script>alert('Data Berhasil Dibuat')</script>";

    echo "<script language=javascript>window.history.go(-1);</script>";

  }

}

?>





<?php

  if(isset($_POST['simpan_rekrutmen'])){
	  
$nama_user = @$_POST['nama_user'];

$username_user = @$_POST['username_user'];

$password_user = @$_POST['password_user'];

$id_kategori = @$_POST['id_kategori'];

$tempat_lahir = @$_POST['tempat_lahir'];

$tanggal_lahir = @$_POST['tanggal_lahir'];

$pend_terakhir = @$_POST['pend_terakhir'];

$agama_user = @$_POST['agama_user'];

$alamat = @$_POST['alamat'];

$reff = @$_POST['reff'];

$jabatan_user = @$_POST['jabatan_user'];

$tanggal_masuk = @$_POST['tanggal_masuk'];

$status_peker = @$_POST['status_peker'];



$target_dir = "file/";

$target_file = basename($_FILES["foto"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


$query_1 = mysqli_query($id_mysqli,"INSERT INTO user (nama_user , username_user , password_user , id_kategori , reff , tempat_lahir , tanggal_lahir , pend_terakhir , agama_user , alamat , jabatan_user , tanggal_masuk , status_peker , foto) VALUES ('$nama_user','$username_user',md5('$password_user'),'$id_kategori','$reff','$tempat_lahir','$tanggal_lahir','$pend_terakhir','$agama_user','$alamat','$jabatan_user','$tanggal_masuk','$status_peker','$target_file')");



// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["foto"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo"<script>alert('File tidak ada Gambar!')</script>";

        print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

        $uploadOk = 0;

    }

}

// Check if file already exists

if (file_exists($target_file)) {

    echo"<script>alert('Maaf, File sudah ada')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    $uploadOk = 0;

}

// Check file size

if ($_FILES["foto"]["size"] > 5000000) {

    echo"<script>alert('Maaf, File terlalu besar')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"

&& $imageFileType != "JPEG" && $imageFileType != "gif" && $imageFileType != "GIF" && $imageFileType != "pdf" && $imageFileType != "PDF" && $imageFileType != "doc" && $imageFileType != "DOC" && $imageFileType != "docx" && $imageFileType != "DOCX" && $imageFileType != "xls" && $imageFileType != "XLS" && $imageFileType != "xlsx" && $imageFileType != "XLSX" ) {

    echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], "file/" .$target_file)) {

        echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    } else {

        echo"<script>alert('Maaf, ada kesalahan saat mengupload file Anda')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    }

}

}

?>


<?php

  if(isset($_POST['edit_akun'])){

$id_user = $_POST['id_user'];

$kunci_login = $_POST['kunci_login'];

$username_user = @$_POST['username_user'];

$password_user = @$_POST['password_user'];


$foto = $_FILES['foto']['name'];



$result = mysqli_query($id_mysqli,"SELECT * FROM user where id_user='$id_user'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['foto'];

       $tmpfile = "file/$gambar";

                unlink ($tmpfile);



            $query_1 = mysqli_query($id_mysqli,"UPDATE user SET username_user='$username_user' , password_user=md5('$password_user') , foto='$foto'WHERE id_user='$id_user'");

            $simpan[] = mysqli_query($query_1);


            //mysqli_query($simpan_edit_publishing);

            if ($simpan) {

              move_uploaded_file($_FILES['foto']['tmp_name'], "file/".$_FILES['foto']['name']);

                echo"<script>alert('Edit Akun Sukses!')</script>";

                //print("<html><head><meta http-equiv='refresh' content='0;url=core/logout.php?id=$id_user&key=$kunci_login'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

  }
?>


<?php 
if(isset($_POST['simpan_rule'])){
	$rule = @$_POST['rule'];
	
	$query_1 = mysqli_query($id_mysqli,"UPDATE page SET rule='$rule'");
	
	if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>");

             }

              else {

                echo"<script>alert('Penyimpanan Gagal!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>");

              }
}

?>



<?php

  if(isset($_POST['simpan_fitur'])){

$isi_text = @$_POST['isi_text'];

$jml_text = count($isi_text);

$no_text = @$_POST['no_text'];

$nomor = array($no_text);

$gabung = $jml_text.$nomor;

$id_user = @$_POST['id_user'];

$id_kategori = @$_POST['id_kategori'];

$status = @$_POST['status'];

$stat = count($status);

$jumlah_dipilih = count($id_kategori);



for($x=0;$x<$jumlah_dipilih;$x++){

  for($s=0;$s<$stat;$s++){
		for($z=0;$z<$gabung;$z++){
    $query_1 = mysqli_query($id_mysqli,"INSERT INTO text (isi_text , id_user,id_kategori,status,nomor) VALUES ('$isi_text[$z]','$id_user','$id_kategori[$x]','$status[$s]','$no_text[$z]')");
		}

  }

}

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

             }

              else {

                echo"<script>alert('Penyimpanan Gagal!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

              }

}

?>



<?php

  if(isset($_POST['update_fitur'])){

$isi_text = @$_POST['isi_text'];

$jml_text = count($isi_text);

$no_text = @$_POST['no_text'];

$nomor = array($no_text);

$gabung = $jml_text.$nomor;;

$id_user = @$_POST['id_user'];

$status = @$_POST['status'];

$statusku = 1;

$stat = count($status);

$id_kategori = @$_POST['id_kategori'];

$update_kategori = @$_POST['update_kategori'];

$test = count($update_kategori);

$jumlah_dipilih = count($id_kategori);

	  
	  
//	  for($u=0;$u<$jumlah_dipilih;$u++){
//  for($s=0;$s<$stat;$s++){
//		for($z=0;$z<$gabung;$z++){
 //   $query_1 = mysqli_query("UPDATE text SET isi_text=$isi_text[$z],id_kategori=$update_kategori[$u],status=$status[$s] WHERE id_user=$id_user AND nomor=$no_text[$z]");
//		}
//  }

//}
	  

  for($x=0;$x<$jumlah_dipilih;$x++){
	for($z=0;$z<$gabung;$z++){
       $query_1 = mysqli_query($id_mysqli,"INSERT INTO text (isi_text , id_user,id_kategori,status,nomor) VALUES ('$isi_text[$z]','$id_user','$id_kategori[$x]','$status','$no_text[$z]')");

        }
    }

	for($z=0;$z<$gabung;$z++){
       $query_1 = mysqli_query($id_mysqli,"UPDATE text SET isi_text='$isi_text[$z]' WHERE id_user='$id_user' AND nomor='$no_text[$z]'");
    }

	for($y=0;$y<$test;$y++){

		$query_1 = mysqli_query($id_mysqli,"DELETE FROM text where id_user='$id_user' and id_kategori='$update_kategori[$y]'");

	}





            if ($query_1) {

                echo"<script>alert('Update Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

             }

              else {

                echo"<script>alert('Update Gagal!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

              }
}

?>




<?php

  if(isset($_POST['update_user'])){

$isi_text = @$_POST['isi_text'];

$jml_text = count($isi_text);

$id_user = @$_POST['id_user'];

$status = @$_POST['status'];

$statusku = 1;

$stat = count($status);

$id_kategori = @$_POST['id_kategori'];

$update_kategori = @$_POST['update_kategori'];

$test = count($update_kategori);

$jumlah_dipilih = count($id_kategori);


for($x=0;$x<$jumlah_dipilih;$x++){

  for($s=0;$s<$stat;$s++){
		for($z=0;$z<$gabung;$z++){
    $query_1 = mysqli_query($id_mysqli,"UPDATE text SET isi_text='$isi_text[$z]' , id_kategori='$id_kategori[$x]' , status='$status[$s]' , nomor='$no_text[$z]' WHERE id_user='$id_user'");
		}

  }

}

            if ($query_1) {

                echo"<script>alert('Update Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=user'></head><body></body></html>");

             }

              else {

                echo"<script>alert('Update Gagal!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=user'></head><body></body></html>");

              }


}

?>





<?php

  if(isset($_POST['simpan_perawatan_alat'])){

$id_user = @$_POST['id_user'];

$judul_page = @$_POST['judul_page'];

$jenis_barang = @$_POST['jenis_barang'];

$nama_karyawan = @$_POST['nama_karyawan'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$status = @$_POST['status'];

$id_kategori = @$_POST['id_kategori'];

$status_hapus = @$_POST['status_hapus'];



            $query_1 = mysqli_query($id_mysqli,"INSERT INTO page (judul_page , id_user , isi_page , date_time , id_kategori , nama_karyawan , status , jenis_barang , status_hapus) VALUES ('$judul_page','$id_user','$isi_page','$date_time','$id_kategori','$nama_karyawan','$status','$jenis_barang','$status_hapus')");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>


<?php

  if(isset($_POST['simpan_pesan'])){

$dari = @$_POST['dari'];

$ke = @$_POST['ke'];

$isi_pesan = @$_POST['isi_pesan'];

$kelompok = @$_POST['kelompok'];

$tanggal_kirim = @$_POST['tanggal_kirim'];

            $query_1 = mysqli_query($id_mysqli,"INSERT INTO pesan (isi_pesan , dari , ke , tanggal_kirim , kelompok) VALUES ('$isi_pesan','$dari','$ke','$tanggal_kirim','$kelompok')");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Pesan Terkirim!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>


<?php

  if(isset($_POST['edit_perawatan_alat'])){

$id_page = @$_POST['id_page'];

$status = @$_POST['status'];



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status='$status' WHERE id_page='$id_page'");



            mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>



<?php

  if(isset($_POST['hapus_perawatan_alat'])){
	  
$id_page = @$_POST['id_page'];

$status_hapus = 'hapus';



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");



            mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }


}

?>



<?php

  if(isset($_POST['hapus_publishing'])){

$id_page = @$_POST['id_page'];

$status_hapus = 'hapus';



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");



            //mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>


<?php

  if(isset($_POST['hapus_branding'])){
	  
$id_page = @$_POST['id_page'];
$status_hapus = 'hapus';
$query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");

mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>


<?php

  if(isset($_POST['hapus_file'])){

$id_page = @$_POST['id_page'];

$status_hapus = 'hapus';



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");



            mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>


<?php

  if(isset($_POST['hapus_pembelian'])){
	  
$id_page = @$_POST['id_page'];

$status_hapus = 'hapus';



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");



            mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=accounting'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>



<?php

  if(isset($_POST['hapus_marketing'])){
	  
$id_page = @$_POST['id_page'];

$status_hapus = 'hapus';



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");



            mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>



<?php

  if(isset($_POST['hapus_management_project'])){
	  
$id_page = @$_POST['id_page'];

$status_hapus = 'hapus';



            $query_5 = mysqli_query($id_mysqli,"UPDATE page SET status_hapus='$status_hapus' WHERE id_page='$id_page'");



            mysqli_query($query_5);

            if ($query_5) {

                echo"<script>alert('Hapus Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php

  if(isset($_POST['simpan_marketing'])){

$id_user = @$_POST['id_user'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];

$harga_jual = @$_POST['harga_jual'];

$nama_karyawan = @$_POST['nama_karyawan'];

$status = @$_POST['status'];

$status_hapus = @$_POST['status_hapus'];



            $query_1 = mysqli_query($id_mysqli,"INSERT INTO page (judul_page , id_user , isi_page , date_time , id_kategori , harga_jual , nama_karyawan , status , status_hapus) VALUES ('$judul_page','$id_user','$isi_page','$date_time','$id_kategori','$harga_jual','$nama_karyawan','$status','$status_hapus')");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php

  if(isset($_POST['edit_rekrutmen'])){

$id_user = @$_POST['id_user'];

$nama_user = @$_POST['nama_user'];

$username_user = @$_POST['username_user'];

$password_user = @$_POST['password_user'];

$id_kategori = @$_POST['id_kategori'];

$tempat_lahir = @$_POST['tempat_lahir'];

$tanggal_lahir = @$_POST['tanggal_lahir'];

$pend_terakhir = @$_POST['pend_terakhir'];

$agama_user = @$_POST['agama_user'];

$alamat = @$_POST['alamat'];

$reff = @$_POST['reff'];

$jabatan_user = @$_POST['jabatan_user'];

$status_peker = @$_POST['status_peker'];



$foto = $_FILES['foto']['name'];


$result = mysqli_query($id_mysqli,"SELECT * FROM user where id_user='$id_user'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['foto'];

       $tmpfile = "file/$gambar";

                unlink ($tmpfile);



            $query_1 = mysqli_query($id_mysqli,"UPDATE user SET nama_user='$nama_user' , username_user='$username_user' , password_user=md5('$password_user') , id_kategori='$id_kategori' , reff='$reff' , tempat_lahir='$tempat_lahir' , tanggal_lahir='$tanggal_lahir' , pend_terakhir='$pend_terakhir' , agama_user='$agama_user' , alamat='$alamat' , jabatan_user='$jabatan_user' , status_peker='$status_peker' , foto='$foto' WHERE id_user='$id_user'");

            $simpan_edit_rekrutmen[] = mysqli_query($query_1);



            //mysqli_query($simpan_edit_rekrutmen);

            if ($simpan_edit_rekrutmen) {

              move_uploaded_file($_FILES['foto']['tmp_name'], "file/".$_FILES['foto']['name']);

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php

  if(isset($_POST['edit_pemecatan'])){
	  
$id_page = @$_POST['id_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET date_time='$date_time', status_pekerjaan='$status_pekerjaan' WHERE id_page='$id_page'");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php

  if(isset($_POST['edit_penggajian'])){
	  
$id_user = @$_POST['id_user'];


$gaji_pokok = @$_POST['gaji_pokok'];

$bonus = @$_POST['bonus'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE user SET gaji_pokok='$gaji_pokok', bonus='$bonus' WHERE id_user='$id_user'");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=accounting'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>


<?php

  if(isset($_POST['edit_management_project'])){

$id_page = @$_POST['id_page'];

$status = @$_POST['status'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET status='$status' WHERE id_page='$id_page'");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php

  if(isset($_POST['simpan_pembelian'])){

$id_user = $_POST['id_user'];

$judul_page = $_POST['judul_page'];

$isi_page = $_POST['isi_page'];

$nama_toko = $_POST['nama_toko'];

$harga_pokok = $_POST['harga_pokok'];

$harga_jual= $_POST['harga_jual'];

$stok= $_POST['stok'];

$date_time = $_POST['date_time'];

$id_file = $_POST['id_file'];

$id_kategori = $_POST['id_kategori'];

$status_hapus = $_POST['status_hapus'];



$target_dir = "file/";

$target_file = basename($_FILES["nama_file"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



$query_1 = "INSERT INTO page (judul_page , id_user , isi_page , date_time , id_kategori , id_file , nama_toko , stok , harga_pokok , harga_jual , status_hapus) VALUES ('$judul_page','$id_user','$isi_page','$date_time','$id_kategori','$id_file','$nama_toko','$stok','$harga_pokok','$harga_jual','$status_hapus')";

$result[] = mysqli_query($id_mysqli,$query_1);



$query_2 = "INSERT INTO file (id_file,nama_file,id_kategori) VALUES ('$id_file','$target_file','$id_kategori')";

$result[] = mysqli_query($id_mysqli,$query_2);



// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["nama_file"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo"<script>alert('File tidak ada Gambar!')</script>";

        print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=accounting'></head><body></body></html>");

        $uploadOk = 0;

    }

} else {

    if (move_uploaded_file($_FILES["nama_file"]["tmp_name"], "file/" .$target_file)) {

        echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=accounting'></head><body></body></html>");

    } else {

        echo"<script>alert('Maaf, ada kesalahan saat mengupload file Anda')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=accounting'></head><body></body></html>");

    }

}

}

?>







<?php

  if(isset($_POST['simpan_kategori'])){
	  
$nama_kategori = $_POST['nama_kategori'];

$zi = count($nama_kategori);

$sub_kategori_1 = $_POST['sub_kategori_1'];

$yi = count($sub_kategori_1);

for($x=0;$x<$zi;$x++){
for($y=0;$y<$yi;$y++){

$hasil = mysqli_query($id_mysqli,"INSERT INTO kategori (nama_kategori , sub_kategori_1) VALUES ('$nama_kategori[$x]','$sub_kategori_1[$y]')");

}}



if (!$hasil)

  echo "<script>alert('Simpan Gagal !!!')</script>";

else

  echo "<script>alert('Simpan Berhasil')</script>";



print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");



}

?>







<?php

  if(isset($_POST['simpan_branding'])){

$id_user = @$_POST['id_user'];

$id_file = @$_POST['id_file'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];

$sub_id_kategori = @$_POST['sub_id_kategori'];

$status_hapus = @$_POST['status_hapus'];



$target_dir = "file/";

$target_file = basename($_FILES["nama_file"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



$query_1 = "INSERT INTO page (id_user , isi_page , date_time , id_kategori , sub_id_kategori , id_file , status_hapus) VALUES ('$id_user','$isi_page','$date_time','$id_kategori','$sub_id_kategori','$id_file','$status_hapus')";

$result[] = mysqli_query($id_mysqli,$query_1);



$query_2 = "INSERT INTO file (id_file,nama_file,id_kategori) VALUES ('$id_file','$target_file','$id_kategori')";

$result[] = mysqli_query($id_mysqli,$query_2);



// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["nama_file"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo"<script>alert('File tidak ada Gambar!')</script>";

        print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

        $uploadOk = 0;

    }

}

// Check if file already exists

if (file_exists($target_file)) {

    echo"<script>alert('Maaf, File sudah ada')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

    $uploadOk = 0;

}

// Check file size

if ($_FILES["nama_file"]["size"] > 5000000) {

    echo"<script>alert('Maaf, File terlalu besar')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"

&& $imageFileType != "JPEG" && $imageFileType != "gif" && $imageFileType != "GIF" && $imageFileType != "pdf" && $imageFileType != "PDF" && $imageFileType != "doc" && $imageFileType != "DOC" && $imageFileType != "docx" && $imageFileType != "DOCX" && $imageFileType != "xls" && $imageFileType != "XLS" && $imageFileType != "xlsx" && $imageFileType != "XLSX" ) {

    echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["nama_file"]["tmp_name"], "file/" .$target_file)) {

        echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

    } else {

        echo"<script>alert('Maaf, ada kesalahan saat mengupload file Anda')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

    }

}

}

?>







<?php

  if(isset($_POST['simpan_file'])){

$id_user = @$_POST['id_user'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$keterangan = @$_POST['keterangan'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];

$status_hapus = @$_POST['status_hapus'];



$target_dir = "file/";

$target_file = basename($_FILES["nama_file"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



$query_1 = "INSERT INTO page (judul_page, id_user, isi_page,keterangan, date_time , id_kategori , id_file , status_hapus) VALUES ('$judul_page','$id_user','$isi_page','$keterangan','$date_time','$id_kategori','$id_file','$status_hapus')";

$result[] = mysqli_query($id_mysqli,$query_1);



$query_2 = "INSERT INTO file (id_file,nama_file,id_kategori) VALUES ('$id_file','$target_file','$id_kategori')";

$result[] = mysqli_query($id_mysqli,$query_2);



// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["nama_file"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo"<script>alert('File tidak ada Gambar!')</script>";

        print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

        $uploadOk = 0;

    }

}

// Check if file already exists

if (file_exists($target_file)) {

    echo"<script>alert('Maaf, File sudah ada')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

    $uploadOk = 0;

}

// Check file size

if ($_FILES["nama_file"]["size"] > 5000000) {

    echo"<script>alert('Maaf, File terlalu besar')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg"

&& $imageFileType != "JPEG" && $imageFileType != "gif" && $imageFileType != "GIF" && $imageFileType != "pdf" && $imageFileType != "PDF" && $imageFileType != "doc" && $imageFileType != "DOC" && $imageFileType != "docx" && $imageFileType != "DOCX" && $imageFileType != "xls" && $imageFileType != "XLS" && $imageFileType != "xlsx" && $imageFileType != "XLSX" ) {

    echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["nama_file"]["tmp_name"], "file/" .$target_file)) {

        echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

    } else {

        echo"<script>alert('Maaf, ada kesalahan saat mengupload file Anda')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

    }

}

}

?>

<?php

  if(isset($_POST['simpan_tugas'])){

$untuk = @$_POST['untuk'];
$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$status_tugas = @$_POST['status_tugas'];

$query_1 = mysqli_query($id_mysqli,"INSERT INTO page (judul_page,untuk,status_tugas,isi_page,date_time ) VALUES ('$judul_page','$untuk','$status_tugas','$isi_page','$date_time')");

    if ($query_1) {

        echo"<script>alert('Penyimpanan Berhasil')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    } else {

        echo"<script>alert('Maaf, ada kesalahan saat mengupload file Anda')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

    }

}

?>


<?php

  if(isset($_POST['edit_file'])){
	  
$id_page = $_POST['id_page'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$keterangan = @$_POST['keterangan'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];



$nama_file = $_FILES['nama_file']['name'];



$result = mysqli_query($id_mysqli,"SELECT * FROM file where id_file='$id_file'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['nama_file'];

       $tmpfile = "file/$gambar";

                unlink ($tmpfile);



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , keterangan='$keterangan' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' WHERE id_page='$id_page' AND id_file='$id_file'");

            $simpan_edit_file[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori' WHERE id_file='$id_file'");

            $simpan_edit_file[] = mysqli_query($query_2);



            //mysqli_query($simpan_edit_publishing);

            if ($simpan_edit_file) {

              move_uploaded_file($_FILES['nama_file']['tmp_name'], "file/".$_FILES['nama_file']['name']);

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=file'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php
  if(isset($_POST['edit_branding'])){
	  
$id_page = $_POST['id_page'];
$id_file = @$_POST['id_file'];
$isi_page = @$_POST['isi_page'];
$date_time = @$_POST['date_time'];
$id_kategori = @$_POST['id_kategori'];
$sub_sub_id_kategori = @$_POST['sub_sub_id_kategori'];

$nama_file = $_FILES['nama_file']['name'];
if(empty($nama_file)){
	$query_1 = mysqli_query($id_mysqli,"UPDATE page SET isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' WHERE id_page='$id_page' AND id_file='$id_file'");

            //$simpan[] = mysqli_query($query_1);
			
			echo"<script>alert('Simpan Sukses')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

}elseif($nama_file){
$result = mysqli_query($id_mysqli,"SELECT * FROM file where id_file='$id_file'");
         $dt=mysqli_fetch_array($result);
         $gambar=$dt['nama_file'];
       $tmpfile = "file/$gambar";
                unlink ($tmpfile);

            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , sub_sub_id_kategori='$sub_sub_id_kategori' , id_file='$id_file' WHERE id_page='$id_page' AND id_file='$id_file'");
            $simpan[] = mysqli_query($query_1);

            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori' WHERE id_file='$id_file'");
            $simpan[] = mysqli_query($query_2);

            //mysqli_query($simpan);
            if ($simpan) {
              move_uploaded_file($_FILES['nama_file']['tmp_name'], "file/".$_FILES['nama_file']['name']);
                echo"<script>alert('Penyimpanan Berhasil!')</script>";
                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");
             }
              else {
                echo 'Proses Gagal!';
              }
}
}
?>







<?php

  if(isset($_POST['edit_artikel'])){
	  
$id = @$_POST['id'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];



$nama_file = $_FILES['nama_file']['name'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' WHERE id_page='$id'");

            $simpan_edit_artikel[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori'");

            $simpan_edit_artikel[] = mysqli_query($query_2);



            //mysqli_query($simpan_edit_artikel);

            if ($simpan_edit_artikel) {

              move_uploaded_file($_FILES['nama_file']['tmp_name'], "file/".$_FILES['nama_file']['name']);

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }



?>



<?PHP if (isset($_POST['edituploadgambar'])) {// UNTUK MENGEDIT

    $id_page=$_GET['id_page'];



    $gambar=$_FILES['nama_file']['name'];

    $tgl=date("h:i:s-j-m-Y");

    if($gambar == ""){

    $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' WHERE id_page='$id'");

            $edit[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori'");

            $edit[] = mysqli_query($query_2);

    if(!$edit-portofolio){ echo '<script language="javascript" type="text/javascript">

alert("Edit Data dan Gambar Berhasil !");</script>';

    echo "<meta http-equiv='refresh' content='0; url=index.php?menu=publishing'>";

              } else

              { echo '<script language="javascript" type="text/javascript">

alert("Edit Data Berhasil !");</script>';

    echo "<meta http-equiv='refresh' content='0; url=index.php?menu=publishing'>";

}

}

else{

$cari=mysqli_query($id_mysqli,"SELECT * FROM file");

        $dt=mysqli_fetch_array($cari);

        $gambar=$dt['nama_file'];

        $tmpfile = "file/$gambar";



$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');

if(!in_array($_FILES['nama_file']['type'],$typeGambar)){

echo' FORMAT GAMBAR SALAH';

}elseif($fileSize=$_FILES['nama_file']['size']> 5000000 || $fileError > 5000000){

unlink ($tmpfile);

$query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' WHERE id_page='$id'");

            $edit2[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori'");

            $edit2[] = mysqli_query($query_2);

    $move = move_uploaded_file($_FILES['nama_file']['tmp_name'],'file/'.$gambar);

    if(!$edit2)

         { echo '<script language="javascript" type="text/javascript">

alert("edit gambar gagal !");</script>';

    echo "<meta http-equiv='refresh' content='0; url=index.php?menu=publishing'>";





              } else

              { echo '<script language="javascript" type="text/javascript">

alert("edit gambar berhasil !");</script>';

    echo "<meta http-equiv='refresh' content='0; url=index.php?menu=publishing'>";



}

               }

    }

    }

}

?>





<?php

  if(isset($_POST['edit_banner'])){

$id = @$_POST['id'];

$id_page = $_POST['id_page'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];



$nama_file = $_FILES['nama_file']['name'];



$result = mysqli_query($id_mysqli,"SELECT * FROM file where id_file='$id_file'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['nama_file'];

       $tmpfile = "file/$gambar";

                unlink ($tmpfile);



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' WHERE id_page='$id' AND id_file='$id_file'");

            $simpan_edit_banner[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori' WHERE id_file='$id_file'");

            $simpan_edit_banner[] = mysqli_query($query_2);



            //mysqli_query($simpan_edit_banner);

            if ($simpan_edit_banner) {

              move_uploaded_file($_FILES['nama_file']['tmp_name'], "file/".$_FILES['nama_file']['name']);

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }


}

?>





<?php

  if(isset($_POST['edit_logo'])){


$id = @$_POST['id'];

$id_page = $_POST['id_page'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];



$nama_file = $_FILES['nama_file']['name'];



$result = mysqli_query($id_mysqli,"SELECT * FROM file where id_file='$id_file'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['nama_file'];

       $tmpfile = "file/$gambar";

                unlink ($tmpfile);



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' WHERE id_page='$id' AND id_file='$id_file'");

            $simpan_edit_logo[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori' WHERE id_file='$id_file'");

            $simpan_edit_logo[] = mysqli_query($query_2);



            //mysqli_query($simpan_edit_logo);

            if ($simpan_edit_logo) {

              move_uploaded_file($_FILES['nama_file']['tmp_name'], "file/".$_FILES['nama_file']['name']);

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>



<?php

  if(isset($_POST['edit_copyright'])){

$id = @$_POST['id'];

$id_page = $_POST['id_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' WHERE id_page='$id'");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=branding'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>




<?php

  if(isset($_POST['edit_status'])){


$status_tugas = @$_POST['status_tugas'];

$zi = count($status_tugas);

$untuk = @$_POST['untuk'];

$yi = count($untuk);

$judul_page = @$_POST['judul_page'];

$xi = count($judul_page);
for($x=0;$x<$xi;$x++){
for($y=0;$y<$yi;$y++){
for($z=0;$z<$zi;$z++){
            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET status_tugas='$status_tugas[$z]' WHERE judul_page='$judul_page[$x]' AND untuk='$untuk[$y]'");
}}}


            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=network'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>





<?php

  if(isset($_POST['edit_kategori'])){

$id_kategori = $_POST['id_kategori'];

$nama_kategori = @$_POST['nama_kategori'];

$fitur = @$_POST['fitur'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE kategori SET nama_kategori='$nama_kategori' , fitur='$fitur' WHERE id_kategori='$id_kategori'");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=kategori'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }

}

?>







<?php

  if(isset($_POST['edit_pembelian'])){

$id_page = $_POST['id_page'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];

$nama_toko = @$_POST['nama_toko'];

$stok = @$_POST['stok'];

$harga_jual = @$_POST['harga_jual'];

$harga_pokok = @$_POST['harga_pokok'];



$nama_file = $_FILES['nama_file']['name'];



$result = mysqli_query($id_mysqli,"SELECT * FROM file WHERE id_file='$id_file'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['nama_file'];

       $tmpfile = "file/$gambar";

                unlink ($tmpfile);



            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , id_file='$id_file' , nama_toko='$nama_toko' , stok='$stok' , harga_jual='$harga_jual' , harga_pokok='$harga_pokok' WHERE id_page='$id' AND id_file='$id_file'");

            $simpan[] = mysqli_query($query_1);



            $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$nama_file' , id_kategori='$id_kategori' WHERE id_file='$id_file'");

            $simpan[] = mysqli_query($query_2);

            //mysqli_query($simpan_edit_pembelian);

            if ($simpan) {

              move_uploaded_file($_FILES['nama_file']['tmp_name'], "file/".$_FILES['nama_file']['name']);

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=accounting'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }


}

?>



<?php

  if(isset($_POST['edit_user'])){

$id = @$_POST['id'];

$id_user = $_POST['id_user'];

$nama_user = @$_POST['nama_user'];

$username_user = @$_POST['username_user'];

$password_user = $_POST['password_user'];

$id_kategori = $_POST['id_kategori'];



            $query_1 = mysqli_query($id_mysqli,"UPDATE user SET nama_user='$nama_user' , username_user='$username_user' , password_user=md5('$password_user') , id_kategori='$id_kategori' WHERE id_user='$id'");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Penyimpanan Berhasil!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=user'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }


}

?>









<?php

  if(isset($_POST['simpan_register'])){

$id_file = @$_POST['id_file'];

$nama_user = @$_POST['nama_user'];

$username_user = @$_POST['username_user'];

$password_user = @$_POST['password_user'];

$reff = @$_POST['reff'];



            $query_1 = mysqli_query($id_mysqli,"INSERT INTO user (nama_user , username_user , password_user , reff , id_file) VALUES ('$nama_user','$username_user',md5('$password_user'),'$reff','$id_file')");



            mysqli_query($query_1);

            if ($query_1) {

                echo"<script>alert('Registrasi User Sukses!')</script>";

                print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=user'></head><body></body></html>");

             }

              else {

                echo 'Proses Gagal!';

              }


}

?>


<?php

  if(isset($_POST['simpan_publishing'])){

?>



<?php

$id_user = @$_POST['id_user'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$date_picker = @$_POST['date_picker'];

$id_kategori = @$_POST['id_kategori'];

$sub_id_kategori = @$_POST['sub_id_kategori'];

$sub_id_kategori_2 = @$_POST['sub_id_kategori_2'];

$status_hapus = @$_POST['status_hapus'];


if($date_picker){
	$query_1 = "INSERT INTO page (judul_page , id_user , isi_page , date_time , id_kategori , sub_id_kategori , sub_id_kategori_2 , id_file , status_hapus) VALUES ('$judul_page','$id_user','$isi_page','$date_picker','$id_kategori','$sub_id_kategori','$sub_id_kategori_2','$id_file','$status_hapus')";

$result[] = mysqli_query($id_mysqli,$query_1);

//error_reporting(0);
$folder = "file/baru/";
$upload_image = $_FILES['nama_file']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 750;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['nama_file']['tmp_name'], $filesave);

// menentukan nama image setelah dibuat
$resize_image = $folder . "infogk_" . uniqid(rand()) . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

echo"<script>alert('Simpan Sukses')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");


$query_2 = "INSERT INTO file (id_file,nama_file,id_kategori) VALUES ('$id_file','$resize_image','$id_kategori')";

$result[] = mysqli_query($id_mysqli,$query_2);
}else{
$query_1 = "INSERT INTO page (judul_page , id_user , isi_page , date_time , id_kategori , sub_id_kategori , sub_id_kategori_2 , id_file , status_hapus) VALUES ('$judul_page','$id_user','$isi_page','$date_time','$id_kategori','$sub_id_kategori','$sub_id_kategori_2','$id_file','$status_hapus')";

$result[] = mysqli_query($id_mysqli,$query_1);

//error_reporting(0);
$folder = "file/baru/";
$upload_image = $_FILES['nama_file']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 750;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['nama_file']['tmp_name'], $filesave);

// menentukan nama image setelah dibuat
$resize_image = $folder . "infogk_" . uniqid(rand()) . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

echo"<script>alert('Simpan Sukses')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");


$query_2 = "INSERT INTO file (id_file,nama_file,id_kategori) VALUES ('$id_file','$resize_image','$id_kategori')";

$result[] = mysqli_query($id_mysqli,$query_2);

//$ambil = mysqli_query($id_mysqli,"SELECT * FROM page INNER JOIN file ON page.id_file=file.id_file ORDER BY page.id_page DESC LIMIT 1");
//$ambil_hasil = mysqli_fetch_array($ambil);

//$config = array();
//$config['appId'] = '261681520974001';
//$config['secret'] = 'c844827c7ced97e03c6cf316f64fd95a';
//$config['fileUpload'] = true;
//$fb = new Facebook($config);
//$params = array(
//  "access_token" => "EAADtZC3oaGLEBAGN5S7Aj72zOqcShZBoRImGi1pO0Fe2MZBfQXjET9ZCYGcjcMnF7ySp7cOKUExPm5CKJ6w6y5Maat5fr4juJI8dZCRIIcVlTMDZCVzaDNhJcOBktX5ZArtR3PCquKjhGl0a0XMcf8qnZBdnspMwqqQZD",  
//  "message" => $ambil_hasil['judul_page'],
//  "link" => $base_url."detail.php?id=".$ambil_hasil['id_page']."-".str_replace(' ', '-', $ambil_hasil['judul_page']),
 // "picture" => $base_url."dashboard/".$ambil_hasil['nama_file'],
 // "name" => $ambil_hasil['judul_page'],
//  "caption" => $ambil_hasil['date_time'],
//  "description" => "selengkapnya kunjungi".$base_url."detail.php?id=".$ambil_hasil['id_page']."/".str_replace(' ', '-', $ambil_hasil['judul_page'])
//);
//try {
 // $ret = $fb->api('/261681520974001/feed', 'POST', $params);
 // echo 'Successfully posted to Page Facebook';
//} catch(Exception $e) {
 // echo $e->getMessage();
//} 
?>



<?php

  }}

?>

<?php

  if(isset($_POST['simpan_subkategori_publishing'])){

?>
<?php
$id_user = $_POST['id_user'];
$kategori = $_POST['kategori'];
$subkategori = $_POST['sub_kategori'];
$fitur = 'publishing';
$query_sk = mysqli_query($id_mysqli,"INSERT into kategori (nama_kategori,sub_kategori,fitur,id_user)VALUES('$kategori','$subkategori','$fitur','$id_user')");

            //$simpan[] = mysqli_query($query_sk);
			
			echo"<script>alert('Simpan Sukses')</script>";

    //print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

?>
<?php

  }

?>
<?php

  if(isset($_POST['edit_publishing'])){

?>



<?php

$id_page = $_POST['id_page'];

$id_file = @$_POST['id_file'];

$judul_page = @$_POST['judul_page'];

$isi_page = @$_POST['isi_page'];

$date_time = @$_POST['date_time'];

$id_kategori = @$_POST['id_kategori'];

$sub_id_kategori_2 = @$_POST['sub_id_kategori_2'];

$upload_image = $_FILES['nama_file']['name'];

if(empty($upload_image)){
	$query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , sub_id_kategori_2='$sub_id_kategori_2' WHERE id_page='$id_page' AND id_file='$id_file'");

            //$simpan[] = mysqli_query($query_1);
			
			echo"<script>alert('Simpan Sukses')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

}elseif($upload_image){
	$result = mysqli_query($id_mysqli,"SELECT * FROM file where id_file='$id_file'");

         $dt=mysqli_fetch_array($result);

         $gambar=$dt['nama_file'];

       $tmpfile = "$gambar";

                unlink ($tmpfile);

            $query_1 = mysqli_query($id_mysqli,"UPDATE page SET judul_page='$judul_page' , isi_page='$isi_page' , date_time='$date_time' , id_kategori='$id_kategori' , sub_id_kategori_2='$sub_id_kategori_2' , id_file='$id_file' WHERE id_page='$id_page' AND id_file='$id_file'");

            //$simpan[] = mysqli_query($query_1);
            //mysqli_query($simpan_edit_publishing);

            //error_reporting(0);
$folder = "file/baru/";
// tentukan ukuran width yang diharapkan
$width_size = 750;

// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['nama_file']['tmp_name'], $filesave);

// menentukan nama image setelah dibuat
$resize_image = $folder . "infogk_" . uniqid(rand()) . ".jpg";

// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);

// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;

// menentukan width yang baru
$newwidth = $width / $k;

// menentukan height yang baru
$newheight = $height / $k;

// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// menyimpan image yang baru
imagejpeg($thumb, $resize_image);

imagedestroy($thumb);
imagedestroy($source);

echo"<script>alert('Simpan Sukses')</script>";

    print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=publishing'></head><body></body></html>");

 $query_2 = mysqli_query($id_mysqli,"UPDATE file SET id_file='$id_file' , nama_file='$resize_image' , id_kategori='$id_kategori' WHERE id_file='$id_file'");

            //$simpan[] = mysqli_query($query_2);
}



?>

<?php 
  }
?>
