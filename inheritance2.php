<?php

   	class Car{

   		public $wheels;
   		public $seats;
   		public $engine;
   		public $steering;

   		function __construct($wheels,$seats,$engine,$steering){

			$this->wheels 	= $wheels;
			$this->seats  	= $seats;
			$this->engine 	= $engine;
			$this->steering = $steering;
   		}

   		function info(){

   			echo "<h2> About Cars </h2>";
   			echo "Wheels:   " .$this->wheels   ."<br>";
   			echo "Seats :   " .$this->seats    ."<br>";
   			echo "Engine:   " .$this->engine   ."<br>";
   			echo "Steering: " .$this->steering ."<br>";
   		}
	
 	}
  	class Brands extends Car{

 		public $model;
 		public $price;

 		function __construct($wheels,$seats,$engine,$steering,$model,$price){

			$this->wheels 	= $wheels;
			$this->seats  	= $seats;
			$this->engine 	= $engine;
			$this->steering = $steering;
			$this->model    = $model;
			$this->price    = $price;
 		}

   		function info(){

   			echo "<h2>Brands & Price</h2>";
   			echo "Wheels:   " .$this->wheels   ."<br>";
   			echo "Seats :   " .$this->seats    ."<br>";
   			echo "Engine:   " .$this->engine   ."<br>";
   			echo "Steering: " .$this->steering ."<br>";
   		} 		
 		function set_model($model,$price){

			$this->model = $model;
			$this->price = $price; 		
 		}
 		function get_model(){

 			echo"Model:  " .$this->model ."<br>";
 			echo "Price: " .$this->price ."<br>";
 		}
 	}

   $obj1 = new Car(4,4,"1300cc","square");
   $obj1->info();
   $obj2 = new Brands(4,2,"2300cc","Round","Audi","$1200000");
   $obj2->info();
   $obj2->get_model();
   


?>