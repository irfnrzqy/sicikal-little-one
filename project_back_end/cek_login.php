<?php

	session_start();

	include 'login.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($koneksi,"select * from login where username= '$username' and password= '$password'");

	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);
		if ($data["type_user"] == "admin"){
			$_SESSION['username'] ==$username;
			$_SESSION['tipe_user'] =="admin";
			header("location:admin.php");

		}else if($data["type_user"] =="pengguna"){
			$_SESSION['username'] ==$username;
			$_SESSION['tipe_user'] =="pengguna";
			header("location:toko.php");

		}

	}
?>