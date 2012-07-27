<?php
Class Query
{
	private $connection;
	private $autocommit = false;
	
	private $result;
	private $fetchedResult = array();
	
	//constructor
	function __construct($queryConnection)
	{
		$this->connection = $queryConnection;
	}
	
	//destructor
	function __destruct()
	{
		unset($this->connection);
		unset($this->autocommit);
		@$this->result->free();
		unset($this->fetchedResult);		
	}
	
	//autocommit on
	public function autocommitOn()
	{
		$this->autocommit = true;
	}
	
	//autocommit off
	public function autocommitOff()
	{
		$this->autocommit = false;
	}
	
	//query
	public function do_query($query_statement)
	{
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
			$this->connection->rollback();						//rollback if query error
			throw new Exception('Error processing query. '); 	//throw exception
			
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
				throw exception("Cannot process multi query");
			}
		}
		if($this->autocommit == true)			//autocommit if autocommit true
			$this->connection->commit();
	}
	
	//insert
	public function do_insert($table, $insertFields, $values)
	{
		//check if array
		if(!is_array($insertFields) || !is_array($values)
			throw exception("Insertfields or values is not array");
			
		$fieldsLength = count($insertFields);
		$valuesLength = count($values);
		
		//check if the length is same
		if($fieldsLength != $valuesLength)
			throw exception("Fields and values length not same");
		
		$insertStatement = "INSERT INTO ".$table."(";
			
		for($counter = 0; $counter < $fieldsLength; $counter++)
		{
			if($counter != $fieldsLength-1)
				$insertStatement = $insertStatement.$insertFields[$counter].",";
			else
				$insertStatement = $insertStatement.$insertFields[$counter].") VALUES(";
		}
		
		for($counter = 0; $counter < $valuesLength; $counter++)
		{
			if($counter === $fieldsLength-1)
				$insertStatement = $insertStatement.$values[$counter].")";
			else
				$insertStatement = $insertStatement.$values[$counter].",";
		}
		
		$this->do_query($insertStatement);
		if($this->result)
			return true;
		else
			return false;
	}
	
	//insert all
	public function do_insertAll($table, $values)
	{
		//check if array
		if(!is_array($values)
			throw exception("Values is not array");
			
		$insertStatement = "INSERT INTO ".$table." VALUES(";
		
		for($counter = 0; $counter < $valuesLength; $counter++)
		{
			if($counter != $valuesLength-1)
				$insertStatement = $insertStatement.$values[$counter].",";
			else
				$insertStatement = $insertStatement.$values[$counter].")";
		}
		
		$this->do_query($insertStatement);
		if($this->result)
			return true;
		else
			return false;
	}
	
	//update
	public function do_update($table, $updates, $condition)
	{
		if(!is_array($updates)
			throw exception("Updates is not array");
			
		$updatesLength = count($updates);
		
		$updateStatement = "UPDATE ".$table." SET ";
			
		for($counter = 0; $counter < $updatesLength; $counter++)
		{
			if($counter != $updatesLength-1)
				$updateStatement = $updateStatement.$updates[$counter].",";
			else
				$updateStatement = $updateStatement.$updates[$counter]." ";
		}
		
		$updateStatement = $updateStatement.$condition;
		
		$this->do_query($updateStatement);
		if($this->result)
			return true;
		else
			return false;
	}
	
	//update all
	public function do_updateAll($table, $updates)
	{
		if(!is_array($updates)
			throw exception("Updates is not array");
			
		$updatesLength = count($updates);
		
		$updateStatement = "UPDATE ".$table." SET ";
			
		for($counter = 0; $counter < $updatesLength; $counter++)
		{
			if($counter != $updatesLength-1)
				$updateStatement = $updateStatement.$updates[$counter].",";
			else
				$updateStatement = $updateStatement.$updates[$counter];
		}
		
		$this->do_query($updateStatement);
		if($this->result)
			return true;
		else
			return false;
	}
	
	//get result
	public function result()
	{
		if(isset($this->result))
			return $this->result;
		else
			throw new Exception("No result to return");
			
	}
	
	//get fetched result
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