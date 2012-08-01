<?php
session_start();
include '..\library\user_handler.php';
$handler = new userHandler();

$handler->user->logout();
?>