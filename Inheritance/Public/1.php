<?php
	class vegetables{
		// you can use public,private and protect access modifiers for main variables
		public $name;
		public $color;

		function __construct($name,$color){
			$this->name = $name;
			$this->color = $color;			
		}

		public function frist(){
			echo "This vegetables is {$this->name} and color is {$this->color}.";
		}
	} 

	class tomato extends vegetables{
		public function secound(){
			echo "I'm vegetable or Tomato";
		}
	}
 ?>