<?php
session_start();
include '../library/user_handler.php';

$username = $_POST['user'];
$password = $_POST['password'];

$handler = new userHandler();

if($handler->user->login($username,$password))
{
	header('location:../application_view/utamass12.php');
	echo "berhasil loginaaaa<br />";
}
else 
	//header('location:login.html');
	echo "Gagal.. failed.. ulangi.. kamu 0 !!";
?>