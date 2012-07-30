<?php 
session_start();
include '../library/user_handler.php';

$userid = $_POST['userid'];
$password = $_POST['password'];

$handler = new userHandler();

if($handler->user->login($userid,$password))
{
	//header('location:../application_view/utamass12.php');
	echo "berhasil login<br />";
}
else 
	//header('location:login.html');
	echo "Gagal.. failed.. ulangi.. kamu 0 !!";
?>