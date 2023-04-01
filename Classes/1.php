<?php 
	class fruit{
		protected $name;


		public function get_data($name){
			$this->name = $name;
		}

		public function set_data(){
			return $this->name;
		}
	}
 ?>