<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "project";

$connect = mysql_connect ($host, $username, $password);

$choosedatabase = mysql_select_db ($database, $connect);

if ($choosedatabase) echo "berhasil";
else echo "gagal";
	


?>