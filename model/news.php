<?php

require_once __DIR__ . '/Article.php';

class News extends Article{
	public $title;
	public $text;
	public function Insert($data){
		$sql = "
			INSERT INTO news
			(title, article, date)
			VALUES
			('" . $data['title'] . "', '" . $data['article'] . "', CURRENT_TIMESTAMP())
		";
		return $sql;
	}
	public function GetAll(){
		$sql = 'SELECT * FROM news ORDER BY date DESC';
		return $sql;
	}
	public function GetOne($id){
		$sql = "SELECT * FROM news WHERE id='".$id."' ";
		return $sql;
	}
	public function Update($data){
		$sql = "UPDATE news SET title = '" . $data['title'] . "', article = '" . $data['article'] . "' WHERE id='".$data['id']."' ";
		return $sql;
	}
}
