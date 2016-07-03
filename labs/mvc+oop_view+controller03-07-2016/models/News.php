<?php

class News extends AbstractModel{
	public $id;
	public $title;
	public $article;
	public $date;
	
	protected static $table = 'news';
	protected static $class = 'News';
	
	public static function newsInsert($data){
		$db = new DB;
		$sql = "INSERT INTO " . self::$table . " (title, article, date)
			VALUES
			('" . $data['title'] . "', '" . $data['article'] . "', CURRENT_TIMESTAMP())
		";
		return $db->queryInsert($sql);
	}
}