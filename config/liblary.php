<?php
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];
$tgl_sekarang = date("d");
$thn_sekarang = date("Y");
$jam_sekarang = date("h:m");
$nama_bln = array(1=>"Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
$tgl= date("m");
$bulanskrng= $nama_bln[$tgl];
?>