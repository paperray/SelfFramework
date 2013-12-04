<?php 
Class Database extends WebApp{
	
	/*
	| Our property to use when querying
	*/
	private $query;
	/*
	| Our property to use to wrap the return data on select
	*/
	private $data;
	/*
	| Constructor to load PDO. so that in every query, we will encapsulate 
	| $this->myPDO on prepare() statement
	*/
	public function __construct(){
		/*
		| Load our PDO from its parent class WebApp.
		*/
		return $this->myPDO = parent::loadPDO();
	}
	
	/*
	| Test query. follow this format when querying.
	*/
	public function selectData(){
		$this->query = $this->myPDO->prepare("SELECT * FROM data");
		$this->query->execute();
		$this->data = $this->query->fetchAll(PDO::FETCH_ASSOC);
		return $this->data;
	}

}