<?php
Class Guest extends User
{
	function __construct()
	{
		echo 'masuk ke guest'.'</br>';
		$this->db_config['host'] = 'localhost';
		$this->db_config['username'] = 'root';
		$this->db_config['password'] = '';
		$this->db_config['database'] = 'project';
		parent::__construct();
	}
}
?>