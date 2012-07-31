<?php 
session_start();
include '../library/user_handler.php';

$userid = $_POST['userid'];
$password = $_POST['password'];

$handler = new userHandler();

if($handler->user->login($userid,$password))
{
	if ($handler->user-> == "ADM")
	{
		header('location:../Layout/index.php');
	}
	else //if ($handler->user->userAtt['userID'] == "Test")
	{
		echo "Masuk Test";
	}
}
else 
	//header('location:login.html');
	echo "Gagal.. failed.. ulangi.. kamu 0 !!";
?>