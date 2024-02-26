<?php
/*Successfull real world Singleton just an example!
  Second of all one Matrix!!!
  Just for happy coding! */
  
	class Singleton {
		private object $obj1;
		private object $obj2;
		private object $obj3;
		private function createSingleton() {
			return $this;
		}
		private function propagandateSingleton() {
			$this->obj1=$this->createSingleton();
			$this->obj2=$this->createSingleton();
			$this->obj3=$this->createSingleton();
		}
		public function returnSingleton() {
			$this->propagandateSingleton();
			return ["first_instance"=>$this->obj1, "second_instance"=>$this->obj2, "third_instance"=>$this->obj3];
		}
		public function returnOnlyOnce() {
			$this->propagandateSingleton();
			return ["first_instance"=>$this->obj1];
		}
		public function returnOldSchoollMatrix() {
			return [[1,1,1,1,1,1,1,0,0,0,1,1,],
					[0,0,0,0,0,0,0,0,0,0,0,0,],
					[1,0,1,1,1,1,1,1,1,1,1,1,],
					[0,0,1,1,1,1,1,0,1,1,1,1]];
		}
	}





$object=new Singleton();
var_dump($object->returnSingleton());
var_dump($object->returnOnlyOnce());

var_dump($object->returnOldSchoollMatrix());






















?>