<?php
Class Ajax extends WebApp{

	public $controller;
	
	public function __construct($controller){
		$this->controller = $this->$controller();
	}

	public function name(){
		echo "Ajax name";
	}
	
	public function lastname(){
		$value = array(
			0=>array(
				'fname'=>'rayjohn',
				'lname'=>'tanute',
				'job'=>'php developer'
			),
			
			1=>array(
				'fname'=>'rayjohn2',
				'lname'=>'tanute2',
				'job'=>'php developer2'
			)
		);
		
		foreach($value as $val){
			$json[] = $val; 
		}
		echo json_encode($json);
	}
	
	public function getuserinfo(){
		$this->data_db = new Database;
		echo json_encode($this->data_db->selectData());
	}

}
