<?php 
session_start();
include '../library/user_handler.php';

$userid = $_POST['userid'];
$password = $_POST['password'];

$handler = new userHandler();

if($handler->user->login($userid,$password))
{
	if ($handler->user->isAdmin())
	{
		header('location:../Layout/index.php');
		
	}
	else if ($handler->user->isPurchasing())
	{
		echo "Masuk Purchasing";
	}
	else if ($handler->user->isGudang())
	{
		echo "Masuk Gudang";
	}
	else if ($handler->user->isFinance())
	{
		echo "Masuk Finance";
	}
}
else 
	//header('location:login.html');
	echo "Gagal.. failed.. ulangi.. kamu 0 !!";
?>