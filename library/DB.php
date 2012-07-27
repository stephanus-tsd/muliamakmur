<?php
include '../library/query.php';
Class DB
{																				//query object
	private $connection;																			//database connection
	
	//query settings
	private $autocommit = false;
	
	function __construct($config)
	{
		//echo '------------------- db.php -----------------------------'.'</br>';
		//echo "db dibuat".'</br>';
		$this->connection = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);	//load connection from config
		if($this->connection->connect_errno)
			die("Connection errorr: ".$this->connection->connect_errno);							//exception
		
		$this->connection->autocommit(false);														//set autocommit false
	}
	
	function __destruct()
	{
		$this->connection->close();
	}
	
	//doing query
	public function query($query_statement)
	{
		$query = new Query($this->connection);
		$query->do_query($query_statement);
		return $query;										
	}
	
	//doing multi query
	public function multi_query($querys_statement)
	{
		$query = new Query($this->connection);
		$this->query->do_multiQuery($querys_statement);
		return $query;
	}
	
	//commit
	public function commit()
	{
		$this->connection->commit();
	}
	
	//rollback
	public function rollback()
	{
		$this->connection->rollback();
	}
}
?>