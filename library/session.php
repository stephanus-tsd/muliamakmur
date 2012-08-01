<?php
Class Session
{
	function __construct()
	{
		//echo '------------------- session.php -----------------------------'.'</br>';
		//echo 'session dibuat'.'</br>';
	}
	
	//checking if user session exists
	public function isset_userSession()
	{
		if(isset($_SESSION['user']))
			return true;
		else
			return false;
	}
	
	//get user session
	public function get_userSession()
	{
		$session_data = array();
		if(isset($_SESSION['user']))
		{
			foreach($_SESSION['user'] as $key => $value)
			{
				$session_data[$key] = $value;
			}
			return $session_data;
		}
		else
			return false;
	}
	
	/*
	* $userData = array
	* EX : $userData['username'] && $userData['email']
	*/
	public function set_userSession($userData)
	{
		foreach($userData as $key => $data)
		{
			$_SESSION['user'][$key] = $data; //set all user session data
		}
	}
	
	public function unset_userSession()
	{
		unset($_SESSION['user']);			//unset all user session data
		session_destroy();
	}
}
?>