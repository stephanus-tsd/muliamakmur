<?php
Class Sales extends User
{
	function __construct()
	{
		//echo 'masuk ke sales';
		$this->db_config['host'] = 'localhost';
		$this->db_config['username'] = 'admin';
		$this->db_config['password'] = 'admin';
		$this->db_config['database'] = 'muliamakmur';
		parent::__construct();
	}
}
?>