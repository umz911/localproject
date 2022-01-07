<?php

	class Employee{
		
		public $name;
		public $age;
		public $salary;


		function __construct($name,$age,$salary){
			
			$this->name   = $name;
			$this->age    = $age;
			$this->salary = $salary;
		}
		
		function info(){
			
			echo "<h2>Employee Profile </h2>";
			echo "Employee Name:   "  .$this->name   ."<br>";
			echo "Employee Age:    "  .$this->age    ."<br>";
			echo "Employee Salary: "  .$this->salary ."<br>";
		}
	}
	class Designer extends Employee{

		public $experience;
		public $tools;

		function  __construct($name,$age,$salary,$experience,$tools){
			
			$this->name   		= $name;
			$this->age    		= $age;
			$this->salary 		= $salary;
			$this->experience 	= $experience;
			$this->tools 		= $tools;

		}

		function set_exp($experience,$tools){
			
			$this->experience = $experience;
			$this->tools 	  = $tools;
		}

		function show_exp(){
			
			echo "Experience: " . $this->experience ."<br>";
			echo "Tools:	  " . $this->tools 		."<br>";
		}

		function info(){

			echo "<h2>Designer Profile</h2>";
			echo "Designer Name:   "  .$this->name   ."<br>";
			echo "Designer Age:    "  .$this->age    ."<br>";
			echo "Designer Salary: "  .$this->salary ."<br>";
		}
	}
	class Developer extends Employee{

		public $type;
		public $lang;

		function  __construct($name,$age,$salary,$type,$lang){
			
			$this->name   		= $name;
			$this->age    		= $age;
			$this->salary 		= $salary;
			$this->type 		= $type;
			$this->lang 		= $lang;

		}

		function set_lang($type,$lang){
			
			$this->type 	  = $type;
			$this->lang 	  = $lang;
		}

		function show_lang(){
			
			echo "Developer Type: " . $this->type ."<br>";
			echo "Lang: 		  " . $this->lang ."<br>";
		}
		function info(){
			
			echo "<h2>Developer Profile </h2>";
			echo "Developer Name:   "  .$this->name   ."<br>";
			echo "Developer Age:    "  .$this->age    ."<br>";
			echo "Developer Salary: "  .$this->salary ."<br>";
		}

	}
		$obj1 = new Employee("Irshad",28,20000);
		$obj2 = new Designer("Ahmed",22,30000,"2years","Adobe");
		$obj3 = new Developer("Hurrera",21,100000,"Backend","PHP");

		$obj1-> info();
		$obj2-> info();
		$obj2-> show_exp();
		$obj3-> info();
		$obj3-> show_lang();
 ?>