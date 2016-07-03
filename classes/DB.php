<?php

class DB{
	private $dbh;
	
	public function __construct(){
		$this->dbh = new Pdo('mysql:dbname=albert;host=localhost', 'root', '');
	}
	
	public function query($sql, $params=[]){
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll(PDO::FETCH_OBJ);
	}
	
}