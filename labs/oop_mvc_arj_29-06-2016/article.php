<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/News.php';

if($_GET['id']){
	$id = $_GET['id'];
}

$news = new News();
$items = $news->GetOne($id);
var_dump($items);

include __DIR__ . '/views/article.php';