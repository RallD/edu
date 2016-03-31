<?php
/*Header("Content-Type: text/html; charset=utf-8");*/
class Db{
	const HOST = 'localhost';
	const USER = 'root';
	const PASSWORD = '';
	const DBNAME = 'albert';
	public $sql;
	public $data;
	
	public function __construct(){
		mysql_connect(self::HOST, self::USER, self::PASSWORD);
		mysql_select_db(self::DBNAME);
	}
	
	public function NewsInsert($data){
		$sql = "
			INSERT INTO news
			(title, article, date)
			VALUES
			('" . $data['title'] . "', '" . $data['article'] . "', CURRENT_TIMESTAMP())
		 ";
		mysql_query($sql);
	}
	public function NewsUpdate($data){
		$sql = "
			UPDATE news
			SET
			title='" . $data['title'] . "', article='" . $data['article'] . "', date=CURRENT_TIMESTAMP()
			WHERE id='" . $data['id'] . "'
		 ";
		mysql_query($sql);
	}
	public function NewsGetAll(){
		$sql = 'SELECT * FROM news ORDER BY date DESC';
		$res = mysql_query($sql);
		$ret = array();
		while(false !== ($row = mysql_fetch_assoc($res))){
			$ret[] = $row; 
		}
		return $ret;
	}
	public function NewsGetArticle($id){
		$sql = "SELECT * FROM news WHERE id='".$id."' ";
		$res = mysql_query($sql);
		$ret = array();
		while(false !== ($row = mysql_fetch_assoc($res))){
			$ret[] = $row; 
		}
		return $ret;
	}
}

/*$db = new Db();
$db->data = ['title'=>'Тайтл изменен', 'article'=>'Статья изменена', 'id'=>'15'];
$testarr = $db->NewsGetArticle(7);
var_dump($testarr);*/