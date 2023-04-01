<?php

//constructor
	 class car{

	 	public $model;
	 	public $color;

	 	function __construct($model,$color){
	 		$this->model = $model;
	 		$this->color = $color;
	 	}

	 	function get_model(){
	 		return $this->model;
	 	}

	 	function get_color(){
	 		return $this->color;
	 	}
	 } 
 ?>