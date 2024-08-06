<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "login";

mysql_connect($hostname,$username,$password) or die ("Koneksi Gagal");
mysql_select_db($database) or die ("Database Tidak Bisa dibuka");
?>