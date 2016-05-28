<?php
class Db{
	public function __construct(){
		mysql_connect('localhost', 'root', '');
		mysql_select_db('albert');
	}
	public function Exec($sql){
		mysql_query($sql);
	}
	public function Query($sql){
		$res = mysql_query($sql);
		$ret = array();
		while(false !== ($row = mysql_fetch_assoc($res))){
			$ret[] = $row; 
		}
		return $ret;
	}
}