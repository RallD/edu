<?php

class DB{
	public function __construct(){
		mysql_connect('localhost', 'root', '');
		mysql_select_db('albert');
	}
	public function queryAll($sql, $class = 'stdClass'){
		$res = mysql_query($sql);
		if(false === $res){
			return false;
		}
		$ret = [];
		while($row = mysql_fetch_object($res, $class)){
			$ret[] =$row;
		}
		return $ret;
	}
	public function queryOne($sql, $class = 'stdClass'){
		return $this->queryAll($sql, $class)[0];
	}
	public function queryInsert($sql){
		return $res = mysql_query($sql);
	}
}