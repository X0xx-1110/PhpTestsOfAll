<?php

/*
Impressive is one briliant development of two 
Singletons that could explain complexability of design patterns.
*/
class impresive {
	private bool $antiLoop1;
	private bool $antiLoop2;
	private object $obj;
	public function __construct() {
		echo __CLASS__ ."____".__METHOD__."<br/>";
		return $this;
	}
	public function getSecondInstance() {
		if(!isset($this->antiLoop1)) {
			$this->antiLoop1=false;
			return $this->getInstance();
		}
	}
	public function getThirdInstance() {
		if(!isset($this->antiLoop2)) {
			$this->antiLoop2=false;
			return $this->obj=$this->getInstance();
		}
	}
	private function getInstance() {
		return $this->generateSingleton();
	}
	private function generateSingleton() {
		if(($this->antiLoop1===false)) {
			$this->antiLoop1=true;
			return $this->__construct();
		}
		if($this->antiLoop2===false) {
			$this->antiLoop2=true;
			return $this->__construct();
		}
	}
}

$object=new impresive();
var_dump($object->getSecondInstance());
var_dump($object->getThirdInstance());



































?>