<?php

require __DIR__ . '/model/news.php';

$items = News_getAll();

include __DIR__ . '/views/index.php';