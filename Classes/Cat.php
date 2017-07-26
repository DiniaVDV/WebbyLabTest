<?php

class Cat extends Animal{
	
	public function meow(){
		$catname = $this->getName();
		return "Cat {$catname } is saying meow";
	}
}