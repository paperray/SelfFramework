<?php

Class initPDO{
	/*
	| Variable for database Host
	*/
	private $dbHost = DB_HOST;
	/*
	| Variable for database Username
	*/
	private $dbUser = DB_USER;
	/*
	| Variable for database Password
	*/
	private $dbPass = DB_PASS;
	/*
	| Variable for database Name
	*/
	private $dbName = DB_NAME;
	/*
	| Variable we will use to hold the database connection
	*/
	public $myPDO = '';
	
	public  function __construct(){
		$this->connect();
	}	
	
	function connect(){
		try{
			$this->myPDO = new PDO('mysql:host=' .$this->dbHost. ';dbname=' .$this->dbName. '', $this->dbUser, $this->dbPass);
			$this->myPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $this->myPDO;
			
			
		
		}catch(PDOException $e){
			echo 'We\'re sorry but there was an error while trying to connect to the database';
			file_put_contents('application/storage/errors/connection.errors.txt', $e->getMessage().PHP_EOL,FILE_APPEND);
		}
	
	}
}
