<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "database";

	$koneksi = mysqli_connect($host, $user, $pass, $db_name);
	header("location:toko.php");
?>