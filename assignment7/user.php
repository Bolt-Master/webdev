<?php
final class User{
	private $id;
	private $fname;
	private $lname;
	private $password;
	private $tariff;

	//--CONSTRUCTOR--
	public function __construct($fname, $lname, $tariff){
		$this->fname = $fname;
		$this->lname = $lname;
		$this->tariff = $tariff;
	}

	//--GETTER--
	public function setFame($fname){ $this->fname = $fname; }
	public function setLName($lname){ $this->lname = $lname; }
	public function setName($traffic){ $this->traffic = $traffic; }

	//--SETTER--
	public function getFName(){ return $this->fname; }
	public function getLName(){ return $this->lname; }
	public function getTariff(){ return $this->tariff; }
}
?>
