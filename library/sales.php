<?php
Class Sales extends User
{
	function __construct()
	{
		//echo 'masuk ke sales';
		$this->db_config['host'] = 'localhost';
		$this->db_config['username'] = 'root';
		$this->db_config['password'] = '';
		$this->db_config['database'] = 'project';
		parent::__construct();
	}
}
?>