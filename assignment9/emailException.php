<?php
class emailCheckException extends Exception{
	public function errorMessage(){
		$msg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address ';
		return $msg;
	}
}
?>