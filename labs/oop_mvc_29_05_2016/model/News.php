<?php

require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/../functions/Db.php';

class News extends Article{
	private $db;
	public function __construct(){
		$this->db = new Db();
	}
	public function GetAll(){
		$sql = 'SELECT * FROM news ORDER BY date DESC';
		return $this->db->Query($sql);
	}
	public function Insert($data){
		$sql = "
			INSERT INTO news
			(title, article, date)
			VALUES
			('" . $data['title'] . "', '" . $data['article'] . "', CURRENT_TIMESTAMP())
		";
		return $this->db->Exec($sql);
	}

	public function GetOne($id){
		$sql = "SELECT * FROM news WHERE id='".$id."' ";
		return $this->db->Query($sql);
	}
	public function Update($data){
		$sql = "UPDATE news SET title = '" . $data['title'] . "', article = '" . $data['article'] . "' WHERE id='".$data['id']."' ";
		return $this->db->Exec($sql);
	}
}
