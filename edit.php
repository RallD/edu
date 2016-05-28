<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/model/News.php';
require __DIR__ . '/functions/Db.php';

if($_GET['id']){
	$id = $_GET['id'];
}

$news = new News();
$db = new Db();
$sql = $news->GetOne($id);
$items = $db->Query($sql);

include __DIR__ . '/views/edit.php';