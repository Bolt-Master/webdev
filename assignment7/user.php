<?php
final class User{
	private $id;
	private $fname;
	private $lname;
	private $password;
	private $tariff;

	public function __construct($fname, $lname, $tariff){
		$this->fname = $fname;
		$this->lname = $lname;
		$this->tariff = $tariff;
	}

	public function setFame($fname){ $this->fname = $fname; }
	public function setLName($lname){ $this->lname = $lname; }
	public function setName($traffic){ $this->traffic = $traffic; }

	public function getFName(){ return $this->fname; }
	public function getLName(){ return $this->lname; }
	public function getTariff(){ return $this->tariff; }
}
?>
