<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/News.php';

if(!empty($_POST)){
	$data = array();
	if(!empty($_POST['title'])){
		$data['title'] = $_POST['title']; 
	}
	if(!empty($_POST['article'])){
		$data['article'] = $_POST['article']; 
	}
	if(isset($data['title']) && isset($data['article'])){
		$news = new News();
		$news->Insert($data);
		header('Location: /');
		die;
	}
}