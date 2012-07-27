<?php
Class pageFetcher
{
	//library
	private $db;
	private $session;
	
	//secret user attribute
	private $userAtt;
	
	//array data
	private $page_data = array(array());
	private $data = array();
	
	function __construct($user_db, $user_atribute, $user_session)
	{
		//echo '------------------- page_fetcher.php -----------------------------'.'</br>';
		$this->db = $user_db;
		$this->userAtt = $user_atribute;
		$this->session = $user_session;	
		
		//echo "Nama Sales Fetcher: ".$this->session['namaSales']." loh".'</br>';
	}
	
	function __destruct()
	{
		unset($this->data);
		unset($this->page_data);
	}
	
	public function fetch($page)
	{
		switch($page)
		{
			case 'home':
				//user profile
				//echo "Nama Sales Fetcher: ".$this->session['namaSales']." loh".'</br>';
				$query_statement = "SELECT kodeSales, alamat,noTelp, foto FROM sales WHERE namaSales = '".$this->session['namaSales']."'";
				//echo $query_statement;
				//echo $this->session['namaSales'];
				$query = $this->db->query($query_statement);
				if($query->result())
				{
					$this->data = $query->fetchedResult();
					$page_data['profile']['namaSales'] = $this->session['namaSales'];
					$page_data['profile']['email'] = $this->session['email'];
					$page_data['profile']['kodeSales'] = $this->data['kodeSales'];
					$page_data['profile']['alamat'] = $this->data['alamat'];
					$page_data['profile']['noTelp'] = $this->data['noTelp'];
					$page_data['profile']['foto'] = $this->data['foto'];
				}
				
				
				
				switch($this->userAtt['userLevel'])						//switch if user have special attributes to be loaded
				{
					case 0:
						break;
					
					case 1:
						break;
				}
				return $page_data;									//returning all page data requested
		}
	}
}
?>