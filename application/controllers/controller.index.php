<?php
Class Index extends WebApp implements AppInterface{
	
	/*
	| Lets load our controller using our constructor
	| The value of controller will depend on GET Method Value.
	| Refer on HTACCESS in main root of our application to know our GET method implemented
	*/
	public function __construct($controller){
		$this->$controller();
	}

	public function index(){
		Functions::loadViews('header');
		echo "index";
	}
	
	public function home(){
		$this->data_db = new Database;
		$myaarray = array(
			'Regular Data' => array(
			'1'=>"myvar",
			'2'=>"myvar",
			'3'=>"myvar",
			),
			'query data' => $this->data_db->selectData()
		);
		
		Functions::loadViews('header');
		Functions::loadViews('index.home', $myaarray);
		Functions::loadViews('footer');
		
		
	}
}
