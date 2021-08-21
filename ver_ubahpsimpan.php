<?php

error_reporting(0);
include 'config/koneksi.php';
	$id= $_POST['id_pinjam'];	
	$judul     = $_POST['judul'];
	$nama			= $_POST['nama'];
	$pinjam	        = $_POST['pinjam'];
	$kembali			= $_POST['kembali'];
// Perintah Update data
$sql_ubah=("UPDATE peminjaman SET
	 judul			= '$judul',
	nama	        = '$nama',
	pinjam			= '$pinjam',
	kembali			= '$kembali'
					   where id_pinjam = '$id'");
mysql_query($sql_ubah, $konek)
or die ("Perubahan data gagal".mysql_error());
include "ver_ubahpdirek.php";
?>