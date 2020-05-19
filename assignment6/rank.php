<?php
//--ABSTRACT CLASS--
abstract class Rank{
	private $name;
	private $location;

	//--ABSTRACT METHODS--
	//--PROTECTED
	abstract protected function calculateRanking($academicReputation, $employerReputation, $FCRatio);
}