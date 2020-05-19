<?php
include("rank.php");

//--INHERITANCE--
class GlobalRank extends Rank{
	//--PRIVATE--
	private $name;
	private $location;
	private $field;

	//--CONSTRUCTOR
	public function __construct($name, $location, $field){
		$this->name = $name;
		$this->location = $location;
		$this->field = $field;
	}

	//--SETTERS
	public function setName($name){ $this->name = $name; }
	public function setLocation($location){ $this->location = $location; }
	public function setField($field){ $this->field = $field; }

	//--GETTERS
	public function getName(){ return $this->name; }
	public function getLocation(){ return $this->location; }
	public function getField(){ return $this->field; }

	//--OVERRIDING
	public function calculateRanking($academicReputation, $employerReputation, $FCRatio){
		return ($academicReputation + $employerReputation + $FCRatio) / 3;
	}
}

?>