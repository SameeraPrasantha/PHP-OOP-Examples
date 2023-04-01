<?php 
//resourse from w3school
	class car{
		const message = "Bye I'm leaving";

		public function bye(){
			echo self::message;
		}
	}

	$get_data = new car();
	$get_data->bye();
 ?>