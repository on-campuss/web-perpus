<?php

error_reporting(0);
include 'config/koneksi.php';

$kd_buku	= $_POST['kd_buku'];
	$judul	= $_POST['judul'];
	$pengarang	= $_POST['pengarang'];
	$penerbit	= $_POST['penerbit'];
	$tahun_terbit	= $_POST['tahun_terbit'];
	$isbn	= $_POST['isbn'];
	$kt_buku	= $_POST['kt_buku'];
	$jn_buku	= $_POST['jn_buku'];
	$denda	= $_POST['denda'];
	$jml	= $_POST['jml'];
	$lks	= $_POST['lks'];
$bykFile = count($_FILES['picture']['name']);
  //get the file name
$fileSize = $_FILES['picture']['size']; //get the size
$fileError = $_FILES['picture']['error']; //get the error when upload\
$direktori= "assets/verlybook";
//check if the file is corrupt or error
for ($i = 0; $i < $bykFile; $i++) {
$fileName = $_FILES['picture']['name'][$i];
$Images=$direktori.basename($_FILES['picture']['name'][$i]);
$move = move_uploaded_file($_FILES['picture']['tmp_name'][$i],$Images); //save image to the folder
}
// Perintah Update data
$sql_ubah=("UPDATE buku SET
judul			= '$judul',
							pengarang		= '$pengarang',
							penerbit		= '$penerbit',
							tahun_terbit	= '$tahun_terbit',
							isbn			= '$isbn',
							kt_buku			= '$kt_buku',
							jn_buku			= '$jn_buku',
							denda			= '$denda',
							jml				= '$jml',
							lks				= '$lks',
							picture			= '$fileName'
							where kd_buku = '$kd_buku'
							");
mysql_query($sql_ubah, $konek)
or die ("Perubahan data gagal".mysql_error());
include "ver_ubahdirek.php";
?>