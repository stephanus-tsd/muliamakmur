<?php
include '../library/user.php';
include '../library/guest.php';
include '../library/sales.php';

Class userSelector
{
	private $user;
	private $currentLevel;
	
	function __construct()
	{
		//echo 'select_user'.'</br>';
		$this->user = new Guest();										//set user as guest
	}
	
	public function select_user()
	{
		if($this->user->logged)										//check if user already logged-in
		{
			$this->currentLevel = $this->user->get_currentLevel();		//get user current level
			//echo "current Level : ".$this->currentLevel.'</br>';
			switch($this->currentLevel)
			{
				case 0:
					return $this->user;									//return guest
					
				case 1:
					//echo "mau new sales nih".'</br>';
					unset($this->user);
					$this->user = new Sales();							
					return $this->user;	
				case 2:
					unset($this->user);
					$this->user = new Karyawan();
					return $this->user;								//return sales
			}
		}
		else
		{
			echo 'return guest'.'</br>';
			return $this->user;											//return guest
		}
	}
}
?>