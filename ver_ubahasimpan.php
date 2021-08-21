<?php

error_reporting(0);
include 'config/koneksi.php';

	$kd_anggota     = $_POST['kd_anggota'];
	$nim			= $_POST['nim'];
	$nama	        = $_POST['nama'];
	$progdi			= $_POST['progdi'];
	$jekel			= $_POST['jekel'];
	$ttl			= $_POST['ttl'];
	$alamat			= $_POST['alamat'];
	$nohp			= $_POST['nohp'];
// Perintah Update data
$sql_ubah=("UPDATE tb_anggota SET
	 nim			= '$nim',
	nama	        = '$nama',
	progdi			= '$progdi',
	jekel			= '$jekel',
	ttl			    = '$ttl',
	alamat			= '$alamat',
	nohp			= '$nohp'
					   where kd_anggota = '$kd_anggota'");
mysql_query($sql_ubah, $konek)
or die ("Perubahan data gagal".mysql_error());
include "ver_ubahadirek.php";
?>