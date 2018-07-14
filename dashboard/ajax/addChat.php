<?php
	if(isset($_POST['isi_pesan']) && isset($_POST['id_user']))
	{
		// include Database connection file 
		include("../core/koneksi.php");

		// get values 
		$isi_pesan = $_POST['isi_pesan'];
		$id_user = $_POST['id_user'];
		$id_user2 = $_POST['id_user2'];
		$chat_group = $_POST['chat_group'];
		$waktu_pesan = $_POST['waktu_pesan'];

		$query = "INSERT INTO pesan(isi_pesan, id_user, id_user2, chat_group, waktu_pesan) VALUES('$isi_pesan', '$id_user', '$id_user2', '$chat_group', '$waktu_pesan')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>