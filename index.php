<?php

require __DIR__ . '/model/News.php';

$news = new News();
$items = $news->GetAll();

include __DIR__ . '/views/index.php';