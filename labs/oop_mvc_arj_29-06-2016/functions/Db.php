<?php
class Db{
	public function __construct(){
		mysql_connect('localhost', 'root', '');
		mysql_select_db('albert');
	}
	public function Exec($sql){
		mysql_query($sql);
	}
	public function Query($sql, $class='stdClass'){
		$res = mysql_query($sql);
		$ret = array();
		while(false !== ($row = mysql_fetch_object($res, $class))){
			$ret[] = $row; 
		}
		return $ret;
	}
}