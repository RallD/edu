<?php

class myIteratorRight implements Iterator{
    private $myArray = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );
	
	public function rewind() {
		return reset($this->myArray);
	}
	
	public function current() {
		return current($this->myArray);
	}
	
	public function key() {
		return key($this->myArray);
	}
	
	public function next() {
		return next($this->myArray);
	}
	
	public function valid() {
		return key($this->myArray) !== null;
	}
}