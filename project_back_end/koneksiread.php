<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$nama_db = "database"; //nama database

	$koneksi = mysqli_connect($host, $user, $pass, $nama_db); //pastikan urutan nya benar
	if (!$koneksi){
		die("connection Failed:".mysqli_connect_error());
	}

?>