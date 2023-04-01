<?php
	class vegetables{
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
		public $weight;

		function __construct($name,$color,$weight){
			$this->name = $name;
			$this->color = $color;
			$this->weight = $weight;
		}

		public function frist(){
			echo "This vegetables is {$this->name} and color is {$this->color} and weight is {$this->weight}.";
		}
	}
 ?>