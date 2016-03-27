<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/news.php';

if($_GET['id']){
	$id = $_GET['id'];
}

$items = News_getArticle($id);

include __DIR__ . '/views/article.php';