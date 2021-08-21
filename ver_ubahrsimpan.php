<?php

error_reporting(0);
include 'config/koneksi.php';

	$username		= $_GET['id_login'];
// Perintah Update data
$sql_ubah=("UPDATE tb_login SET
	 password			= '201451171'
					   where id_login = '$_GET[verubah]'");
mysql_query($sql_ubah, $konek)
or die ("Perubahan data gagal".mysql_error());
include "ver_ubahrdirek.php";
?>