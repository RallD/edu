<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/Db.class.php';
require __DIR__ . '/model/Article.class.php';

$db = new Db();
$news_art = new News;

if(!empty($_POST)){
	$data = array();
	if(!empty($_POST['title'])){
		$data['title'] = $_POST['title']; 
	}
	if(!empty($_POST['article'])){
		$data['article'] = $_POST['article']; 
	}
	if(!empty($_POST['id'])){
		$data['id'] = $_POST['id']; 
	}
	if(isset($data['title']) && isset($data['article']) && isset($data['id'])){
		$news_art->modifyArticle($data);
		header('Location: /');
		die;
	}
}