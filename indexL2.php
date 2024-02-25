<?php
/*
One of the great things, that could be implemented about singleton and Factory!
This example explains on point of view that create singleton most powerful Design pattern of all.
We could get more interesting that ever.
*/
class greetingsOne {
	public bool $number;
	public object $obj;
	public function __construct() {
		if(isset($this->number)) {
			$this->number=1;
			return $this->obj=new greetingsOne();
		}
	}
	private function factoryOne() {
		if(isset($this->number)) {
			return $this->number;
		}
		return 0;
	}
	private function factoryTwo() {
		if(!isset($this->number)) {
			return 0;
		}
		return $this->number;
	}
	public function factoryBridge() {
		echo "<br/>factoryBridge!<br/>";
		if(isset($this->number)) {
			return $this->number=$this->factoryOne();
		}
		return $this->number=$this->factoryTwo();
	}
}

class greetingsTwo {
	private bool $number;
	public object $obj;
	public function __construct() {
		if(!isset($this->number)) {
			$this->number=1;
			return $this->obj=new greetingsOne();
		}
	}
}

class greetingsThree {
	private bool $number;
	public object $obj;
	public function __construct() {
		if(!isset($this->number)) {
			$this->number=1;
			return $this->obj=new greetingsTwo();
		}
	}
}
class greetingsFour {
	private bool $number;
	public object $obj;
	public function __construct() {
		if(!isset($this->number)) {
			$this->number=1;
			return $this->obj=new greetingsThree();
		}
	}
}

class greetingsFive {
	public bool $number;
	public object $obj;
	public function __construct() {
		if(!isset($this->number)) {
			$this->number=1;
			return $this->obj=new greetingsFour();
		}
	}
	public function __destruct() {
		echo "<br/>\"Final Quotes!\"<br/>";
	}
}


/*Impossible and Impresive about extending of a classes and what could I did to manage all kinds of.
Best of Conlcusions about Singletons and Factories maybe the best one of all time!*/


$object=new greetingsFive();
$object->obj->obj->obj->obj->factoryBridge();
echo $object->number;
unset($object);

?>