<?php
$pemakai = "infogunu_softek";
$password = "1dw3bh0st";

$id_mysql = mysql_connect("localhost",$pemakai,$password);

if (! $id_mysql)
	die("Data Base MySQL tak dapat dibuka");

if (! mysql_select_db("infogunu_softek", $id_mysql))
	die("Data Base tidak bisa di pilih");

?>
