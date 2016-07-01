<?php

abstract class AbstractModel{

	protected static $table;
	protected static $class;
/*какое-то статическое связывание используем - обращаемся из родительского класса в дочерний*/
	public static function getAll(){
		$db = new DB;
		$sql = 'SELECT * FROM ' . static::$table . ' ORDER BY date DESC';
		return $db->queryAll($sql, static::$class);
	}
	public static function getOne($id){
		$db = new DB;
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
		return $db->queryOne($sql, static::$class);
	}
	public static function newsInsert($data){
		$db = new DB;
		$sql = "INSERT INTO " . static::$table . " (title, article, date)
			VALUES
			('" . $data['title'] . "', '" . $data['article'] . "', CURRENT_TIMESTAMP())
		";
		return $db->queryInsert($sql);
	}
}