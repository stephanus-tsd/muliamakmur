<?php
Class displayImage 
{
	
	private $pict;
	
	function __construct($img)
	{
		$this->pict = $img;
		
	}
	
	public function dispImg() 
	{
		header("Content-type: image/jpeg");
		echo $this->pict;
	}
}
?>