<?php

require __DIR__ . '/model/News.php';
require __DIR__ . '/functions/Db.php';

$news = new News();
$db = new Db();
$sql = $news->GetAll();
$items = $db->Query($sql);

include __DIR__ . '/views/index.php';