<!DOCTYPE html>
<html>
	<head>
	  <title>Главная страница Новостной ленты</title>
	  <meta charset="utf-8" />
	</head>
	<body>
	<?php foreach($items as $item): ?>
		<h1><?= $item->title; ?></h1>
		<div><?= $item->date; ?></div>
		<div><?= $item->article; ?></div>
		<hr>
	<?php endforeach; ?>
	</body>
</html>
	
