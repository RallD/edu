<?php
Header("Content-Type: text/html; charset=utf-8");
require_once __DIR__ . '/Db.class.php';
abstract class Article{
	public $title;
	public $text;
	public $arrfromform;
	abstract function showAll();
	abstract function showArticle($id);
	abstract function addArticle($arrfromform);
	abstract function modifyArticle($arrfromform);
}
class News extends Article{
	public function showAll(){
		return Db::NewsGetAll();
	}
	public function showArticle($id){
		return Db::NewsGetArticle($id);
	}
	public function addArticle($arrfromform){
		return Db::NewsInsert($arrfromform);
	}
	public function modifyArticle($arrfromform){
		return Db::NewsUpdate($arrfromform);
	}
}

/*
$db = new Db();
$news_art = new News;
$res = $news_art->showArticle(7);
var_dump($res);

$news_art->arrfromform = ['title'=>'Новый тайтл', 'article'=>'Новая статья'];
$news_art->addArticle($news_art->arrfromform);

$news_art->arrfromform = ['title'=>'Новый тайтл-ред', 'article'=>'Новая статья-ред', 'id'=>'16'];
$news_art->modifyArticle($news_art->arrfromform);
*/
