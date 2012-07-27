<?php
include '../library/user_selector.php';

Class userHandler
{
	//library
	private $selector;
	private $session;
	
	//user
	public $user;
	
	function __construct()
	{
		$this->selector = new userSelector();
		$this->user = $this->selector->select_user();		//select user
	}
}
?>