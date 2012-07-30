<?php 
session_start();
include '../library/user_handler.php';
echo "masuk";
$userid = $_POST['userid'];
$password = $_POST['password'];

echo $userid."<br />";
echo $password."<br />";

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