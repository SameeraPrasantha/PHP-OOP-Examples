<?php 
	abstract class car{
		public $name;
		public function __construct($name){
			$this->name = $name;
		}

		abstract public function set_data() : string;
	}

	class Volvo extends car{
		public function set_data() : string{
			return "$this->name is more powerfull";
		}
	}

	class BMW extends car{
		public function set_data() : string{
			return "$this->name is more beautiful";
		}
	}

	class Honda extends car{
		public function set_data() : string{
			return "$this->name is more flexible";
		}
	}
 ?>