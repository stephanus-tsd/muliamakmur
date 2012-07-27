<?php
Class Query
{
	private $connection;
	private $result;
	private $fetchedResult = array();
	
	function __construct($conn)
	{
		$this->connection = $conn;
	}
	
	public function do_query($statement)
	{
		$this->result = $this->connection->query($statement);
		if ($this->result)
		{
			//$asd = $this->result->fetch_array(MYSQLI_ASSOC);
			return $this->result;
		}
		else
		{
			$this->connection->rollback();
			throw new Exception("Error processing query");
		}
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