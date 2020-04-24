<?php
	include 'koneksi.php';

	$nama_barang = $_POST['nama_barang'];
	$harga_barang = $_POST['harga_barang'];
	$gambar_barang = $_FILE['gambar_barang'];
	$kode_produk = $_POST['kode_produk'];

	$query = "INSERT INTO produk (nama_barang, harga_barang, gambar_barang, kode_produk) VALUES ($nama_barang, $harga_barang, $gambar_barang, $kode_produk)";
?>