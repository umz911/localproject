<?php
	
    class Office{
    	
    	public $tables;
    	public $lights;
    	public $fans;

    	function __construct($tables,$lights,$fans){

    		$this->tables = $tables;
    		$this->lights = $lights;
    		$this->fans   = $fans;
    	}
    	
    	function info(){

    		echo "<h2>Office Information </h2>";
    		echo "Tables: " .$this->tables  ."<br>";
    		echo "Lights: " .$this->lights  ."<br>";
    		echo "Fans:   " .$this->fans    ."<br>";

    	}

    }
    class Rooms extends Office{

    	public $laptop;
    	public $door;
    	public $key;

    	function __construct($tables,$lights,$fans,$laptop,$door,$key){

    		$this->tables = $tables;
    		$this->lights = $lights;
    		$this->fans   = $fans;
    		$this->laptop = $laptop;
    		$this->door   = $door;
    		$this->key    = $key;
    	}
    	function info(){

    		echo "<h2>Room Setup</h2>";
    		echo "Tables: " .$this->tables  ."<br>";
    		echo "Lights: " .$this->lights  ."<br>";
    		echo "Fans:   " .$this->fans    ."<br>";

    	}    	
    	function set_room($laptop,$door,$key){

    		$this->laptop = $laptop;
    		$this->door   = $door;
    		$this->key    = $key;

    	}
    	function get_room(){

    		echo "Laptop :" .$this->laptop . "<br>";
    		echo "Door   :" .$this->door   . "<br>";
    		echo "Key    :" .$this->key    . "<br>";

    	}

    }

    $obj1 = new Office(25,18,10);
    $obj1->info();
    $obj2 = new Rooms(1,2,1,1,1,2);
    $obj2->info();
    $obj2->get_room();

 ?>