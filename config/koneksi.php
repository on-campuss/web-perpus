<?php
$server ="localhost";
$user ="root";
$passwd ="280496efi";
$dbs ="verlyperpus";
$konek=mysql_connect($server, $user, $passwd)
or die ("Gagal konek ke server MySQL".mysql_error());
$bukadb=mysql_select_db($dbs)
or die ("Gagal membuka database $dbs".mysql_error());
?>