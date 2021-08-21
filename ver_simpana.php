<?php
error_reporting(0);
include"config/koneksi.php";
$anggota =$_POST['anggota'];
$nim=$_POST['nim'];
$nama =$_POST['nama'];
$progdi =$_POST['progdi'];
$jekel=$_POST['jekel'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$hp=$_POST['hp'];
$sql_simpan="INSERT INTO tb_anggota
(kd_anggota,nim,nama,progdi,jekel,ttl,alamat,nohp)
VALUES ('$anggota','$nim','$nama','$progdi','$jekel','$ttl','$alamat','$hp')"; 


mysql_query($sql_simpan, $konek)
or die ("Memasukan data produk gagal".mysql_error());
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('ver_lihata.php')</script>
