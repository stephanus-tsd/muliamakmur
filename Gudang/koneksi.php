<?php

/**
 * @author 
 * @copyright 2012
 */

$host = "localhost";
  $userdb = "root";
  $passdb = "";
  $dbname = "project1";
 
  $con = mysql_connect($host,$userdb,$passdb);
  if (!$con)
  {
     die('Gagal melakukan koneksi : ' . mysql_error());
  }else{
     mysql_select_db($dbname);
  }


?>