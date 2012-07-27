<?php
include 'Query.php';

Class Lib
{
	private $connection;
	private $query;
	
	function __construct()
	{
		$this->connection = new mysqli("localhost","root","","project");
		if($this->connection->connect_errno)
			die("Connection errorr: ".$this->connection->connect_errno);
		
		$this->connection->autocommit(false);
		
		$query = new Query($this->connection);
	}
	
	function __destruct()
	{
		$this->connection->close();
	}
	
	function login($userid,$password)
	{
		$user = mysqli_escape_string($userid);
		$pass = mysqli_escape_string($password);
		$pass = md5($pass);
		
		$statement = "SELECT nama, posisi FROM user WHERE userID = '".$user."' AND password = '".$pass."'";
		$action = $this->query->do_query($statement);
		if ($action->result())
		{
			$data = $action->fetchedResult();
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>