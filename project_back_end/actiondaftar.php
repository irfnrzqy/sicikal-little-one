<?php 
	include 'koneksidaftar.php';

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query="INSERT INTO daftar (email, password) VALUES ('$email', '$password')";
	mysqli_query($koneksi, $query);
 ?>