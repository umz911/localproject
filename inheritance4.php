<?php

	class Animal{

		public $name;
		public $legs;

		function __construct($name,$legs){

			$this->name 	= $name;
			$this->legs 	= $legs;

		}
		function info(){

			echo "<h2> Animal Informations </h2>";
			echo "Name:	   "	.$this->name ."<br>";
			echo "Legs:	   " 	.$this->legs ."<br>";
		}

	}
	class Breed extends Animal{

		public $breed;
		public $color;

		function __construct($name,$legs,$breed,$color){

			$this->name 	= $name;
			$this->legs 	= $legs;
			$this->breed 	= $breed;
			$this->color 	= $color;

		}
		function info(){

			echo "<h2> Animal Name Breed </h2>";
			echo "Name:	   "	.$this->name  ."<br>";
			echo "Legs:	   " 	.$this->legs  ."<br>";
		}		
		function set_breed($breed,$color){

			$this->breed = $breed;
			$this->color = $color;

		}
		function get_breed(){

			echo "Breed:   "	.$this->breed ."<br>";
			echo "Color:   " 	.$this->color ."<br>";
		}

	}
	$obj1 = new Animal("Boxer",4);
	$obj1->info();
	$obj2 = new Breed("Boxer",4,"Dog","Black");
	$obj2->info();
	$obj2->get_breed();

 ?>