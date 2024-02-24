<?php

class firstOfAll {
	private object $first;
	public function __construct($value) {
		if(isset($value) && ($value<3)) {
			if($this->__construct($value)!=null) {
				$this->first=$this->__construct(++$value);
				return $this->first;
			}
		}
	}
	public function firstMethod() {
		echo "ccccccccccccccc<br/>";
	}
}
class secondOfAll extends firstOfAll{
	private object $second;
	private object $obj;
	public function __construct($value) {
		$this->obj=new firstOfAll(true);
		if(isset($value) && ($value<3)) {
			if($this->__construct(++$value)!=null) {
					$this->second=$this->obj->__construct($value);
					return $this->second;
				}
		}
	}
	public function secondMethod() {
		echo "aaaaaaaaaaaaaaaaaaaaa<br/>";
	}
}
class thirdOfAll extends firstOfAll{
	private object $third;
	private object $obj;
	public function __construct($value) {
		$this->obj=new firstOfAll(true);
		if(isset($value) && ($value<3)) {
			if($this->__construct(++$value)!=null) {
					$this->third=$this->obj->__construct($value);
					return $this->third;
			}
		}
	}
	public function thirdMethod() {
		echo "bbbbbbbbbbbbbbbbbbbb<br/>";
	}
}


/*EXEC*/

$objectOne=new secondOfAll(1);
$objectTwo=new thirdOfAll(1);

$objectOne->secondMethod();
$objectTwo->thirdMethod();
$objectOne->firstMethod();
$objectTwo->firstMethod();






















































?>