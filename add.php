<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/news.php';

if(!empty($_POST)){
	$data = array();
	if(!empty($_POST['title'])){
		$data['title'] = $_POST['title']; 
	}
	if(!empty($_POST['article'])){
		$data['article'] = $_POST['article']; 
	}
	if(isset($data['title']) && isset($data['article'])){
		News_insert($data);
		header('Location: /');
		die;
	}
}