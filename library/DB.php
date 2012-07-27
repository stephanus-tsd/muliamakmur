<?php
include '../library/query.php';
Class DB
{																				
	private $connection;																			
	
	//query settings
	private $autocommit = false;
	
	function __construct($config)
	{
		$this->connection = mysqli_init();
		$this->connection->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0');
		$this->connection->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
		$this->connection->real_connect($config['host'], $config['username'], $config['password'], $config['database']);
		if($this->connection->connect_errno)
			die("Connection errorr: ".$this->connection->connect_errno);							
		
		$this->connection->autocommit(false);														
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