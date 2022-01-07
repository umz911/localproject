<?php

	class Laptop{

		public $processor;
		public $ram;
		public $harddrive;

		function __construct($processor,$ram,$harddrive){

			$this->processor 	= $processor;
			$this->ram 			= $ram;
			$this->harddrive	= $harddrive;

		}
		function info(){

			echo "<h2> Laptop Informations </h2>";
			echo "Processor:	   "	.$this->processor ."<br>";
			echo "Ram:	  		   " 	.$this->ram 	  ."<br>";
			echo "Harddrive:	   " 	.$this->harddrive ."<br>";
		}

	}
	class Brand extends Laptop{

		public $brand;
		public $color;

		function __construct($processor,$ram,$harddrive,$brand,$color){

			$this->processor 	= $processor;
			$this->ram 			= $ram;
			$this->harddrive	= $harddrive;
			$this->brand 		= $brand;
			$this->color 		= $color;

		}
		function info(){

			echo "<h2> Laptop  Brand </h2>";
			echo "Processor:	   "	.$this->processor  ."<br>";
			echo "Ram:	   		   " 	.$this->ram  	   ."<br>";
			echo "Harddrive:       "	.$this->harddrive  ."<br>";
		}		
		function set_brand($brand,$color){

			$this->brand = $brand;
			$this->color = $color;

		}
		function get_brand(){

			echo "Brand:   "	.$this->brand ."<br>";
			echo "Color:   " 	.$this->color ."<br>";
		}

	}
	$obj1 = new Laptop("3.0GHz","8Gigabytes","500Gigabytes");
	$obj1->info();
	$obj2 = new Brand("3.2GHz","16Gigabytes", "750Gigabytes", "HP","Black");
	$obj2->info();
	$obj2->get_brand();

 ?>