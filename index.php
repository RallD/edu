<?php

require __DIR__ . '/model/Db.class.php';
require __DIR__ . '/model/Article.class.php';

$db = new Db();
$news_art = new News;

$items = $news_art->showAll();

include __DIR__ . '/views/index.php';