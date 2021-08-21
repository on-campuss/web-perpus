<?php

error_reporting(0);
include 'config/koneksi.php';

	$id_login       = $_POST['id_login'];
	$username		= $_POST['username'];
	$password	    = $_POST['password'];
	$nama			= $_POST['nama'];
	$alamat			= $_POST['alamat'];
	$nohp			= $_POST['nohp'];
	$nidn			= $_POST['nidn'];
	$jekel			= $_POST['jekel'];
	$ttl			= $_POST['ttl'];
// Perintah Update data
$sql_ubah=("UPDATE tb_login SET
	 username			= '$username',
	password	        = '$password',
	nama			= '$nama',
	alamat			    = '$alamat',
	nohp			= '$nohp',
	nidn			= '$nidn',
	jekel			= '$jekel',
	ttl			= '$ttl'
					   where level = 'user'");
mysql_query($sql_ubah, $konek)
or die ("Perubahan data gagal".mysql_error());
include "ver_ubahprodirek.php";
?>