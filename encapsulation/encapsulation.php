<?php

class Person {
	// Private attribute
	private $name;

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}
}

// Create an instance of the Person Class
$person = new Person();

// Set the person's name
$person->setName('Sarah');

// Get the person's name
echo 'Her name is ' . $person->getName();

?>