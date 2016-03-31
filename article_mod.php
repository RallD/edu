<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/Db.class.php';
require __DIR__ . '/model/Article.class.php';

if($_GET['id']){
	$id = $_GET['id'];
}

$db = new Db();
$news_art = new News;

$items = $news_art->showArticle($id);

include __DIR__ . '/views/article_mod.php';