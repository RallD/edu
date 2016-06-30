<?php

abstract class AbstractModel{

	protected static $table;
	protected static $class;
/*какое-то статическое связывание используем - обращаемся из родительского класса в дочерний*/
	public static function getAll(){
		$db = new DB;
		$sql = 'SELECT * FROM ' . static::$table;
		return $db->queryAll($sql, static::$class);
	}
	public static function getOne($id){
		$db = new DB;
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
		return $db->queryOne($sql, static::$class);
	}
}