<?php
include '../library/DB.php';
include '../library/page_fetcher.php';
include '../library/session.php';
include '../library/displayImage.php';

Class User
{	
	//database
	private $db;
	protected $db_config = array();
	
	//session
	private $session;
	private $userSession;
	
	//page fetcher
	private $page_fetcher;
	private $page_data;
	
	//user secret attribute
	private $userAtt;
	
	public $logged = false;
	
	function __construct()
	{
		/*
		echo '------------------- user.php -----------------------------'.'</br>';
		if(file_exists('../library/DB.php'))
			echo "ada kok file DB".'</br>';
		else
			echo "gak ada filenya".'</br>';
		
		if(file_exists('../library/session.php'))
			echo "ada kok file session".'</br>';
		else
			echo "gak ada filenya".'</br>';	
			
		echo "user dibuat".'</br>';
		echo $this->db_config['host'].'</br>';
		*/
		$this->session = new Session();
		
		$this->db = new DB($this->db_config);
		
		if($this->logged_in())
		{
			$this->logged = true;
			$this->userSession = $this->session->get_userSession();
			//echo "User : ".$this->userSession['namaSales'].'</br>';
			
			if(!$this->userSession)
				return false;
			
			$query_statement = "SELECT kodeSales, userLevel FROM sales WHERE namaSales = '".$this->userSession['namaSales']."'";
			//echo "Query statement user : ".$query_statement.'</br>';
			$query = $this->db->query($query_statement);
			if($query->result())
				$this->userAtt = $query->fetchedResult();			
			else
				return false;
		}
		else
		{
			echo "masuk ke userAtt guest".'</br>';
			$userAtt['kodeSales'] = "guest";
			$userAtt['userLevel'] = 0;
		}
		
		$this->page_fetcher = new pageFetcher($this->db, $this->userAtt, $this->userSession);
	}
	
	function ___destruct()
	{
		//echo '-------------------------------------------------------';
	}
	
	private function set_userAttribute()
	{
		
	}
	
	//AND password = md5('$password')
	public function login($username,$password)
	{
		//echo "masuk login".'</br>';
		$password = md5($password);
		$query_statement = "SELECT namaSales, email FROM sales WHERE username = '$username' AND password = '$password'";
		//echo $query_statement.'</br>';
		$query = $this->db->query($query_statement); 
		if($query->result()) 
		{
			$data = $query->fetchedResult();
			//echo $data['namaSales'].'</br>';
			//echo $data['email'].'</br>';
			$this->session->set_userSession($data);
			return true;
		}
		else {
			return false;
		}
		
	}
	
	public function logout()
	{
	}
	
	public function logged_in()
	{
		if($this->session->isset_userSession())
			return true;
		else
			return false;
	}
	
	public function get_currentLevel() 
	{
		return $this->userAtt['userLevel'];
	}
	
	public function add_customerData($customer, $keluarga, $date)
	{	
		//$data_foto = addslashes(file_get_contents($foto['tmp_name']));
		foreach($customer as $data)
		{
			foreach($data as  $key => $value)
			{
				if(isset($value))
					$data[$key] = addslashes($value);
				else
					$data[$key] = "";
			}
		}
		
		foreach($keluarga as $key => $value)
		{
			if(isset($value))
					$data[$key] = addslashes($value);
				else
					$data[$key] = "";		
		}
		
		$query_statement = "INSERT INTO customer(kodeSales, namaCustomer, alamat, noTelp, noHP1, noHp2, email, tglLahir, agama, anggkotaKeluarga1, anggkotaKeluarga2, anggkotaKeluarga3,
											   anggotaKeluarga4, anggotaKeluarga5, tglLahirKeluarga1, tglLahirKeluarga2, tglLahirKeluarga3, tglLahirKeluarga4, tglLahirKeluarga5,
											   tipeMobil, warnaMobil, tglDO, tglSTNK, tglAsuransi, jmlTahunAsuransi, caraPembayaran, jmlTahunKredit) 
											   VALUES("."1".",".$customer['dataDiri']['nama'].",".$customer['dataDiri']['alamat'].",".$customer['dataDiri']['nomorTelepon'].",".
											   $customer['dataDiri']['nomorHP1'].",".$customer['dataDiri']['nomorHP2'].",".$customer['dataDiri']['email'].",".$date['customer'].",".$customer['dataDiri']['agama'].",". 
											   $keluarga['nama1'].",".$keluarga['nama2'].",".$keluarga['nama3'].",".$keluarga['nama4'].",".$keluarga['nama5'].",".$date['keluarga1'].",".$date['keluarga2'].",".
											   $date['keluarga3'].",".$date['keluarga4'].",".$date['keluarga5'].",".$customer['dataMobil']['tipeMobil'].",".$customer['dataMobil']['warnaMobil'].",".
											   $date['tglDO'].",".$date['tglSTNK'].",".$customer['dataAsuransi']['tglAsuransi'].",".$customer['dataAsuransi']['nama'].",".
											   $customer['dataAsuransi']['jmlTahunAsuransi'].",".$customer['dataBayar']['caraBayar'].",".$customer['dataBayar']['jumlahTahunKredit'].")";
		
		$query = $this->db->query($query_statement);
		if($query->result())
		{
			return true;
		}
		else
		{
			//echo $foto['name'];
			echo $query_statement.'</br>';
			return false;
		}
	}
	 
	public function remove_customerData($costumerID)
	{
		//$this->db->query;
	}
	
	public function update_customerData($costumerData)
	{
	}
	
    /*
	* DOCCUMENTATION
	* 'home'
	*/
	public function fetch_page($page)
	{
		$this->pagedata = array();
		$this->pagedata = $this->page_fetcher->fetch($page);
		if(empty($this->pagedata['error']))
			return $this->pagedata;
	}
	
	public function get_POData()
	{
		// SELECT noPO, tglPO, supplier, alamat, up, typeSupplier, dateline FROM PO
		// SELECT namaBarang, type, b.noProject, namaProject, customer, quantityPO, unitPricePO FROM PO a, Barang b, Project c WHERE b.noPO = a.noPO AND c.noProject = b.noProject
	}
}
?>