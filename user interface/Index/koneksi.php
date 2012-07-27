<?php

/**
 * @author 
 * @copyright 2012
 */

$host = "localhost";
  $userdb = "root";
  $passdb = "";
  $dbname = "db_mulia_makmur";
 
  $con = mysql_connect($host,$userdb,$passdb);
  if (!$con)
  {
     die('Gagal melakukan koneksi : ' . mysql_error());
  }else{
     mysql_select_db($dbname);
  }


?>