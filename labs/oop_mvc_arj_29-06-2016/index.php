<?php

require __DIR__ . '/model/News.php';

$items = News::GetAll();
var_dump($items);

include __DIR__ . '/views/index.php';