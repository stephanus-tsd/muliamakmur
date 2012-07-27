<?php
//lalalala
Class Query
{
	private $connection;
	private $autocommit = false;
	
	private $result;
	private $fetchedResult = array();
		
	function __construct($query_connection)
	{
		//echo '------------------- query.php -----------------------------'.'</br>';
		$this->connection = $query_connection;
	}
	
	function __destruct()
	{
		@$this->result->free();
		unset($this->fetchedResult);		
	}
	
	//autocommit on
	public function autocommit_on()
	{
		$this->autocommit = true;
	}
	
	//autocommit off
	public function autocommit_off()
	{
		$this->autocommit = false;
	}
	
	//query
	public function do_query($query_statement)
	{
		//echo $query_statement;
		//$query_statement = mysqli_real_escape_string($query_statement);		//escaping query string
		$this->result = $this->connection->query($query_statement);
		if($this->result)
		{
			if($this->autocommit == true)		//autocommit if autocommit true
				$this->connection->commit();
			else
				return;
				
			$asd = $this->result->fetch_array(MYSQLI_ASSOC);
		}
		else
		{
			$this->connection->rollback();		//rollback if query error
			throw new Exception("Error processing query"); 		//throw exception
			
		}
	}
	
	//multi query
	public function do_multiQuery($querys_statement)
	{
		foreach($querys_statement as $query_statement)
		{
			if(!$this->connection->query($query_statement))
			{
				$this->connection->rollback(); 	//rollback if query error
				$this->result = "error";		//set result 'error'
				return;
			}
		}
		if($this->autocommit == true)			//autocommit if autocommit true
			$this->connection->commit();
	}
	
	public function result()
	{
		if(isset($this->result))
			return $this->result;
		else
			throw new Exception("No result to return");
			
	}

	public function fetchedResult()
	{
		if($this->result)
		{
			
			foreach($this->result->fetch_array(MYSQLI_ASSOC) as $key => $value)
			{
				$this->fetchedResult[$key] = stripslashes($value);
			}
			return $this->fetchedResult;
		}
		else
		{
			throw exception("Error fetching array result");
		}
	}
}
?>