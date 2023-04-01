<?php
	class car{
		public $model;

		function set_name1($model){ //default use public
			$this->model = $model;
		}

		function get_info(){
			return $this->model;
		}

		protected function set_name2($model){ //protect method
			$this->model = $model;
		}

		private function set_name3($model){ //private method
			$this->model = $model;	
		}
	} 
 ?>